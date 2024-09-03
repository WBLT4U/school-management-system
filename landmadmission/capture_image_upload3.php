 <?php
include('../connect.php');
//$id=$_GET['id'];
$id=$_POST['id'];
$folderPath = '../passport/';
$image_parts = explode(";base64,", $_POST['image']);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];
$image_base64 = base64_decode($image_parts[1]);
$file = $folderPath . uniqid() . '.png';
file_put_contents($file, $image_base64);

 $result=mysqli_query($conn, "update applicants set parentsign='$file' where stdid='$id'");
						 
						 
						 
echo json_encode(['Image uploaded successfully.']);
 
?>