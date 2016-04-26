<?php

namespace app\models;

// Queen bee class
class QueenBee extends Bees
{
    public function __construct()
    {
        $this->createBee(100, 8, 100);
        parent::__construct();
    }
}