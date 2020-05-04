<?php
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Submit = $_POST["Submit"];
if(isset($_POST["Submit"])) {
    echo "successfull login <br><hr>";
    echo "Welcome: {$Username} <br>";
}

// if(isset($Username) && !empty($Username)){
//     echo "Username is set with the name of : {$Username} <br>";
// }
// else{
//     echo "No username detected <br>";
// }

// if(isset($Password) && !empty($Password)){
//     echo "Password is: {$Password} <br>";
// }
// else{
//     echo "No Password <br>";
// }

// Setting a default username and password

if (isset($_POST["Username"])) {
    $Username = $_POST["Username"];
    echo "$Username <br>";
}
else {
    $Username="";
}

if (isset($_POST["Password"])) {
    $Password = $_POST["Password"];
    echo "$Password <br>";
}
else {
    $Password = "";
}


?> 