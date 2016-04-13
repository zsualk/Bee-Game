<?php

namespace app\models;

use yii\base\Model;

class Bees
{
    var $maxPoints = 0;
    var $hitPoints = 0;
    var $currentPoints = 0;

    public function __construct($maxPoints, $hitPoints, $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}

class QueenBee extends Bees
{

}

class WorkerBee extends Bees
{

}

class DroneBee extends Bees
{

}




