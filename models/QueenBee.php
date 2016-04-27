<?php

namespace app\models;

// Queen bee class
class QueenBee extends Bees
{
    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }

    public function createBee()
    {
        $this->maxPoints = 100;
        $this->hitPoints = 8;
        $this->currentPoints = 100;
    }
}