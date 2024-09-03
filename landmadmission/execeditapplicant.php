<?php
	include('../connect.php');
	$roomid = $_POST['roomid'];
	$stdname=$_POST['stdname'];
			$fname=$_POST['fname'];
			$oname=$_POST['oname'];
			$age=$_POST['age'];
			$disability=$_POST['disability'];
			$dateofbirth=$_POST['dateofbirth'];
			$gender=$_POST['gender'];
			$State=$_POST['State'];
			$lga=$_POST['SubCat3'];
			$nationality=$_POST['nationality'];
			$tribe=$_POST['tribe'];
			$section=$_POST['section'];
			$nofschool=$_POST['nofschool'];
			$class=$_POST['class'];
			$dateofentry=$_POST['dateofentry'];
			$fathername=$_POST['fathername'];
			$homeaddress=$_POST['homeaddress'];
			$fatherphone=$_POST['fatherphone'];
			$mothername=$_POST['mothername'];
			$motherphone=$_POST['motherphone'];
			$occupation=$_POST['occupation'];
			$email=$_POST['email'];
			$applicant_id=$_POST['applicant_id'];
	
			
	$result = mysqli_query($conn, "UPDATE applicants SET sname='$stdname', firstname='$fname', oname='$oname', age='$age', disability='$disability', dateofbirth='$dateofbirth', gender='$gender', state='$State', lga='$lga', nationality='$nationality', tribe='$tribe', section='$section', nofschool='$nofschool', class='$class', dateofentry='$dateofentry', fathername='$fathername', homeaddress='$homeaddress', fatherphone='$fatherphone', mothername='$mothername', motherphone='$motherphone', occupation='$occupation', email='$email' WHERE stdid='$roomid'");
	
	$result = mysqli_query($conn, "UPDATE stdregistration SET sname='$stdname', firstname='$fname', oname='$oname', age='$age', disability='$disability', dateofbirth='$dateofbirth', gender='$gender', state='$State', lga='$lga', nationality='$nationality', section='$section', nofschool='$nofschool', class='$class', dateofentry='$dateofentry', fathername='$fathername', homeaddress='$homeaddress', fatherphone='$fatherphone', mothername='$mothername', motherphone='$motherphone', occupation='$occupation', email='$email' WHERE aplicant_id='$applicant_id'");
	
	$result = mysqli_query($conn, "UPDATE stdregistration2 SET sname='$stdname', firstname='$fname', oname='$oname', age='$age', disability='$disability', dateofbirth='$dateofbirth', gender='$gender', state='$State', lga='$lga', nationality='$nationality', section='$section', nofschool='$nofschool', class='$class', dateofentry='$dateofentry', fathername='$fathername', homeaddress='$homeaddress', fatherphone='$fatherphone', mothername='$mothername', motherphone='$motherphone', occupation='$occupation', email='$email' WHERE aplicant_id='$applicant_id'");
	
	$result = mysqli_query($conn, "UPDATE stdregistration3 SET sname='$stdname', firstname='$fname', oname='$oname', age='$age', disability='$disability', dateofbirth='$dateofbirth', gender='$gender', state='$State', lga='$lga', nationality='$nationality', section='$section', nofschool='$nofschool', class='$class', dateofentry='$dateofentry', fathername='$fathername', homeaddress='$homeaddress', fatherphone='$fatherphone', mothername='$mothername', motherphone='$motherphone', occupation='$occupation', email='$email' WHERE aplicant_id='$applicant_id'");
	
		
	echo "<script> window.location.replace('applicant.php')</script>";
	//header("location: expenses.php");
?>