<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionBonuses()
    {
        return $this->render('@app/views/site/userbonuses');
    }

    public function actionProfile(){
        return $this->render('@app/views/site/profile');
    }

}
