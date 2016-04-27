<?php

namespace app\models;

use yii\base\Model;

// Main Bee class
abstract class Bees extends Model
{
    var $maxPoints;
    var $hitPoints;
    var $currentPoints;

    public function __construct()
    {
        parent::__construct();
    }

    abstract public function createBee();
}




