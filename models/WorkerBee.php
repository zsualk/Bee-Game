<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    public function workerBee($maxPoints, $hitPoints, $currentPoints)
    {
        $this->maxPoints = $maxPoints;
        $this->hitPoints = $hitPoints;
        $this->currentPoints = $currentPoints;
    }
}