<?php
namespace app\controllers;

use app\models\Bees;
use app\models\DroneBee;
use app\models\QueenBee;
use app\models\WorkerBee;
use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    var $session;
    var $maxQueenNumber = 1;
    var $maxWorkerNumber = 5;
    var $maxDroneNumber = 8;
    var $beeHive = [];

    // Creating the beehive from the bee class
    public function creatingBeeHive()
    {
        new Bees(0, 0, 0);

        for ($i=0; $i < $this->maxQueenNumber; $i++) {
            $this->beeHive[] = new QueenBee(100, 8, 100);
        }

        for ($i=0; $i < $this->maxWorkerNumber; $i++) {
            $this->beeHive[] = new WorkerBee(75, 10, 75);
        }

        for ($i=0; $i < $this->maxDroneNumber; $i++) {
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