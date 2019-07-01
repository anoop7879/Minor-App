<!DOCTYPE html>
<html>
<head>
<title>Success</title>

<style>
* {box-sizing: border-box;}

.div_1
{
  height:100px;
  width:200px;
  color: black;
  background: white;
  text-align: center;
  font-family:arial;
  font-size:20px;
  padding-top:230px;
 margin: 0px auto 0px;
}
body { 
  margin: 0;
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
<body background="../images/bg.jpg"
>
<div class="header">
  <a href="#default" class="logo">Online Parking Reservation System</a>
  <div class="header-right">
    <a  href="after_login_home.php">Home </a>
    <a href="parking_status.php">Parking Status</a>
    <a class="active" href="vehicle_details.html">Book Parking</a>
    <a href="unbook.html">Unbook Parking</a>
    <a href="feedback.html">Feedback</a>
    <a href="php_logout.php">Log out</a>
  </div>
</div>

</head>
<body>
	
	<div>
	<div class="div_1">
		<h1>Operation Successful</h1>
	</br></br></br><p style="margin:auto;text-align:center;font-weight:bold;">Your request has been submitted successfully. </p>
	
	</body>
</html>