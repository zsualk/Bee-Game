<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    public function workerBee(Bees $maxPoints,Bees $hitPoints,Bees $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}