<!DOCTYPE html>
<html>
<head>
<title>Online parking Reservation System</title>

<link rel="stylesheet" href="../css/oprs.css"/>
</head>
<style>

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
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
  <a href="#default" class="logo">Online Parking Reservation System  </a>
  <div class="header-right">
<p style="font-size:20px;color:black;">
Username:
<?php 
session_start();
 $Connection = mysqli_connect("localhost","root","","user_data") ;
 $id=$_SESSION["user"];
 echo $id;
 ?>

 </p>
  <a class="active" href="after_login_home.php">Home </a>
    <a href="parking_status.php">Parking Status</a>
    <a href="vehicle_details.html">Book Parking</a>
    <a href="unbook.html">Unbook Parking</a>
    <a href="feedback.html">Feedback</a>
    <a href="php_logout.php">Log out</a>
  </div>
</div>
<div>
  <img  class="center" src="../images/bg.jpg" alt=""/></div>
  
  </br>
  
 
	
  
<table  align="center">

<tr>

<td>

<ul>
<li ><h3 >Online Parking reservation System</h3></li>
<li><p> It overcomes the problem of finding </p></li>
<li><p>a parking space in universities/institute areas</p></li>
<li><p> that unnecessary consumes time</p></li>

</ul>

</td>

<td>
<ul >
<li ><h3 >UseFull Links</h3></li>
<li><a href="feedback.html" >Contact Us</a> </li></br>
<li><a href="after_login_home.php">Home</a></li></br>

</ul>
</td>

<td>
<ul >
<li ><h3 >Address</h3></li>
<li><p>RGPV university</p> </li>
<li><p>bhopal(m.p.)</p></li>
</ul>
</td>
</tr>
</table>

  <footer class="footer">
  <h2>
  &copy; copyright 2019 - 2020 All Rights Reserved</br>Terms & Conditions</br><a color="blue" href="OnlineParkingReservationSystem.html"> Online Vehicle Parking ReservationSystem</a> 
  </h2>
  </footer>
  </body>
</html>