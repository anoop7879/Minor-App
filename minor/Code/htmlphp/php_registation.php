<?php
session_start();
header("location:login.html");

$con = mysqli_connect('localhost','root','','user_data');

if($con)
{
	echo"Connection successful";
}
else
{
	echo"no connection ";
}

mysqli_select_db($con,'user_data');

$fname = mysqli_real_escape_string($con,$_POST[f_name]);
$id = mysqli_real_escape_string($con, $_POST[user_id]);
$mail = mysqli_real_escape_string($con,$_POST[email]);
$psw = mysqli_real_escape_string($con,$_POST[password]);

$q = "select * from user_data where user_id = '$id' && email ='$mail'";

$result= mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Duplicate Data";
}

else{
	$insert = "insert into user_data(fname,user_id,email,psw) values ('$fname','$id','$mail','$psw') ";
	mysqli_query($con,$insert);
}

?>