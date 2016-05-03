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
    protected $isQueenAlive;

    /**
     * @return int
     */
    public function getMaxPoints()
    {
        return (int)$this->maxPoints;
    }

    /**
     * @param int $maxPoints
     */
    public function setMaxPoints($maxPoints)
    {
        $this->maxPoints = $maxPoints;
    }

    /**
     * @return int
     */
    public function getHitPoints()
    {
        return (int)$this->hitPoints;
    }

    /**
     * @param int $hitPoints
     */
    public function setHitPoints($hitPoints)
    {
        $this->hitPoints = $hitPoints;
    }

    /**
     * @return int
     */
    public function getCurrentPoints()
    {
        return (int)$this->currentPoints;
    }

    /**
     * @param int $currentPoints
     */
    public function setCurrentPoints($currentPoints)
    {
        $this->currentPoints = $currentPoints;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return (string)$this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return array
     */
    public function getBeeHive()
    {
        return $this->beeHive;
    }

    /**
     * @param array $beeHive
     */
    public function setBeeHive($beeHive)
    {
        $this->beeHive = $beeHive;
    }

    /**
     * @return bool
     */
    public function getIsQueenAlive()
    {
        return $this->isQueenAlive;
    }

    /**
     * @param bool $isQueenAlive
     */
    public function setIsQueenAlive($isQueenAlive)
    {
        $this->isQueenAlive = $isQueenAlive;
    }

    /**
     * Bees constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return int
     * Set the points for the current bee type
     */
    abstract public function beePoints();

    /**
     * Checking the bee can take more hit and if it is true hit the randomly selected bee
     */
    public function hit()
    {
        $this->beeHive = Yii::$app->session['hive'];
        $randomBee = array_rand($this->beeHive); //Choosing the random bee

        if ($this->beeHive[$randomBee]->currentPoints > $this->beeHive[$randomBee]->hitPoints) {
            $this->beeHive[$randomBee]->currentPoints = $this->beeHive[$randomBee]->currentPoints - $this->beeHive[$randomBee]->hitPoints;
            $this->setMessage("This bee has been hit: " . get_class($this->beeHive[$randomBee]) . " and has " . $this->beeHive[$randomBee]->currentPoints . " points left.");
        } elseif ($this->beeHive[$randomBee]->currentPoints < $this->beeHive[$randomBee]->hitPoints) {
            $this->hit();
        }

        if ($this->beeHive[$randomBee]->hitPoints == NULL){
            $this->message = "The iron bee just come to fly.";
        }
    }
}




