<?php
session_start();
$con = mysqli_connect('localhost','root','','user_data');


mysqli_select_db($con,'user_data');



$id = mysqli_real_escape_string($con, $_POST[username]);
$psw = mysqli_real_escape_string($con,$_POST[password]);

$q = "select * from user_data where user_id = '$id' && psw = '$psw' ";

$result= mysqli_query($con,$q);

$num = mysqli_fetch_array($result);

if($num['user_id']==$id  && $num['psw']==$psw)
{
	
$_SESSION["user"] = $id;
	 echo"login successful";
	header('location:after_login_home.php');
	}

else{
	echo "Failed";
	header('location:login.html');
	}

?>