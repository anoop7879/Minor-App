<?php

	session_start();
     $model = $_SESSION["model"];
	  $vehicle = $_SESSION["vehicle"];
	  $status="RESERVED";
	  $user_id =$_SESSION["user"];
	  $plateno = $_SESSION["plateno"];
	  $plot = $_SESSION["plot"];
	  $account = $_SESSION["account"];
	  $street = $_SESSION["street"];
	    $from = $_SESSION["from"];
		 $to = $_SESSION["to"];		  
   $id = $_SESSION["user"];
	  $charge = "120";
			
			/*CHECK IF RESERVED */
			
	
		$connection = mysqli_connect('localhost','root','','user_data');
$sql="SELECT * FROM user_zone_data WHERE street='$street' and plot='$plot' and status='RESERVED'";
$result=mysqli_query( $connection, $sql);



// Mysql_num_row is counting table row
$count = mysqli_num_rows($result);

// If

if($count==1){
 header('location:error_book.php');
}
else
{
    $sql = "UPDATE user_data SET p_booked = 'yes' WHERE user_id='$user_id'";
	mysqli_query($connection,$sql);
	        $query = "INSERT INTO user_zone_data(user_id, status,model,vehicle ,street, plot, plateno,account,charge,date_start ,date_end) VALUES ('$id','$status','$model', '$vehicle' , '$street', '$plot', '$plateno', '$account','$charge','$from','$to')";
	   $result = mysqli_query($connection,$query);
		if($result){
           //REDIRECT
		   header('location:success.php');
		   echo "header";
		   
exit;
        }
}

    ?>