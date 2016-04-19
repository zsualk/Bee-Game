<?php

namespace app\models;

// Queen bee class
class QueenBee extends Bees
{
    public function queenBee()
    {
        $this->points(100,8,100);
    }
}