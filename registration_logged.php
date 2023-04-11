<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTER</title>
</head>
<body>
	<?php

include "con.php";
if($connection)
{
	echo "connection established";
}
else
{
	echo "Error:".mysqli_error($connection);
}
/*$name=$_POST['uuser'];
$phone=$_POST['umobile'];
$email=$_POST['uemail'];
$pass=$_POST['upassword'];
$cpass=$_POST['ucpassword'];


$query="SELECT * FROM userlogin;";
$check=mysqli_query($connection,$query);
if($check){
	echo "userlogin table is already exist";
}
else{

	$query="CREATE TABLE userlogin(UserName VARCHAR(25),phone VARCHAR(10),Email VARCHAR(35),Password VARCHAR(15),ConfirmPassword VARCHAR(15));";
	
	if(mysqli_query($connection,$query))
	{
		echo "userlogin table is  created"."<br>";
	}
	else
	{
		echo "error:".$query.mysqli_error($connection);
	}
}
echo "<br>";
$query="INSERT INTO userlogin VALUES('$name','$phone','$email','$pass','$cpass');";
if(mysqli_query($connection,$query))
{
	echo "record inserted "."<br>";
}
else
{
	echo "error:".$query.mysqli_error($connection)."<br>";
}

?>
<br><br><br><br>
SUCCESSFULLY REGISTERED!
<button > <a href="loginpage.html">Click Here To Go Login</a></button>
</body>
</html>*/

