<?php

namespace app\models;

// Queen bee class
class QueenBee extends Bees
{
    public function queenBee($maxPoints, $hitPoints, $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}