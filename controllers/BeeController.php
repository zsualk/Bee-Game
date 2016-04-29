<?php

namespace app\controllers;

use app\models\QueenBee;
use Yii;

class BeeController extends MainController
{
    protected $message;

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index', ['message'=> $this->message]);
    }

    /**
     * @return string
     * hit the selected bee once
     */
    public function actionBeeHit()
    {
        $a = new QueenBee;
        $a->isTheQueenAlive(); // checking the status of the queen bee
        $this->message = $a->message;
        return $this->render('index', ['message'=> $this->message]);
    }

    /**
     * @return string
     * destroy the live session and exit the game
     */
    public function actionExit()
    {
        Yii::$app->session->destroy();
        return $this->render('exit', ['message'=> $this->message]);
    }

    /**
     * @return string
     * reset all the bees to max points
     */
    public function actionReset()
    {
        Yii::$app->session['hive'] = $this->build();
        return $this->render('index', ['message'=> $this->message]);
    }
}
