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
        $this->createBee();
        parent::__construct();
    }

    /**
     * creating drone bee with this points
     */
    public function createBee()
    {
        $this->maxPoints = 50;
        $this->hitPoints = 12;
        $this->currentPoints = 50;
    }
}