<?php

namespace app\models;

use yii\base\Model;
use yii;

// Main Bee class
abstract class Bees extends Model
{
    protected $maxPoints;
    protected $hitPoints;
    protected $currentPoints;
    protected $message;
    protected $beeHive;
    protected $beeType;

    /**
     * @return mixed
     */
    public function getMaxPoints()
    {
        return $this->maxPoints;
    }

    /**
     * @param mixed $maxPoints
     */
    public function setMaxPoints($maxPoints)
    {
        $this->maxPoints = $maxPoints;
    }

    /**
     * @return mixed
     */
    public function getHitPoints()
    {
        return $this->hitPoints;
    }

    /**
     * @param mixed $hitPoints
     */
    public function setHitPoints($hitPoints)
    {
        $this->hitPoints = $hitPoints;
    }

    /**
     * @return mixed
     */
    public function getCurrentPoints()
    {
        return $this->currentPoints;
    }

    /**
     * @param mixed $currentPoints
     */
    public function setCurrentPoints($currentPoints)
    {
        $this->currentPoints = $currentPoints;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getBeeHive()
    {
        return $this->beeHive;
    }

    /**
     * @param mixed $beeHive
     */
    public function setBeeHive($beeHive)
    {
        $this->beeHive = $beeHive;
    }

    /**
     * @return mixed
     */
    public function getBeeType()
    {
        return $this->beeType;
    }

    /**
     * @param mixed $beeType
     */
    public function setBeeType($beeType)
    {
        $this->beeType = $beeType;
    }

    /**
     * Bees constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    abstract public function createBee();

    /**
     * Checking the bee can take more hit and after hit the randomly selected bee
     */
    public function hit()
    {
        $this->beeHive = Yii::$app->session['hive'];
        $randomBee = array_rand($this->beeHive); //choosing the random bee

        if ($this->beeHive[$randomBee]->hitPoints == NULL){
            $this->message = "</br> The iron bee just come to fly.";
        }

        if ($this->beeHive[$randomBee]->currentPoints > $this->beeHive[$randomBee]->hitPoints) {
            $this->beeHive[$randomBee]->currentPoints = $this->beeHive[$randomBee]->currentPoints - $this->beeHive[$randomBee]->hitPoints;
            $this->message = "</br>This bee has been hit: " . get_class($this->beeHive[$randomBee]) . " and has " . $this->beeHive[$randomBee]->currentPoints . " points left.";
            Yii::$app->session['hive'][$randomBee] = $this->beeHive[$randomBee];
        } elseif ($this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints) {
            $this->hit();
        }
    }
}




