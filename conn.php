<?php
$host = "127.0.0.1:3308";
$user = "root";
$password = "";
$database = "bms";
$con = mysqli_connect($host,$user,$password,$database);
// check connection
if (mysqli_connect_errno()){
	echo "fail to connect to mysql:".mysqli_connect_errno;
}
?>