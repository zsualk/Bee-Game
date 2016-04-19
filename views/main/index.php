<?php
/* @var $this yii\web\View */
$session = Yii::$app->session['hive'];
var_dump($session[1]);
?>

<h1>Start page</h1>

<form action="">
    <input type="button" value="Start the game !" onclick="location.href='/bee/index'" />
</form>
