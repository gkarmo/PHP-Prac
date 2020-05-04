<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside Job</title>
</head>
<body>
    <?php $numbers = array(8, 25, 45, 60, 168, 500, 999); 
        print_r($numbers);
    
    ?> <br>
    <!-- To see the first number in the array -->
    Current or first number: <?php echo current($numbers) ."<br>";
    // to see the next number after the current
    next($numbers);
    // which then makes it the current when you call current of the array
    echo "Next index in array's number: " . current($numbers) ."<br>";
    // you can double skip
    next($numbers);
    next($numbers);
    echo "Double skip: " . current($numbers) ."<br>";
    // to start back at the beginning of the array you can call reset
    reset($numbers);
    echo "Reset back to first number: " . current($numbers) . "<br>";
    // to jump to the end of the array
    end($numbers);
    echo "Jump to end of array: " . current($numbers) ."<br>";
    // will return blank if there is no next index
    next($numbers);
    echo "BLANK: " . current($numbers) ."<br>";
    ?>
    
    
</body>
</html>