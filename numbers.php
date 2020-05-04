<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>

<?php

$FirstNumber = 3;
$SecondNumber = 4;
$ThirdNumber = 3.65478;
?> <br>
<?php echo $ThirdNumber + 9 - 6 ?> <br>
<?php echo 3.1/6 ?> <br>
<!-- <?php echo 7/0 ; ?>  Can't divide by zero-->
Ceil: <?php echo ceil($ThirdNumber + 9 - 6) ?> <br>
Floor: <?php echo floor($ThirdNumber + 9 - 6) ?> <br>

<!-- checks if integer -->
<?php echo "is ($FirstNumber) :integer" . is_int($FirstNumber); ?> <br>
<?php echo "is ($ThirdNumber) :integer" . is_int($ThirdNumber); ?> <br>
<!-- checks if float -->
<?php echo "is ($FirstNumber) :integer" . is_float($FirstNumber); ?> <br>
<?php echo "is ($ThirdNumber) :float" . is_float($ThirdNumber); ?> <br>
<!-- checks if numberic int/float -->
<?php echo "is ($FirstNumber) :numeric" . is_numeric($FirstNumber); ?> <br>
<?php echo "is ($ThirdNumber) :numeric" . is_numeric($ThirdNumber); ?> <br>
<!-- changes dec to bin number -->
Binary: <?php echo decbin(3) ?> <br>
<!-- changes bin to dec number -->
Decimal: <?php echo bindec(11) ?> <br>
<!-- square root of a number -->
Square Root: <?php echo sqrt(8) ; ?> <br> 
<!-- find absolute number -->
Absolute Value: <?php echo abs(-50 + 100); ?><br>
<!-- find power -->
Power: <?php echo pow(2,10); ?><br>
<!-- fmod is for the remainer -->
Remainer: <?php echo fmod(15,7); ?><br>
<!-- to pick random number -->
Random number: <?php echo rand(); ?><br>
<!-- to pick random number within a certian range -->
Random number with range: <?php echo rand(500, 1000); ?><br>



</body>
</html>