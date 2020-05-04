<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
<?php
$weather = "sunn";
if($weather == "sunny") {
    $test = 4;

    // 5
    echo ++$test ."<br>";
    // 5
    echo $test ."<br>";
    // 5
    echo $test++ ."<br>";
    // 6
    echo $test ."<br>";
    
}
else {
    $prac = array("basketball", "soccer", "football", "wrestling");
    foreach($prac as $p) {
        echo "Practices : {$p} <br>";
    }
}

?>
<hr>

<?php 
// Associative array keys and their respective values
    $food = array(
    "item_number" => 1050,
    "name" => "Pizza",
    "region" => "Italy",
    "Slide_food" => "Pasta",
    "drink" => "Cook",
    "package_price" => 1234567

    );

    foreach($food as $Key=>$Value) {
        // replacing the underscores in list with whatever
        // upercasing the first letter in every word
        $data = ucwords(str_replace("_", " ", $Key));
        if($Key=="package_price") {
            if(is_numeric($Value)) {   
            }
            else {
                $Value = "You must enter some digits";
            };
        };

        echo "{$data} have: {$Value} <br>";
    }
    ?>
</body>
</html>