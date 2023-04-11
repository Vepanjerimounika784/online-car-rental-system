
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
$name=$_POST['uuser'];
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

	$query="CREATE TABLE userlogin(UserName VARCHAR(25),phone VARCHAR(25),Email VARCHAR(25),Password VARCHAR(25),ConfirmPassword VARCHAR(25));";
	
/*	if(mysqli_query($connection,$query))
	{
		echo "userlogin table is  created"."<br>";
	}
	else
	{
		echo "error:".$query.mysqli_error($connection);
	}
}
*/
$query="INSERT INTO userlogin VALUES('$name','$phone','$email','$pass','$cpass');";
if(mysqli_query($connection,$query))
{
	echo "record inserted ";
}
else
{
	echo "Error:".mysqli_error($connection);
}
mysqli_close($connection);
?>
