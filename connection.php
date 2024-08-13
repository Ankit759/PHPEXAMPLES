<?php 
 $host="localhost";
 $db="demo";
 $user="root";
 $pass="";
// Mysql extension//
// Mysql with procedural //
$con=mysqli_connect($host,$user,$pass,$db,3300);
// if(!$conn)
// {
//     die("connection failed".mysqli_connect_error());
// }
// else{
//     echo"connection successfully created";


// Mysql object oriented approach 
// $connn=new mysqli($host,$user,$pass,$db,3300);
if($con->connect_error)
{
    die("connection failed".$con->connect_error);
} else{
    echo" <br> connection using OOPS connected successfully";
}


