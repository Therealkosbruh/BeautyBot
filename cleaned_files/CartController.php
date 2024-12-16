<?php

namespace app\controllers;

use app\models\CartForm;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use YooKassa\Client;

class CartController extends Controller
{
    public function actionIndex(): string
    {
        $model = new CartForm();

        return $this->render('/site/cart/cart', ['model' => $model]);
    }

    public function actionBuy()
    {
        $params = Yii::$app->request->post();

        $client = new Client();
        $client->setAuth('345635', 'live_W7FDxD2crc_ZJdzAnVoneSsMUT0a7hIiWKP2ZncEnx0');

        $model = new CartForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            function translateKey($key)
            {
                $translate = [
                    "payment_method" => "Метод оплаты",
                    "email" => "Почта",
                    "CartForm" => "Получены следующие данные",
                    "city" => "Город",
                    "street" => "Улица",
                    "house" => "Дом",
                    "apartment" => "Квартира",
                    "comment" => "Комментарий",
                    "products" => "Товар",
                    "summary" => 'Сумма заказа',
                    "phone" => "Телефон",
                    "payment_type" => "Тип оплаты",
                ];

                return $translate[$key] ?? $key;
            }

            $payMethod = null;
            
            if($params['payment_method'] == "Картой"){
                $payMethod = "bank_card";
            }else{
                $payMethod = "sbp";
            }
            
            // $phone = $params["CartForm"]['phone'];
            $email = $params["CartForm"]['email'];
            if($params['payment_type'] == "Оплата при получении"){
                $price = 300;
            }else{
                $price = 0;
            }
            $products = json_decode(json_decode($params['products'], true), true);
            foreach ($products as $item) {
                if(isset($item['image'])) unset($item['image']);
                $items[] = [
                    'description' => implode(' ', $item),
                    'quantity' => $item['quantity'],
                    'amount' => [
                        'value' => preg_replace('/[^0-9]/', '', $item['price']).".00",
                        'currency' => 'RUB',
                    ],
                    'vat_code' => 1,
                ];
            }

            function formatParams($array, &$result)
            {
                foreach ($array as $key => $value) {
                    if ($key != "_csrf"){
                        if ($key == "products") {
                            $products = json_decode(json_decode($value, true), true);
                            foreach ($products as $product) {
                                if(isset($product['image'])) unset($product['image']);
                                if(isset($product['product_id'])) unset($product['product_id']);
                                if(isset($product['oldPrice'])) unset($product['oldPrice']);

                                $result .= "<strong>".translateKey($key).":</strong><br>";

                                formatParams($product, $result);
                            }
                        }
                        else if (is_array($value)) {
                            $result .= "<strong>".translateKey($key).":</strong><br>";
                            formatParams($value, $result);
                        } else {
                            if ($key == "summary") {
                                $result .= "<strong style='font-size: 1.2rem; color: green;'>".translateKey($key).":</strong> $value<br>";
                                
                            }else{
                                $result .= "<strong style='margin-left: 10px'>".translateKey($key).":</strong> $value<br>";
                            }
                        }
                    }
                }
            }
            
            if (empty($price)) $price = preg_replace('/[^0-9]/', '', $params['summary']);
            
            // var_dump($email); die;

            $message = '<p></p>';
            formatParams($params, $message);
            
            $this->getView()->registerJs("localStorage.clear();", \yii\web\View::POS_READY);

            Yii::$app->mailer->compose()
                ->setFrom('masonmc@yandex.ru')
                ->setTo('kirillgolovninwork@gmail.com')
                ->setSubject('Уведомление с сайта Luxpods')
                ->setTextBody('')
                ->setHtmlBody($message)
                ->send();

                $idempotenceKey = uniqid('', true);
                $response = $client->createPayment(
                    array(
                        'amount' => array(
                            'value' => preg_replace('/[^0-9]/', '', $price) . '.00',
                            'currency' => 'RUB',
                        ),
                        'payment_method_data' => array(
                            'type' => $payMethod,
                        ),
                        'confirmation' => array(
                            'type' => 'redirect',
                            'return_url' => "http://podster9.beget.tech/?afterbuy=1",
                        ),
                        'description' => 'Заказ от ' . date('d-m-Y H:i:s'),
                        'receipt' => array(
                            'customer' => array(
                                // 'phone' => $phone,
                                'email' => $email,
                            ),
                            'items' => $items,
                        ),
                    ),
                    $idempotenceKey
                );
                $confirmationUrl = $response->getConfirmation()->getConfirmationUrl();
                
                return $this->redirect($confirmationUrl);
        } else {
            return $this->render('/site/cart/cart', [
                'model' => $model,
            ]);
        }


        return $this->render('/site/cart/cart', ['afterBuy' => true, 'model' => $model,]);
    }
}
