<?php
include "con.php";
if($connection)
{
echo " Successful";
}
else{
echo "Error:".mysqli_error($connection);
}

$name=$_POST['uuser'];
$phone=$_POST['umobile'];
$email=$_POST['uemail'];
$pass=$_POST['upassword'];
$cpass=$_POST['ucpassword'];

$query=$query="CREATE TABLE car(UserName VARCHAR(25),phone VARCHAR(25),Email VARCHAR(25),Password VARCHAR(25),ConfirmPassword VARCHAR(25));";
/*
if(mysqli_query($connection,$query))
{
echo "table created";
}
else{
echo "Error:".mysqli_error($connection)."<br>";
}



*/

$query="INSERT INTO user car VALUES('$name','$phone','$email','$pass','$cpass');";
if(mysqli_query($connection,$query))
{
	echo "values inserted";
}
else
{
	echo "Error:".mysqli_error($connection);
}

mysqli_close($connection);
?>
<a href="remove.html" class="link-btn"><button>OK</button></a>



