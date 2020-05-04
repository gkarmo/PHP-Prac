<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global</title>
</head>
<body>
    <!-- 
    $GLOBALS
    $_SESSION
    $_SERVER
    $_REQUEST
    $_FILES
    $_ENV
    ----------
    $_GET
    $_POST
    $_COOKIE
     -->

     <!-- $GLOBALS Ex. -->
    <?php
    $x = 5;
    $y = 10;

    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y;
    ?>
</body>
</html>