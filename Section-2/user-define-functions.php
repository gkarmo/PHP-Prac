<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
    $scooby = 5;
    function Welcome() {
        echo "Welcome to the party";
    }
     function addParm($x, $y) {
         $result = $x + $y;
         echo "Addition with parameter is: {$result} <br>";
     }

     function testing() {
         // how to access global variables into a local scope
         global $scooby;
         $a = 3;

         echo ($a + $scooby)."<br>";
     }
     testing();
    // global doesn't work with the outer local scopes
     global $a;
     echo $a;
    ?>
</body>
</html>