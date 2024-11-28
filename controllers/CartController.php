<?php

namespace app\controllers;

use app\models\CartForm;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CartController extends Controller
{
    public function actionIndex(): string
    {
        $model = new CartForm();

        return $this->render('/site/cart/cart', ['model' => $model]);
    }

    public function actionBuy(): string
    {
        $params = Yii::$app->request->post();

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
                    "phone" => "Телефон"
                ];

                return $translate[$key] ?? $key;
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

            $message = '<p></p>';
            formatParams($params, $message);


            Yii::$app->mailer->compose()
                ->setFrom('masonmc@yandex.ru')
                ->setTo('mauoryt@gmail.com')
                ->setSubject('Уведомление с сайта Luxpods')
                ->setTextBody('')
                ->setHtmlBody($message)
                ->send();
        } else {
            return $this->render('/site/cart/cart', [
                'model' => $model,
            ]);
        }


        return $this->render('/site/cart/cart', ['afterBuy' => true, 'model' => $model,]);
    }
}
