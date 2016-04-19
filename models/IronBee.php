<?php

namespace app\models;

class IronBee extends Bees
{
    var $magnes;
    public function ironBee($magnes)
    {
        $this->magnes = $magnes;
    }
}