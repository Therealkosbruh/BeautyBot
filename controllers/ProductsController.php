<?php

namespace app\controllers;

use app\models\Categories;
use app\models\Products;
use app\models\ProductSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ProductsController extends Controller
{
    public function actionIndex(): string
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $categories = Categories::find()->all();

        return $this->render('/site/products/products', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'categories' => $categories,
        ]);
    }

    public function actionProduct($id): string
    {
        $product = Products::find()
            ->where(['Product_ID' => $id])
            ->with('productImages')
            ->one();

        if ($product === null) {
            throw new NotFoundHttpException;
        }

        return $this->render('/site/products/product', [
            'product' => $product,
        ]);
    }

    public function actionCart(): string
    {
        return $this->render('/site/products/cart', [

        ]);
    }
}