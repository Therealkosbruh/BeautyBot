<?php

namespace app\controllers;

class SubscriptionController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render("@app/views/subscriptionindex");
    }

}
