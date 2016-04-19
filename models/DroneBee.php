<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
    public function droneBee()
    {
        $this->points(100,8,100);
    }
}