<?php

namespace app\models;

use yii;

class QueenBee extends Bees
{
    /**
     * QueenBee constructor.
     */
    public function __construct()
    {
        $this->beePoints();
        parent::__construct();
    }

    /**
     * Creating queen bee with this points
     */
    public function beePoints()
    {
        $this->maxPoints = 100;
        $this->hitPoints = 8;
        $this->currentPoints = 100;
        $this->isQueenAlive = true;
    }

    /**
     * @return string
     * Checks if the queen is alive
     */
    public function isTheQueenAlive(){
        $this->beeHive = Yii::$app->session['hive'];
        for ($i = 0; $i < count($this->beeHive); $i++) {
            if ($this->beeHive[$i]->maxPoints == 100 && $this->beeHive[$i]->currentPoints < $this->beeHive[$i]->hitPoints) {
                return $this->isQueenAlive = false;
            }
        }
        $this->hit();
    }
}