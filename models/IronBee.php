<?php

namespace app\models;

class IronBee extends Bees
{
    /**
     * Creating iron bee
     */
    public function beePoints()
    {

    }

    /**
     * IronBee constructor.
     */
    public function __construct()
    {
        $this->beePoints();
        parent::__construct();
    }
}