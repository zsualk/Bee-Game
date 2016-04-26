<?php

namespace app\models;

class IronBee extends Bees
{
    public function createBee()
    {

    }

    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }
}