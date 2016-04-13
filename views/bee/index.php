<?php
/* @var $this yii\web\View */
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<h1>bee/index</h1>

<form action="">
    <input type="button" value="Hit a bee!!!" onclick="location.href='/index.php?r=/bee/beehit'" />

    <input type="button" value="Reset all the bees!" onclick="location.href='/index.php?r=/main'" />

    <input type="button" value="Exit game!" onclick="location.href='/index.php?r=/bee/exit'" />
</form>



