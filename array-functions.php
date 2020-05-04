<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Function</title>
</head>
<body>
<?php 
$color = array("red", "green", "blue");
// removing the last item in the array
array_pop($color);
array_pop($color);
// adding items to the end of your array
array_push($color,"skyblue", "purple", "yellow");
?> <br>
<pre>
<?php echo print_r($color) ?> <br>
</pre>
<!-- counting the amount of items in your array -->
Number of Item: <?php echo count($color) ?> <br>
<?php $numbers = array(13,54,7,89,100,15,12,789,1000) ?> <br>  
<!-- calling highest number in array -->
Max: <?php echo max($numbers) ?> <br>  
<!-- calling lowest number in array -->
Min: <?php echo min($numbers) ?> <br> 
<!-- checking to see if a specific number/item is in array -->
In Array: <?php echo in_array(89, $numbers); ?> <br> 
<!-- Sorting numbers in array -->
<?php sort($numbers); ?> 
<pre>
    <?php print_r($numbers) ?>
</pre>

<!-- Reverse sorting -->
<?php rsort($numbers); ?> 
<pre>
    <?php print_r($numbers) ?>
</pre>

<!-- Imploade function returns a string from the elemnts of an array -->
Implode: 
<?php $quote = array("Never", "Give", "UP", "in", "life"); ?> <br>
<?php echo implode(" ", $quote); ?> <br> 
<!-- Explode function breaks a string into an array -->
Explode:
<?php $sentence = "Hi how was your day today"; ?>
<!-- error because there is no string conversion allowed -->
<?php echo explode(" ",$sentence); ?> 
<pre>
    <?php print_r(explode(" ",$sentence)) ?>
</pre>





</body>
</html>