<?php

namespace app\controllers;

use app\models\ProductSearch;

class SignupController extends \yii\web\Controller
{
    public function actionChooseService()
    {
        $searchModel = new ProductSearch();
        return $this->render("@app/views/site/chooseservice",[
            'searchModel' => $searchModel
        ]);
    }

    public function actionServiceInfo(){
        return $this->render("@app/views/site/serviceinfo");
    }

}
