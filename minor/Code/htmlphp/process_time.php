<?php
session_start();

$from_d  = $_POST['from'];
$to_d    =$_POST['to'];

session_start();
// Set session variables
$_SESSION["from"] = $from_d;
$_SESSION["to"] = $to_d;

//echo "Session variables are set.";
header("location:process_book.php");

?>