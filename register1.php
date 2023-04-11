
	<?php

include "con1.php";
/*if($connection)
{
	echo "connection established";
}
else
{
	echo "Error:".mysqli_error($connection);
}*/
$name=$_POST['uuser'];
$phone=$_POST['umobile'];
$mode=$_POST['umode'];
$type=$_POST['utype'];

$query="CREATE TABLE booking(UserName VARCHAR(25) ,phone VARCHAR(25),mode VARCHAR(25),type VARCHAR(25)) ;";

$check=mysqli_query($connection,$query);

	
	/*if(mysqli_query($connection,$query))
	{
		echo "booking table is  created"."<br>";
	}
	else
	{
		echo "error:".$query.mysqli_error($connection);
	}
*/
$query="INSERT INTO booking VALUES('$name','$phone','$mode','$type');";
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
<a href="mak.html" class="link-btn"><button>OK</button></a>
