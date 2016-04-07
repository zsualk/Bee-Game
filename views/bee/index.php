<?php
/* @var $this yii\web\View */
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<h1>bee/index</h1>

<input type="submit" class="button" name="Slap a bee !!!" value="slap" />

<script type="text/javascript"> $(document).ready(function(){
$('.button').click(function(){
var clickBtnValue = $(this).val();
var ajaxurl = '/controllers/BeeController.php',
data =  {'action': clickBtnValue};
$.post(ajaxurl, data, function (response) {
// Response div goes here.
alert("action performed successfully");
});
});

});
</script>