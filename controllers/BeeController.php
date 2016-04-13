<?php

namespace app\controllers;

use Yii;

class BeeController extends MainController
{

    var $queenAlive ;

    public function actionIndex()
    {

        $this->session['hive'] = $this->beeHive;
        return $this->render('index');

    }

    public function actionBeehit()
    {

        $this->beeHive = $this->session['hive'];
        $this->isTheQueenAlive();
        return $this->render('index');

    }

    public function actionExit()
    {
        $this->session = Yii::$app->session->destroy();
        return $this->render('exit');

    }

    public function actionReset()
    {

        $this->creatingBeeHive();
        return $this->render('index');

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

        }
        elseif ( $this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints)
        {

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
                exit;
                return $this->render('reset');

            }

        }

        $this->hit();

    }

}
