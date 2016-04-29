<?php
namespace app\controllers;

use app\models\BeeFactory;
use Yii;
use yii\web\Controller;

class MainController extends Controller
{
    protected $newBeeHive;

    /**
     * @return mixed
     */
    public function getBeeHive()
    {
        return $this->newBeeHive;
    }

    /**
     * @param mixed $beeHive
     */
    public function setBeeHive($beeHive)
    {
        $this->newBeeHive = $beeHive;
    }

    /**
     * @return mixed
     * bee factory
     */
    public function build()
    {
        for ($i=0; $i < Yii::$app->params['maxQueenNumber']; $i++) {
            $this->newBeeHive[] = BeeFactory::beeBuild("queen");
        }
        for ($i=0; $i < Yii::$app->params['maxWorkerNumber']; $i++) {
            $this->newBeeHive[] = BeeFactory::beeBuild("worker");;
        }
        for ($i=0; $i < Yii::$app->params['maxDroneNumber']; $i++) {
            $this->newBeeHive[] = BeeFactory::beeBuild("drone");
        }
        for ($i=0; $i < Yii::$app->params['maxIronNumber']; $i++) {
            $this->newBeeHive[] = BeeFactory::beeBuild("iron");
        }
        Yii::$app->session['hive'] = $this->newBeeHive;
        return $this->newBeeHive;
    }

    /**
     * @return string
     * rendering main index page
     */
    public function actionIndex()
    {
        Yii::$app->session['hive'] = $this->build(); // generating the beehive
        return $this->render('index');
    }


}