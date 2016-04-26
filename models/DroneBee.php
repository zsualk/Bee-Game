<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
    public function __construct()
    {
        $this->createBee(50, 12, 50);
        parent::__construct();
    }
}