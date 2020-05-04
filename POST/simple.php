<?php
if(isset($_POST["Submit"])) {
//connect the varible to html by using the "name=" value by using $_POST
$Username = $_POST["Username"];
$Password = $_POST["Password"];
// can use with or without naming varible
// $_POST["Username"];
// $_POST["Password"];

if($Username == "Gayah" && $Password =="Karmo"){
    echo "<h2>Welcome: {$_POST["Username"]} </h2>";
}
else {
    echo "<h2>Account Doesn't Exists | Try Again</h2>";
}
}
else {
    echo "<h2>Login Required</h2>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <fieldset>
    <legend> HTML 5 Form</legend>
    <form action="" method="POST">
        <label for="Username">Username:</label>
        <input id="Username" type="text" name="Username"><br><br>
        <label for="Password">Password:</label>
        &nbsp;
        <input id="Password" type="password" name="Password"><br><br>
        <input type="Submit" name="Submit" value="Submitted">
    </form>
    </fieldset>
</body>
</html>