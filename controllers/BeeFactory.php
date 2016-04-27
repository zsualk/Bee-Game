<?php
namespace app\controllers;

use Exception;

class BeeFactory {
    public static function build($bee_type)
    {
        return $bee_type;
    }
}