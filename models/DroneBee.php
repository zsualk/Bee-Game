<?php

namespace app\models;

// Drone bee class
class DroneBee extends Bees
{
    public function droneBee(Bees $maxPoints, Bees $hitPoints, Bees $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}