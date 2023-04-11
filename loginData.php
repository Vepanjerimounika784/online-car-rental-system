<?php
include "loginconnection.php";
if($connection){
    echo "connected";
}
else{
    echo "no";
}
echo "<br>";
if(isset($_POST['submit'])){
    $emailid=$_POST['email'];
    $password=$_POST['pwd'];

    $query="SELECT *  FROM userlogin   WHERE Email='$emailid' AND Password='$password'; ";
    
    $result=mysqli_query($connection,$query);
    $fetch=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)>=1){
    header('location:demo.html');
    }
    else{
        echo "you have entered incorrect password";
        exit();
    }
}

?>
