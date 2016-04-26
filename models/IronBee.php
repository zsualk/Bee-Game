<?php

namespace app\models;

class IronBee extends Bees
{
    var $justFly;

    public function createBee()
    {
        $this->justFly = true;
    }

    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }
}