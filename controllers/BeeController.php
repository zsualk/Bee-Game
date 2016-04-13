<?php

namespace app\controllers;

use Yii;

class BeeController extends MainController
{
    public function actionIndex()
    {
        $this->session['hive'] = $this->beeHive;
        return $this->render('index');
    }

    // hit the selected bee once
    public function actionBeeHit()
    {
        $this->beeHive = $this->session['hive'];
        $this->isTheQueenAlive();
        return $this->render('index');
    }

    // destroy the live session and exit the game
    public function actionExit()
    {
        $this->session = Yii::$app->session->destroy();
        return $this->render('exit');
    }

    // reset all the bees to max points
    public function actionReset()
    {
        $this->creatingBeeHive();
        return $this->render('index');
    }

    // Checking the bee can take more hit and after hit the randomly selected bee
    public function hit()
    {
        $randomBee = array_rand($this->beeHive);

        if ($this->beeHive[$randomBee]->currentPoints > $this->beeHive[$randomBee]->hitPoints) {
            $this->beeHive[$randomBee]->currentPoints = $this->beeHive[$randomBee]->currentPoints - $this->beeHive[$randomBee]->hitPoints;
            echo "</br></br></br></br>This bee has been hit: " . get_class($this->beeHive[$randomBee]) . " and has " . $this->beeHive[$randomBee]->currentPoints . " points left.";
        } elseif ($this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints) {
            $this->hit();
        }
    }

    // checks if the queen is alive, if yes callin the hit() function, if its dead going back to the index page
    function isTheQueenAlive(){

        for ($i = 0; $i < count($this->beeHive); $i++) {
            if ($this->beeHive[$i]->maxPoints == 100 && $this->beeHive[$i]->currentPoints < $this->beeHive[$i]->hitPoints) {
                echo "</br></br></br></br>Queen is dead! </br>";
                echo "Reset all the bees or exit game";
                return $this->actionIndex();
            }
        }
        $this->hit();
    }
}
