<?php

namespace app\models;

class IronBee extends Bees
{
    public function ironBee(Bees $maxPoints,Bees $hitPoints,Bees $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
        $color = "black";
    }
}