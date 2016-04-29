<?php

namespace app\models;

class IronBee extends Bees
{
    /**
     * creating iron bee
     */
    public function createBee()
    {

    }

    /**
     * IronBee constructor.
     */
    public function __construct()
    {
        $this->createBee();
        parent::__construct();
    }
}