<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    var $beeHive;
    public function init()
    {
        $beeFactory = new BeeFactory();
        $this->beeHive = $beeFactory->build();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}