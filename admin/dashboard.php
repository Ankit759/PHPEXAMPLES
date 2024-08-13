<?php
session_start();
if(!isset($_SESSION['uname']))
{
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin:Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <?php
    echo"welcome admin:".$_SESSION['uname'];

    ?>
    <a href="logout.php">logout</a>
    
</body>
</html>.