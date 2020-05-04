<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
$name = array('Billy', 'Bob', 'Thorton');
echo $name[2];
?> <br>

<?php 
$food = array('Pizza', 10, 15, array("Asian", "French", "German"), "Pasta"); ?>
<!-- Accessing array -->
<?php echo $food[2] ?> <br>
<?php echo $food[3][2] ?> <br>
<?php echo $food[1] ?> <br>
<!-- adding to array at specific index -->
<?php $food[13] = "Gee" ?> <br>
<?php $food[24] = "Computer" ?> <br>

<!-- Print out whole structure of your array -->
<?php echo print_r($food) ?> <br>
<!-- Using pre tag makes the structure a lot more clean -->
<pre>
<?php echo print_r($food) ?> <br>
</pre>    

<!-- ASSOCIATIVE ARRAY , like switch-->
<?php $color = array("A" =>"40", "B" =>"Pizza");  ?> <br>
<?php echo $color["A"] ?> <br>
<?php echo $color["B"] ?> <br>
<?php $moreFood = array("Asian" =>"Pizza", "Italian" =>"Biryani"); ?> <br>
<?php echo $moreFood["Asian"] ?> <br>
<pre>
<?php echo print_r($moreFood) ?> <br>
</pre>


</body>
</html>