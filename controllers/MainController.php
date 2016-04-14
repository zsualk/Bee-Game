<?php
namespace app\controllers;

use app\models\DroneBee;
use app\models\QueenBee;
use app\models\WorkerBee;
use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    var $session;
    var $beeHive = [];

    // Creating the beehive from the bee class
    public function creatingBeeHive()
    {

        $maxQueenNumber =  Yii::$app->params['maxQueenNumber'];
        for ($i=0; $i < $maxQueenNumber; $i++) {
            $this->beeHive[] = new QueenBee(100, 8, 100);
        }

        $maxWorkerNumber =  Yii::$app->params['maxWorkerNumber'];
        for ($i=0; $i < $maxWorkerNumber; $i++) {
            $this->beeHive[] = new WorkerBee(75, 10, 75);
        }

        $maxDroneNumber =  Yii::$app->params['maxDroneNumber'];
        for ($i=0; $i < $maxDroneNumber; $i++) {
            $this->beeHive[] = new DroneBee(50, 12, 50);
        }
    }

    public function init()
    {
        $this->creatingBeeHive();
        $this->session = Yii::$app->session;
        $this->session->open();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}