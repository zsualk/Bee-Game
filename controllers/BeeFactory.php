<?php
namespace app\controllers;

use app\models\DroneBee;
use app\models\IronBee;
use app\models\QueenBee;
use app\models\WorkerBee;
use Exception;
use Yii;

class BeeFactory {
    var $beeHive;
    public function build()
    {
        for ($i=0; $i < Yii::$app->params['maxQueenNumber']; $i++) {
            $this->beeHive[] = new QueenBee();
        }
        for ($i=0; $i < Yii::$app->params['maxWorkerNumber']; $i++) {
            $this->beeHive[] = new WorkerBee();
        }
        for ($i=0; $i < Yii::$app->params['maxDroneNumber']; $i++) {
            $this->beeHive[] = new DroneBee();
        }
        for ($i=0; $i < Yii::$app->params['maxIronNumber']; $i++) {
            $this->beeHive[] = new IronBee();
        }
        return $this->beeHive;
    }
}