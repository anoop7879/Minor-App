<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>My Profile</title>

</head>
<body>
	<section id="container">
	
	<section id="content">
	<img src="src/bg.png" style="position:absolute; z-index:-1; margin:0;"/>
	<div class="profile">
		

		</div>
		<?php
			
			$password=$_SESSION['password'];
			$phone=$_SESSION['phone'];
			$query = "select * from user_data where password='$password' AND user_id='$user_id'";
			$result = $conn->query($query);
			while($rows = $result->fetch_assoc()) {
			
		?>
		<div class="dt name">NAME: <span><?php  echo $rows['name'];  ?></span></div>
		<div class="dt phone">PHONE: <span><?php  echo $rows['phone'];  ?></span></div>
		<div class="dt id">ID. NO: <span><?php  echo $rows['id_no'];  ?></span></div>
		<div class="dt plate">CAR PLATE NO: <span><?php  echo $rows['plate_no'];  ?></div>
		<button style="display:none">Save Changes</button>
		<div id="status"></div>
		<?php  } ?>
	</div>
	</section>
	<?php
			include('inc/footer.php');
	?>
	</section>
</body>
</html>