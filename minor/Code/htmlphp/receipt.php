<!DOCTYPE html>
<html>
<head>
  <title>Receipt </title>
  <link rel="stylesheet" type="text/css" href="../css/receipt.css">
  <?
 
$Connection = mysqli_connect("localhost","root","","user_data") ;
   $model= $_SESSION["model"] ;
$vehicle= $_SESSION["vehicle"];
 
$plot= = ;
$plateno = $_SESSION["plateno"] ;
$account= $_SESSION["account"];
$from_d = $_SESSION["from"];
$to_d = $_SESSION["to"];

  ?>
 
</head>
<body background="../images/bg.jpg">
  <div class="header">
  	<h2>Online Parking Reservation System</h2>
	</br>
	<h5><p style="font-size:20px;color:black;">
Username:
<?php 
 session_start();
  echo $_SESSION["user"];
 ?>

 </p>
  	</h5>
  </div>
	
  <form method="post" action="#">
 
 <div class="input-group">
  	  <label>Location: </label>
  	  <p>
	  <?session_start();
	  echo  $_SESSION["street"];
	  
	  ?></p>
	  </div>
	<div class="input-group">
  	  <label>Slot:</label>
  	  <p>
	  <?session_start();
	  echo  ' $_SESSION["plot"]';
	  
	  ?></p>
	  </div>
	<div class="input-group">
  	  <label>Start Date</label>
  	  <input type="date" name="f_name">
  	</div>
	<div class="input-group">
  	  <label>End Date</label>
  	  <input type="date" name="f_name">
  	</div>
	<div class="input-group">
  	  <label>Cost</label>
  	  <input type="text" name="f_name">
  	</div>
	<div class="input-group">
  	  <label>Payment method:</label>
  	  <input type="text" name="f_name">
  	</div>
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Print</button>
  	</div>
  	
  </form>
  
  <a href ="afterlogin_home.html"/>
  </body>
</html>