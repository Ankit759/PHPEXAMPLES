<h1>Registration Form</h1>
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="txtName"/>
       
        <label for="">Password</label>
        <input type="password" name="Pass"/>
        
        <button name="doit" value="Submit">Submit</button>

    </form>
<?php
$host="localhost";
$db="demo";
$user="root";
$pass="";
$name="";


$conn=mysqli_connect($host,$user,$pass,$db,3300);
    if(!$conn)
    {
        die("connection failed".mysqli_connect_error());
    }
    else{
        echo"connection is sucessfully created <br>";
    }

if(isset($_POST['doit']))
    {
        print_r($_POST);
        echo"<br>";
        $name=$_POST['txtName'];
       
        $password=$_POST['Pass'];
      
       
        
    }
    else
    {
        echo"record is not submit";
    }
    
$querystring="INSERT INTO `login`(`uname`, `password`) VALUES ('$name','$password')";

if($conn->query($querystring)===TRUE) 
{
    echo"record added sucessfully";
}
else
{
    echo"Error in record insertion ".$querystring."<br>".$conn->error;
}

?>