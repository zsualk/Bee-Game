<?php

namespace app\models;

use yii\base\Model;

class Bees
{
    var $maxPoints;
    var $hitPoints;
    var $currentPoints;

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




