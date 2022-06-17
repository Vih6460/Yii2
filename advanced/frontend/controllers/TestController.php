<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller{

    public function actionServer()
    {
        echo 'testing Controller'; 
    }

    public function actionTesting()
    {
        return $this->render('testing');
    }
}