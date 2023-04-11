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

$query="CREATE TABLE userlogin(username VARCHAR(30) NOT NULL,email VARCHAR(50),number VARCHAR(50),date VARCHAR(50),timing VARCHAR(30),message VARCHAR(50));";
/*
if(mysqli_query($connection,$query))
{
echo "table created";
}
else{
echo "Error:".mysqli_error($connection)."<br>";
}



*/

$query="INSERT INTO userlogin VALUES('$name','$mail','$number','$date','$time','$umessage');";
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



