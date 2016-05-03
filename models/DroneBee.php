<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
     /**
     * DroneBee constructor.
     */
    public function __construct()
    {
        $this->beePoints();
        parent::__construct();
    }

    /**
     * Creating drone bee with this points
     */
    public function beePoints()
    {
        $this->maxPoints = 50;
        $this->hitPoints = 12;
        $this->currentPoints = 50;
    }
}