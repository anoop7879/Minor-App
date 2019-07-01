<?php

session_start();


	$servername = "localhost";
	$username = "root";
	$passeword = "";
	$dbname = "user_data";

	// Create connection 
	$conn = mysqli_connect($servername, $username, $passeword,$dbname);

	// Chek connection
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}

	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="../css/admindesign.css"/>
</head>
<body class="container" style="background: url(images/body_bg.png);">




<h2 style="color: #E5B840; text-align: center; text-decoration:underline;">Enroll New User</h2>
<div >
<form  style="color: black; margin: auto;" action="" method="post">
	Admin name:<br><input style="margin: auto;" type="text" id="user" name="name"><br><br>
	Password:<br><input type="password" id="pass" name="pass"><br><br>
	Confirm password:<br><input type="password" id="cpass" name="cpass"><br><br>
	<button class="btn-success btn" type="submit" onclick="check()">Enroll</button><br><br>
<input  type="button" value="Back to admin page" onclick="location.href = 'admin.php'">

</form>

</div>
<script>
	var pass= document.getElementById("pass");
	var cpass= document.getElementById("cpass");
	
	function check()
	{	
		if(pass.value!="" && cpass.value!="")
		{
			if(pass.value!=cpass.value)
			{
				cpass.setCustomValidity("password dont match");
			}
			else
			{
				cpass.setCustomValidity("");	
			}
		}
		else
		{
			cpass.setCustomValidity("Required");
		}
	}
	pass.onchange = check;
	cpass.onkeyup = check;
	
</script>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$user = mysqli_real_escape_string($conn,$_POST['name']);
	$pass = mysqli_real_escape_string($conn,$_POST['pass']);

	$sql = "INSERT INTO admin(name, psw) VALUES ('$user' , '$pass')";
	
	$sq = "SELECT admin_id FROM admin WHERE name='$user'";
	$result = mysqli_query($conn,$sq);
	if(mysqli_num_rows($result)>=1)
	{
		echo "<h2>user name already taken</h2>";
	}
	else
	{
		if(mysqli_query($conn,$sql))
		{
			echo "<h2>new admin created</h2>";
			header("location: thanku.php");
		}
		else
		{
			echo "<h2>something went wrong</h2>";
		}
	}
}

mysqli_close($conn);
?>


