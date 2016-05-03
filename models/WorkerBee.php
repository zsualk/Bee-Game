<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    /**
     * WorkerBee constructor.
     */
    public function __construct()
    {
        $this->beePoints();
        parent::__construct();
    }

    /**
     * Creating worker bee with this points
     */
    public function beePoints()
    {
        $this->maxPoints = 75;
        $this->hitPoints = 10;
        $this->currentPoints = 75;
    }
}