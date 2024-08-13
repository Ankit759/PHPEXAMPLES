<?php
session_start();




if(isset($_GET['m']))
{
    if($_GET['m']=='s')
    {
        echo"<script>alert('Registration Sucessfull')</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Registation form </h1>
    <form action="" method="post">
        <label for="#">
           User name
        </label>
        <input type="text" name="txtname">
        <label for="#">
            password
        </label>
        <input type="password" name="txtpass">
        <br><br>
        <input type="submit" value="Login" name="submit">
    </form>
    </body>
</html>
<?php
$host="localhost";
$db="demo";
$user="root";
$pass="";
$conn=mysqli_connect($host,$user,$pass,$db,3300);
if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
else{
   echo"connection sucessfully created";
}

if(isset($_POST['submit']))
{
    $loginid=$_POST['txtname'];
    $pass=$_POST['txtpass'];

    $sql="SELECT * FROM login WHERE uname='$loginid' AND password='$pass'";
    $result=$conn->query($sql);

    if($result->num_rows > 0)
    {
        header("location:exam1.php");
    }
   
}
else{
    echo"submit not clicked";
}

?>