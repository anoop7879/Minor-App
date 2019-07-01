<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/ViewParkingSlot.css">
<title>Zone</title>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  padding-bottom:20px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  position:fixed;
  left:0;
  right:0;
  top:0;
  background-color: #f1f1f1;
  padding: 20px 10px;
}
.footer {
  overflow: hidden;
  position:fixed;
  left:0;
  right:0;
  text-align:center;
  bottom:0;
  background-color: #f1f1f1;
  padding: 0px 0px;
}
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo">Online Parking reservation System</a>
  <div class="header-right">
    <a href="after_login_home.php">Home </a>
    <a class="active"  href="parking_status.php">Parking Status</a>
    <a href="vehicle_details.html">Book Parking</a>
    <a href="unbook.html">Unbook Parking</a>
    <a href="feedback.html">Feedback</a>
    <a href="php_logout.php">Log out</a>
  </div>
	<?php 
	session_start();
		$connection = mysqli_connect('localhost', 'root', '','user_data');
	$var = isset($_SESSION["to"]);
$date = str_replace('/', '.', $var);
echo date('Y.m.d', strtotime($date));
		
		
	  ?>
	  </p>

		
<h1 >View Parking Space</h1>
<div class="inline">
<div class="left">
	<h1>CITY MALL STREET </h1>
	<table>
	<?php $street ="CITY MALL"; ?>
<tr>
	<td 
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 001' and status='RESERVED' ";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\" ";}
	?>>
	PL 001
	</td>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\" ";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td>
	
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	
 	</div>
		
	<div class="right">
	
	<h1>Rajwada</h1>
	<table  >
<?php $street ="INDORE STREET"; ?>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 001' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 001</td>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 010' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 010</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 002' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 002</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 011' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 011</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 003' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 003</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 012' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 012</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 004' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 004</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 013' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 013</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 005' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 005</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 014' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 014</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 006' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 006</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 015' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 015</td>
</tr>
<tr>
	<td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 007' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 007</td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 016' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>><td>PL 016</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 008' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 008</td><td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 017' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 017</td>
</tr>
<tr>
	<td <?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 009' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 009</td><td
	<?php 
	$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='PL 018' and status='RESERVED'";
	$result=mysqli_query($connection,$sql);
	$count=mysqli_num_rows($result);
	if($count==1){	
	echo "style=\"background: red;\"";}
	?>>PL 018</td>
</tr>
</table>
	</div>
	 </div>
	
	 </div>
	
 
</br></br></br></br></br></br><hr><div class="footer">@ copyright  All Rights reserved</div>
 </body>
	
</html>
