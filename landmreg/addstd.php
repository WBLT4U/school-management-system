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
		
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"><a href="#"><?php $admin = $_SESSION['admin'];
	$query = mysqli_query($conn, "select * from registration where Username='$admin'");
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

 <form id="drop_list" name= "drop_list" action="addexec_std.php" method="post" enctype="multipart/form-data" >
  <input name="applicant_id" type="hidden" class="ed" id="applicant_id" value="<?php $rand = rand(0,999999); $cf = "LNDM_R"; $pid = $cf.$rand ; echo $pid ; ?>" readonly />
     <input name="admusername" type="hidden" class="ed" value="<?php echo $row['Username']; ?>" required /> <br >
 <p><a class="btn btn-success"><i class="glyphicon-plus"></i> &nbsp;PERSONAL DATA/STUDENT RECORDS</a>&nbsp;
  <p>Student Name <br >
     <input name="stdname" type="text" class="ed" required /> <br >
     <p>Admission No. <br >
     <input name="admno" type="text" class="ed" required /> <br >
     <p>Email Address <br >
     <input name="email" type="text" class="ed" required /> <br >
       <p>Student Gender <br >
            <select name="gender">
            <option>Male </option>
            <option>Female </option>
            </select>
			<br> 
            <p>Year of Admission <br >
     <input name="yearofadmission" type="text" class="ed" required /> <br >
 
            <p>Pupils Date of Birth <br >
     <input name="dateofbirth" type="date" class="ed" required /> <br >  
     <p>Pupils Place of Birth <br >
     <input name="placeofbirth" type="text" class="ed" required /> <br >
     <p>State <br >
     <select name="State" id="State" onchange="SelectSubCat3()" required="required">
              <option value="Abuja">Abuja</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nasarawa">Nasarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
            </select>
            <br>
            <p>Student Local Government <br >
            <select name="SubCat3" id="SubCat3" required="required"> </select>
     <p>Pupils Home Town <br >
     <input name="phometown" type="text" class="ed" required /> <br >
     <p>Student Contact Address <br >
    <textarea name="contactaddress" id="textarea" cols="45" rows="5" required></textarea> 
      <br >
     <p>Religion <br >
            <select name="religion">
            <option>Islam </option>
            <option>Christianity </option>
            </select>
			<br>  
     <p>Father's Name <br >
     <input name="fathername" type="text" class="ed" required /> <br >
     <p>Nationality <br >
     <input name="nationality" type="text" class="ed" required /> <br >
       <p>Address <br >
    <textarea name="fatheraddress" id="textarea" cols="45" rows="5" ></textarea> 
      <br >
            <p>Father's Phone No. <br >
      <input type="text" name="fatherphone" class="ed" pattern = "[0-9]+" required>
      <br>
      <p>Guardian State <br >
     <select name="gstate" required="required">
              <option value="Abuja">Abuja</option>
              <option value="Abia">Abia</option>
              <option value="Adamawa">Adamawa</option>
              <option value="Akwa Ibom">Akwa Ibom</option>
              <option value="Anambra">Anambra</option>
              <option value="Bauchi">Bauchi</option>
              <option value="Bayelsa">Bayelsa</option>
              <option value="Benue">Benue</option>
              <option value="Borno">Borno</option>
              <option value="Cross River">Cross River</option>
              <option value="Delta">Delta</option>
              <option value="Ebonyi">Ebonyi</option>
              <option value="Edo">Edo</option>
              <option value="Ekiti">Ekiti</option>
              <option value="Enugu">Enugu</option>
              <option value="Gombe">Gombe</option>
              <option value="Imo">Imo</option>
              <option value="Jigawa">Jigawa</option>
              <option value="Kaduna">Kaduna</option>
              <option value="Kano">Kano</option>
              <option value="Katsina">Katsina</option>
              <option value="Kebbi">Kebbi</option>
              <option value="Kogi">Kogi</option>
              <option value="Kwara">Kwara</option>
              <option value="Lagos">Lagos</option>
              <option value="Nasarawa">Nasarawa</option>
              <option value="Niger">Niger</option>
              <option value="Ogun">Ogun</option>
              <option value="Ondo">Ondo</option>
              <option value="Osun">Osun</option>
              <option value="Oyo">Oyo</option>
              <option value="Plateau">Plateau</option>
              <option value="Rivers">Rivers</option>
              <option value="Sokoto">Sokoto</option>
              <option value="Taraba">Taraba</option>
              <option value="Yobe">Yobe</option>
              <option value="Zamfara">Zamfara</option>
            </select>
            <br>
        <p>Upload Student Passport <br >
     <input type="file" name="image" id="exampleInputFile" required/> <br >
            <p>Upload Signature <br >
     <input type="file" name="image3" id="exampleInputFile" required/> <br >
        <br>
        <br>
    <input type="submit" name="Submit" value="save" id="button1" />
  </p>
</form>

</div>
				
	

	<!--   Core JS Files   -->
	
	
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>
</body>

</html>