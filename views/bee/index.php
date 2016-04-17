<?php
/* @var $this yii\web\View */
?>

<h1>Game Page</h1>
<?php
echo $message;
?>

<form action="">
    <input type="button" value="Hit a bee!!!" onclick="location.href='/bee/bee-hit'" />

    <input type="button" value="Reset all the bees!" onclick="location.href='/main'" />

    <input type="button" value="Exit game!" onclick="location.href='/bee/exit'" />
</form>



