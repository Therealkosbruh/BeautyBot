<?php

namespace app\controllers;

class EmployeeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('@app/views/site/employeeindex');
    }

    public function actionProfile()
    {
        return $this->render('@app/views/site/employeeprofile');
    }

}
