<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }

    public function createBee()
    {
        $this->maxPoints = 50;
        $this->hitPoints = 12;
        $this->currentPoints = 50;
    }
}