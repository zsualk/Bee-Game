<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }

    public function createBee()
    {
        $this->maxPoints = 75;
        $this->hitPoints = 10;
        $this->currentPoints = 75;
    }
}