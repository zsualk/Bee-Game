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
    var $beeHive = [];

    // Creating the beehive from the bee class
    public function creatingBeeHive()
    {
        for ($i=0; $i < Yii::$app->params['maxQueenNumber']; $i++) {
            $this->beeHive[] = new QueenBee;
        }
        for ($i=0; $i < Yii::$app->params['maxWorkerNumber']; $i++) {
            $this->beeHive[] = new WorkerBee;
        }
        for ($i=0; $i < Yii::$app->params['maxDroneNumber']; $i++) {
            $this->beeHive[] = new DroneBee;
        }
        for ($i=0; $i < Yii::$app->params['maxIronNumber']; $i++) {
            $this->beeHive[] = new IronBee;
        }
    }

    public function init()
    {
        $this->creatingBeeHive();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}