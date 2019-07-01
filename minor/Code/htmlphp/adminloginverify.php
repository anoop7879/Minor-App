<?php
session_start();
$con = mysqli_connect('localhost','root','','user_data');


mysqli_select_db($con,'user_data');



$id = mysqli_real_escape_string($con, $_POST[username]);
$psw = mysqli_real_escape_string($con,$_POST[password]);

$q = "select * from admin where name = '$id' && psw = '$psw' ";

$result= mysqli_query($con,$q);

$num = mysqli_fetch_array($result);

if($num['name']==$id  && $num['psw']==$psw)
{
	
$_SESSION["name"] = $id;
	 echo"login successful";
	header('location:admin.php');
	}

else{
	echo "Failed";
	header('location:adminlogin.html');
	}

?>