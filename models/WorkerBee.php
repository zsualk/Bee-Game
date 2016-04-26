<?php

namespace app\models;

// Worker bee class
class WorkerBee extends Bees
{
    public function __construct()
    {
        $this->createBee(75, 10, 75);
        parent::__construct();
    }
}