<h1>Registration Form</h1>
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="txtName"/>
        <label for="">E-mail</label>
        <input type="email" name="umail"/>
        <label for="">Password</label>
        <input type="password" name="Pass"/>
        <select name="OptRoll" id="">
            <option value="0">Select Roll</option>
            <option value="1">Addmin</option>
            <option value="2">Faculty</option>
            <option value="3">Student</option>
        </select>
        <button name="doit" value="Submit">Submit</button>

    </form>
<?php
$host="localhost";
$db="demo";
$user="root";
$pass="";
$name="";
$email="";
$roll="";

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
        $email=$_POST['umail'];
        $pass=$_POST['Pass'];
        $role=$_POST['OptRoll'];
       
        
    }
    else
    {
        echo"record is not submit";
    }
    
$querystring="INSERT INTO `registration`(`name`, `email`, `password`, `role`) VALUES ('$name','$email','$pass','$role')";

if($conn->query($querystring)===TRUE) 
{
    echo"record added sucessfully";
}
else
{
    echo"Error in record insertion ".$querystring."<br>".$conn->error;
}

?>