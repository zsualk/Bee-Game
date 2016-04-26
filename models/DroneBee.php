<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
    public function droneBee($maxPoints, $hitPoints, $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}