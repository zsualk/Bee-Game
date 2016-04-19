<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    public function workerBee()
    {
        $this->points(100,8,100);
    }
}