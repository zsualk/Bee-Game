<?php

namespace app\models;

use yii\base\Model;

// Main Bee class
class Bees extends Model
{
    var $maxPoints;
    var $hitPoints;
    var $currentPoints;

    public function points($maxPoints, $hitPoints, $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}




