<?php

include('../connect.php');


if (isset($_POST['Submit'])) {

			
			$stdname=$_POST['stdname'];
			$admno=$_POST['admno'];
			$email=$_POST['email'];
			$gender=$_POST['gender'];
			$yearofadmission=$_POST['yearofadmission'];
			$dateofbirth=$_POST['dateofbirth'];
			$placeofbirth=$_POST['placeofbirth'];
			$State=$_POST['State'];
			$lga=$_POST['SubCat3'];
			$phometown=$_POST['phometown'];
			$contactaddress=$_POST['contactaddress'];
			$religion=$_POST['religion'];
			$fathername=$_POST['fathername'];
			$nationality=$_POST['nationality'];
			$fatheraddress=$_POST['fatheraddress'];
			$fatherphone=$_POST['fatherphone'];
			$gstate=$_POST['gstate'];
			$applicant_id=$_POST['applicant_id'];
			$new =date("Y/m/d");
			$admusername=$_POST['admusername'];
			
			//date_default_timezone_set('West Africa Standard Time');
                                        
                                        $randomno = rand(1000,100000);
                                        
                                        $nam = $_FILES['image']['name'] ;
$location = $randomno.$nam ;
$type = $_FILES['image']['type'] ;
$size = $_FILES['image']['size'] ;
$tmp = $_FILES['image']['tmp_name'] ;


if($size > 100000){
    
   echo "<script> alert('File size error! Please check the size and try again'); window.location.replace('addstd.php')</script>";
    
	exit() ;
}
move_uploaded_file($tmp, "../stdpassport/" . $location) ;


$randomno3 = rand(1000,100000);
                                        
                                        $nam3 = $_FILES['image3']['name'] ;
$location3 = $randomno3.$nam3 ;
$type3 = $_FILES['image3']['type'] ;
$size3 = $_FILES['image3']['size'] ;
$tmp3 = $_FILES['image3']['tmp_name'] ;


if($size3 > 100000){
    
   echo "<script> alert('File size error! Please check the size and try again'); window.location.replace('addstd.php')</script>";
    
	exit() ;
}
move_uploaded_file($tmp3, "../stdsignature/" . $location3) ;

			
			
			$update=mysqli_query($conn, "INSERT INTO stdregistration (fname, admno, email, gender, yearofadmission, pdateofbirth, placeofbirth, state, lga, phometown, phomeaddress, religion, fathername, pnationality, fatheraddress, fatherphone, fatherstate, aplicant_id, passport, parentsign, datecreated, adminusername)
VALUES
('$stdname', '$admno', '$email', '$gender', '$yearofadmission', '$dateofbirth', '$placeofbirth', '$State', '$lga', '$phometown', '$contactaddress', '$religion', '$fathername', '$nationality', '$fatheraddress', '$fatherphone', '$gstate', '$applicant_id', '$location', '$location3', '$new', '$admusername')");

echo "<script> window.location.replace('stdreg.php')</script>";
//header("location: expenses.php");
			exit();
}
?>
