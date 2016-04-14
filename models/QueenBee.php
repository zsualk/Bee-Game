<?php

namespace app\models;

// Queen bee class
class QueenBee extends Bees
{
    public function queenBee(Bees $maxPoints,Bees $hitPoints,Bees $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}