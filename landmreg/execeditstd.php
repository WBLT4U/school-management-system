<?php
	include('../connect.php');
	$roomid = $_POST['roomid'];
				$admno=$_POST['admno'];
$yofadm=$_POST['yofadm'];
$class=$_POST['country'];
$regfee=$_POST['state'];
	
			
	$result = mysqli_query($conn, "UPDATE stdregistration SET admno='$admno', yearofadmission='$yofadm', class='$class', price='$regfee' WHERE stdid='$roomid'");
	
		
	echo "<script> window.location.replace('stdreg.php')</script>";
	//header("location: expenses.php");
?>