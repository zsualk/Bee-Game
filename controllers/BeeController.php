<?php

namespace app\controllers;

use app\models\QueenBee;
use Yii;
use Exception;

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
     * Hit the selected bee once
     */
    public function actionBeeHit()
    {
        $bee = new QueenBee;
        $bee->isTheQueenAlive(); // checking the status of the queen bee
        try {
            if ($bee->isQueenAlive == true) {
                $this->message = $bee->message;
                return $this->render('index', ['message' => $this->message]);
            }
            if ($bee->isQueenAlive == false) {
                return $this->render('index', ['message' => "Queen is dead. Reset the game or exit"]);
            }
        }
        catch(Exception $type){
            return $this->render('index', ['message'=> $type->getMessage()]) ;
        }
    }

    /**
     * @return string
     * Destroy the live session and exit the game
     */
    public function actionExit()
    {
        Yii::$app->session->destroy();
        return $this->render('exit', ['message'=> $this->message]);
    }

    /**
     * @return string
     * Reset all the bees to max points
     */
    public function actionReset()
    {
        Yii::$app->session['hive'] = $this->build();
        return $this->render('index', ['message'=> $this->message]);
    }
}
