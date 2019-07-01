 <?php 
 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$connection = mysqli_connect('localhost','root', '','user_data');
	 $plateno =  $_SESSION["plateno"];
     $userid = $_SESSION["user_id"];
	$query = mysqli_query( $connection,"select * from user_data where p_booked='yes' AND user_id='$userid'");
	$rows = mysqli_num_rows($query);
	//echo $rows;
	$row=mysqli_fetch_array($query);
	//if ($rows == 1) {
	mysqli_connect('localhost', 'root', '','user_data') or die(mysql_error());
  $sql = "UPDATE user_data SET pl_booked = 'NO' WHERE user_id = '$userid'";
	
  mysqli_query($connectrion,$sql);
	$sql_2 = "UPDATE user_zone_data SET status = 'UNBOOKED' WHERE plateno = '$plateno'";
	mysqli_query($connection,$sql_2);
		
	header("Location: success_unbook.php");
	//}
		
}