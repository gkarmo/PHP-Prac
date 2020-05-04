<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>
    
<?php 
$names = array("gayah", "karmo", "Lovetee", "Love", "John", "Doe", "Steve", "Ron");
for ($i = 0; $i <= 7; $i++) {
    // to stop the loop from showing something at a certain point in the array
    if($names[$i] =="Love") {
        //continue skips Love
        continue;
        //break stops the array at Love and shows nothing further
        // break;
    }
    echo $names[$i] ."<br>";
}
?>
</body>
</html>