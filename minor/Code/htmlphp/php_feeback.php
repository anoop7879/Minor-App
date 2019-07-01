<?php
session_start();

$con = mysqli_connect('localhost','root','','user_data');

if($con)
{
	echo"Connection successful";
}
else
{
	echo"no connection ";
}

$f_name = mysqli_real_escape_string($con,$_POST[firstname]);
$mail = mysqli_real_escape_string($con,$_POST[email]);
$subject = mysqli_real_escape_string($con,$_POST[subject]);

$q = "select * from user_data where fname = '$f_name' && email ='$mail'";

$result= mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1)
{
	echo "Duplicate Data";
	header('location:feedback.html');
}

else{
	$insert = "insert into messages(fname,email,msg) VALUES ('$f_name','$mail','$subject') ";
	mysqli_query($con,$insert);
	header("location:thankyou.html");
}
 

?>
?>