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
    <form action="php-file.php" method="POST">
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