<!DOCTYPE html>
<head>
<title>Error</title>
<link rel ="stylesheet" href="../css/error.css"/>
<style>

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
<body>

<div class="header">
  <a href="#default" class="logo">Online Parking reservation System</a>
  <div class="header-right">
    <a class="active" href="#home">Home </a>
    <a href="parking_status.php">Parking Status</a>
    <a href="vehicle_details.html">Book Parking</a>
    <a href="#about">Unbook Parking</a>
    <a href="feedback.html">Feedback</a>
    <a href="php_logout.php">Log out</a>
  </div>
</br></br></br></br>

	<div>
	
	<div>
		<p >
			<b>Booking Error!</b> </br>Please ensure you have entered correct information and the PL you are selecting is Already  booked.</p>
	</div>
	</div>
	<div class="footer">@ copyright  All Rights reserved</div>

</body>
</html>