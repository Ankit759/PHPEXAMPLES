<?php
session_start();
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
           Email
        </label>
        <input type="email" name="txtmail">
        <label for="#">
            password
        </label>
        <input type="password" name="txtpass">
        <Select name="optrole">
            <option value="0">Select nothing </option>
            <option value="1">Admin</option>
            <option value="2">Student</option>
            <option value="3">Teacher</option>

        </select>
        <br><br>
        <input type="submit" value="Register" name="submit">
       
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
    $name=$_POST['txtname'];
    $mail=$_POST['txtmail'];
    $pass=$_POST['txtpass'];
    $role=$_POST['optrole'];

      
    //duplication check stsrt
    $sql="SELECT * FROM `login` WHERE `uname`='$mail'";
    $resultset=$conn->query($sql);
    if($resultset->num_rows>0)
    {
        header("location:t2.php?m=d");
    }
    else{
    //new registation
    $querystring="INSERT INTO `registration`(`name`, `email`, `password`, `role`) VALUES ('$name','$mail','$pass','$role')";

    if($conn->query($querystring)===TRUE)
    {
       
      
       $sql="INSERT INTO `login`(`uname`, `password`) VALUES ('$mail','$pass')";
       if($conn->query($sql)===TRUE)
       {
           header("location:t2.php?m=s");
       }
   
    }
    else
    {
       echo"error in record insertion ".$querystring."<br>".$conn->error;
    }
   
    }

    //duplication check end
}
else{
    echo"submit not clicked";
}
?>