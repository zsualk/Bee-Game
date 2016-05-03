<?php
namespace app\models;

use Exception;
use yii;

class BeeFactory {

    /**
     * @param $type - This will give the type of the bee to be created
     * @return DroneBee|IronBee|QueenBee|WorkerBee
     * @throws Exception
     */
    public static function beeBuild($type)
    {
        switch ($type) {
            case "queen":
                return new QueenBee();
            case "worker":
                return new WorkerBee();
            case "drone":
                return new DroneBee();
            case "iron":
                return new IronBee();
            default:
                throw new Exception("Invalid bug type.");
        }
    }
}