<?php include('include/session.php'); ?>
<?php include('../connect.php');?>
<?php  include 'include/header.php'; 

?>
<?php 
include('../formatMoney.php');
        
        
?>
			<!-- End Navbar -->
		<!-- Sidebar -->
		<?php  include 'include/nav.php'; ?>
        <?php echo include 'include/footer.php'; ?>
				<!-- End Sidebar -->
		<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="webcam.js"></script>
	
	<!-- Bootstrap theme -->
		<script type="text/javascript" src="bootstrap.min.js"></script>

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"><a href="#"><?php $admin = $_SESSION['admin'];
$query = mysqli_query($conn, "select * from admission where Username='$admin'");
                $row = mysqli_fetch_array($query);
                $id = $row['Username']; ?> <b>Welcome!  </b> <?php echo $row['Username'];?> <span class="badge badge-info"> </span></a> </h5>
							</div>
							
						</div>
						</div>
						</div>
						<!----- surplus data balance ------>
						<br>
                        <br>
						 
						 <div class="well">
						     <?php
if(isset($_GET['id'])){
include('../connect.php');
//$id=$_GET['id'];
$id=$_GET['id'];
$result2 = mysqli_query($conn, "SELECT * FROM applicants WHERE stdid='$id' AND payment='PAID'");

						$qry_row=mysqli_num_rows($result2);
	
	
		
		if($qry_row > 0)
		
		{
			//$_SESSION['msg'] = "Invoice already generated." ;
			//header("location: cashstore_master.php");
			echo "<script>alert('Applicant Paid!. It cannot be edited pls contact the Director.'); window.location='applicant.php';</script>";
			
		?>
		
		<?php }
		

		
	else
	
	{
	
	}}
?>


                         
<?php 
$id=$_GET['id'];

$query=mysqli_query($conn, "select * from applicants where stdid='$id'");
$row=mysqli_fetch_array($query);
$aplicant_id=$row['aplicant_id'];
?>
<form id="drop_list" name= "drop_list" action="" method="post">
<div class="container">	
  <div class="row">
	<div class="col-lg-6" align="center">
		<label>Capture live photo</label>
		<div id="my_camera" class="pre_capture_frame" ></div>
		<input type="hidden" name="captured_image_data" id="captured_image_data">
		<br>
		<input type="button" class="btn btn-info btn-round btn-file" value="Take Snapshot" onClick="take_snapshot()">	
	</div>
	<div class="col-lg-6" align="center">
		<label>Result</label>
		<div id="results" >
			<img style="width: 250px;" class="after_capture_frame" src="image_placeholder.jpg" />
		</div>
		<br>
		<a href="applicant.php" class="btn btn-success"> Back</a> <button type="button" class="btn btn-danger" onClick="saveSnap()">Save Picture</button>
	</div>	
  </div><!--  end row -->
</div></form><!-- end container -->
</body>
<script language="JavaScript">
	 // Configure a few settings and attach camera 250x187
	 Webcam.set({
	  width: 250,
	  height: 187,
	  image_format: 'jpeg',
	  jpeg_quality: 90
	 });	 
	 Webcam.attach( '#my_camera' );
	
	function take_snapshot() {
	 // play sound effect
	 //shutter.play();
	 // take snapshot and get image data
	 Webcam.snap( function(data_uri) {
	 // display results in page
	 document.getElementById('results').innerHTML = 
	  '<img class="after_capture_frame" src="'+data_uri+'"/>';
	 $("#captured_image_data").val(data_uri);
	 });	 
	}

	function saveSnap(){
	var base64data = $("#captured_image_data").val();
	 $.ajax({
			type: "POST",
			dataType: "json",
			url: "capture_image_upload.php",
			data: { id: <?php echo $row['stdid']; ?>,
				image: base64data},
			success: function(data) { 
				alert(data);
			}
		});
	}
</script>

</html>