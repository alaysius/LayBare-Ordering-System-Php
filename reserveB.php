<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"users");

if(isset($_POST['insertdata']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$quantity = $_POST['quantity'];
	$modeofpayment = $_POST['modeofpayment'];
	$date = $_POST['date'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$message=$_POST['message'];
	
	
	$query = "INSERT INTO reserve(name, phone, email, quantity, modeofpayment, date, month, year, message)VALUES ('$name','$phone','$email', '$quantity', '$modeofpayment', '$date', '$month', '$year', '$message')";
	$result = mysqli_query($connection,$query);
	
	if($result)
	{
	  echo '<script>alert("Data Saved");</script>';
      header('location:room-details-B.php');
	}
	else
	{
	echo '<script> alert("Data Not Saved"); </script>';
	}
}
?>