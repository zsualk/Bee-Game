<?php

namespace app\models;

// Queen bee class
use yii;

class QueenBee extends Bees
{
    /**
     * QueenBee constructor.
     */
    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }

    /**
     * creating queen bee with this points
     */
    public function createBee()
    {
        $this->maxPoints = 100;
        $this->hitPoints = 8;
        $this->currentPoints = 100;
    }

    /**
     * @return string
     * checks if the queen is alive, if yes calling the hit() function, if its dead going back to the index page
     */
    function isTheQueenAlive(){
        for ($i = 0; $i < count($this->beeHive); $i++) {
            if ($this->beeHive[$i]->maxPoints == 100 && $this->beeHive[$i]->currentPoints < $this->beeHive[$i]->hitPoints) {
               $this->message = "</br>Queen is dead! </br>Reset all the bees or exit game";
            }
        }
        $this->hit();
    }
}