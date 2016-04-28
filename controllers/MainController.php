<?php
namespace app\controllers;

use app\models\DroneBee;
use app\models\IronBee;
use app\models\QueenBee;
use app\models\WorkerBee;
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