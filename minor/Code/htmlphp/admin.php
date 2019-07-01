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
<style>
h2
{
	text-align:center;
}

table 
{
	width:70%;
	margin:auto;
	border-collapse:collapse;
}

td, th 
{
	background-color: linen;
  border: 1px solid lightgrey;
  text-align: left;
  color: blue;
  padding: 8px;
}

tr:nth-child(even) 
{
  background-color: linen;
}
h2
{
	color: #E5B840;
}
</style>
</head>
<body style="background: url(images/body_bg.png);">

<h2 style="text-align:center;text-decoration:underline;  "><?php echo "WELCOME ".$_SESSION['name'];?></h2>
<input class="btn-success" type="button" value="LOGOUT" onclick="location.href = 'php_logout.php';"><br><br>
<input class="btn-success" type="button" value="ENROLL NEW ADMIN" onclick="location.href = 'enroll.php'"><br>
	
<h2>USER TABLE</h2>
<table border="2">
	<tr>
	<th>User ID</th>
	<th>Email</th>
	<th>Password</th>
	<th>Parking Status</th>
	</tr>
<?php
	
	$sql = "SELECT * FROM user_data";
	$result = mysqli_query($conn,$sql);
	
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$row['user_id']."</td><td>".$row['email']."</td><td>".$row['psw']."</td>
		<td>".$row['p_booked']."</td></tr>";
	}
	
?>
</table><br><br>

<h2>USER PARKING TABLE</h2>
<table border="2">
	<tr>
	<th>User ID</th>
	<th>Status</th>
	<th>Model</th>
	<th>Vehicle</th>
	<th>Street</th>
	<th>Parking Lot</th>
	<th>Plate Number</th>
	<th>Account</th>
	<th>Charge</th>
	<th>Start Date</th>
	<th>End Date</th>
	</tr>
	
<?php
	
	$sql1 = "SELECT * FROM user_zone_data";
	$result1 = mysqli_query($conn,$sql1);
	
	while($row = mysqli_fetch_assoc($result1))
	{
		echo "<tr><td>".$row['user_id']."</td><td>".$row['status']."</td><td>".$row['model']."</td>
		<td>".$row['vehicle']."</td><td>".$row['street']."</td><td>".$row['plot']."</td><td>".$row['plateno']."</td><td>".$row['account']."</td><td>".$row['charge']."</td><td>".$row['date_start']."</td><td>".$row['date_end']."</td></tr>";
		}
	
?>
</table><br><br>

<h2>FEEDBACK TABLE</h2>
<table border="2">
	<tr>
	<th>Number</th>
	<th>Name</th>
	<th>Email</th>
	<th>Feedback</th>
	</tr>
<?php
	
	$sql2 = "SELECT * FROM messages";
	$result2 = mysqli_query($conn,$sql2);
	
	while($row = mysqli_fetch_assoc($result2))
	{
		echo "<tr><td>".$row['no']."</td><td>".$row['fname']."</td><td>".$row['email']."</td>
		<td>".$row['msg']."</td></tr>";
	}
	
?>
</table><br><br>
<h2>ADMIN TABLE</h2>
<table border="2">
	<tr>
	<th>Name</th>
	<th>Password</th>
	</tr>
<?php
	
	$sql2 = "SELECT * FROM admin";
	$result2 = mysqli_query($conn,$sql2);
	
	while($row = mysqli_fetch_assoc($result2))
	{
		echo "<tr><td>".$row['name']."</td><td>".$row['psw']."</td></tr>";
	}
	
?>
</table><br><br>

</body>
</html>