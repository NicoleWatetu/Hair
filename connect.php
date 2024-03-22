<?php
$servername="localhost";
$username="root";
$password="";
$db_name="datab";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die(mysqli_connect());
    
}

//"Connection failed". $conn->connect_error
//close connection
//$conn->close();
?>