<?php

include('../connect.php');


if (isset($_POST['Submit'])) {

			
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
			$new =date("Y/m/d");
			$accept=$_POST['accept'];
			$admusername=$_POST['admusername'];
			
			
			$update=mysqli_query($conn, "INSERT INTO applicants (sname, firstname, oname, age, disability, dateofbirth, gender, state, lga, nationality, section, nofschool, class, dateofentry, fathername, homeaddress, fatherphone, mothername, motherphone, occupation, email, aplicant_id, datecreated, accept, adminusername)
VALUES
('$stdname', '$fname', '$oname', '$age', '$disability', '$dateofbirth', '$gender', '$State', '$lga', '$nationality', '$section', '$nofschool', '$class', '$dateofentry', '$fathername', '$homeaddress', '$fatherphone', '$mothername', '$motherphone', '$occupation', '$email', '$applicant_id', '$new', '$accept', '$admusername')");

$update=mysqli_query($conn, "INSERT INTO stdregistration (sname, firstname, oname, age, disability, dateofbirth, gender, state, lga, nationality, section, nofschool, class, dateofentry, fathername, homeaddress, fatherphone, mothername, motherphone, occupation, email, aplicant_id, datecreated, adminusername)
VALUES
('$stdname', '$fname', '$oname', '$age', '$disability', '$dateofbirth', '$gender', '$State', '$lga', '$nationality', '$section', '$nofschool', '$class', '$dateofentry', '$fathername', '$homeaddress', '$fatherphone', '$mothername', '$motherphone', '$occupation', '$email', '$applicant_id', '$new', '$admusername')");


$update=mysqli_query($conn, "INSERT INTO stdregistration2 (sname, firstname, oname, age, disability, dateofbirth, gender, state, lga, nationality, section, nofschool, class, dateofentry, fathername, homeaddress, fatherphone, mothername, motherphone, occupation, email, aplicant_id, datecreated, adminusername)
VALUES
('$stdname', '$fname', '$oname', '$age', '$disability', '$dateofbirth', '$gender', '$State', '$lga', '$nationality', '$section', '$nofschool', '$class', '$dateofentry', '$fathername', '$homeaddress', '$fatherphone', '$mothername', '$motherphone', '$occupation', '$email', '$applicant_id', '$new', '$admusername')");

$update=mysqli_query($conn, "INSERT INTO stdregistration3 (sname, firstname, oname, age, disability, dateofbirth, gender, state, lga, nationality, section, nofschool, class, dateofentry, fathername, homeaddress, fatherphone, mothername, motherphone, occupation, email, aplicant_id, datecreated, adminusername)
VALUES
('$stdname', '$fname', '$oname', '$age', '$disability', '$dateofbirth', '$gender', '$State', '$lga', '$nationality', '$section', '$nofschool', '$class', '$dateofentry', '$fathername', '$homeaddress', '$fatherphone', '$mothername', '$motherphone', '$occupation', '$email', '$applicant_id', '$new', '$admusername')");


echo "<script> window.location.replace('applicant.php')</script>";
//header("location: expenses.php");
			exit();
}
?>
