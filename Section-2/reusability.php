<!-- linking two php files using includes -->
<!-- inlclude means it is okay to get the file or not get the file -->
<?php
include("user-define-functions.php");
?>

<!-- require means you must have to include the file or else the whole reusability file will not work -->
<!-- <?php
require("user-define-functions.php");
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Re-Usability</title>
</head>
<body>

<?php
// linking the files allows you to share their functions
Welcome();
echo "<br>";
addParm(4,5);
?>
    
</body>
</html>