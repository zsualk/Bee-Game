<?php

namespace app\controllers;

use app\models\Bees;
use app\models\QueenBee;
use app\models\WorkerBee;
use app\models\DroneBee;
use yii\web\Session;


class BeeController extends \yii\web\Controller
{
    var $session ;
    var $maxQueenNumber = 1;
    var $maxWorkerNumber = 5;
    var $maxDroneNumber = 8;
    var $beeHive = [];
    var $queenAlive = true;

    public function actionIndex()
    {
        $this->session= new Session();
        $this->session->open();

        if ($this->queenAlive == false)
        {
            $this->session->destroy();
            return $this->render('exit');
        }
        else
        {
            $this->creatingBeeHive();
            return $this->render('index');
        }

    }

    public function actionHitABee()
    {

        $this->hit();
        return $this->render('index');
    }

    public function actionExit()
    {

        return $this->render('exit');

    }

    public function actionReset()
    {
        $this->resetBee();
        return $this->render('index');

    }

    public function creatingBeeHive()
    {
        $_SESSION["beeHive"] = $this->beeHive;
        
        $b = new Bees(0,0,0);
        // creating all the bees here
        for ($i=0 ; $i < $this->maxQueenNumber ; $i++)
        {
            $this->beeHive[] = new QueenBee(100,8,100);
        }

        for ($i=0 ; $i < $this->maxWorkerNumber ; $i++)
        {
            $this->beeHive[] = new WorkerBee(75,10,75);
        }

        for ($i=0 ; $i < $this->maxDroneNumber ; $i++)
        {
            $this->beeHive[] = new DroneBee(50,12,50);
        }
        $this->isTheQueenAlive();
    }

    public function beeToHit()
    {
        return array_rand($this->beeHive);
    }


    public function hit()
    {
        $randomBee = $this->beeToHit();

        if ( $this->beeHive[$randomBee]->currentPoints > $this->beeHive[$randomBee]->hitPoints)
        {
            $this->beeHive[$randomBee]->currentPoints = $this->beeHive[$randomBee]->currentPoints - $this->beeHive[$randomBee]->hitPoints;

            echo "This bee has been hit: " . get_class($this->beeHive[$randomBee]) . " and has " . $this->beeHive[$randomBee]->currentPoints . " points left.";
            echo "</br>";

            $this->isTheQueenAlive();
        }
        elseif ( $this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints)
        {
            echo " This bee is dead " . get_class($this->beeHive[$randomBee]);
            $this->hit();
        }

    }

    function isTheQueenAlive(){

        for ($i = 0; $i < count($this->beeHive) ; $i++)
        {
            if ($this->beeHive[$i]->maxPoints == 100 && $this->beeHive[$i]->currentPoints < $this->beeHive[$i]->hitPoints)
            {
                echo "Queen is dead! </br>";
                $this->queenAlive = false;
                return $this->render('index');

            }

        }

        return $this->render('index');

    }

    function resetBee()
    {

        for ($i = 0; $i < count($this->beeHive) ; $i++)
        {

            $this->beeHive[$i]->currentPoints = $this->beeHive[$i]->maxPoints;
            echo "This bee has been hit: " . get_class($this->beeHive[$i]) . " and has " . $this->beeHive[$i]->currentPoints . " points left.";
        }

        echo ("All bees are reset!!!");
        return $this->render('index');

    }

}
