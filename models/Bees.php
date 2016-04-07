<?php
/**
 * Created by PhpStorm.
 * User: zsualk
 * Date: 06/04/2016
 * Time: 14:29
 */

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






