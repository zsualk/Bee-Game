<?php

namespace app\controllers;

use app\models\Bees;
use app\models\DroneBee;
use app\models\QueenBee;
use app\models\WorkerBee;

class BeeController extends \yii\web\Controller
{
    var $maxQueenNumber = 1;
    var $maxWorkerNumber = 5;
    var $maxDroneNumber = 8;
    var $beeHive = [];

    public function actionIndex()
    {
        //$this->creatingBeeHive();
        //var_dump($this->beeHive);

        return $this->render('index');

    }

    public function creatingBeeHive()
    {

        $bee = new Bees(0,0,0);

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

            echo "This bee has been hit: " . get_class($this->beeHive[$randomBee]);
            echo "</br>";

            $this->isTheQueenAlive();
        }

        if ( $this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints)
        {
            echo " This bee is dead " . get_class($this->beeHive[$randomBee]);
        }

    }

    function isTheQueenAlive(){

        for ($i = 0; $i < count($this->beeHive) ; $i++)
        {
            if ($this->beeHive[$i]->maxPoints == 100)
            {
                if ($this->beeHive[$i]->currentPoints < $this->beeHive[$i]->hitPoints)
                {
                    echo "Queen is dead! </br>";
                    echo "to reset press r";
                    exit;
                }
                else
                {
                    $this->hit();
                }

            }
            else
            {
                $this->hit() ;
            }

        }

    }

    function resetBee()
    {

        for ($i = 0; $i < count($this->beeHive) ; $i++)
        {

        $this->beeHive[$i]->currentPoints = $this->beeHive[$i]->maxPoints;

        }

    echo ("All bees are reset!!!");

    }

}
