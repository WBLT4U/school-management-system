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
	include('../connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM applicants where stdid='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$sname=$row['sname'];
				$fname=$row['firstname'];
				$oname=$row['oname'];
				$age=$row['age'];
				$disability=$row['disability'];
				$dateofbirth=$row['dateofbirth'];
				$gender=$row['gender'];
				$state=$row['state'];
				$lga=$row['lga'];
				$nationality=$row['nationality'];
				$tribe=$row['tribe'];
				$section=$row['section'];
				$nofschool=$row['nofschool'];
				$class=$row['class'];
				$dateofentry=$row['dateofentry'];
				$fathername=$row['fathername'];
				$homeaddress=$row['homeaddress'];
				$fatherphone=$row['fatherphone'];
				$mothername=$row['mothername'];
				$motherphone=$row['motherphone'];
				$occupation=$row['occupation'];
				$email=$row['email'];
				$stdid=$row['stdid'];
				$aplicant_id=$row['aplicant_id'];
				
				
			}
?>
<form id="drop_list" name= "drop_list" action="execeditapplicant.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
    <input type="hidden" name="applicant_id" value="<?php echo $aplicant_id; ?>">
	    <p><a class="btn btn-success"><i class="glyphicon-plus"></i> &nbsp;PUPILS PARTICULARS</a>&nbsp;
  <p>Surname &nbsp;&nbsp;
     <input name="stdname" type="text" class="ed" value="<?php echo $sname; ?>" required />&nbsp;&nbsp; Firstname &nbsp;<input name="fname" type="text" class="ed" value="<?php echo $fname; ?>" required /> &nbsp;&nbsp;Other Name &nbsp;
     <input name="oname" type="text" value="<?php echo $oname; ?>" class="ed" /> <br >
     <p>Age <br >
     <input name="age" type="text" class="ed" value="<?php echo $age; ?>" required /> <br > Disability (Please Indicate) <br >
     <input name="disability" type="text" class="ed" /> <br >
     Date of Birth <br > 
     <input name="dateofbirth" type="date" class="ed" value="<?php echo $dateofbirth; ?>" required /><br >
     <p>Applicant Gender <br >
            <select name="gender">
            <option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
            <option>Male </option>
            <option>Female </option>
            </select>
			<br >
            State <br >
     <select name="State" id="State" onchange="SelectSubCat3()" required="required">
     <option value="<?php echo $state; ?>"><?php echo $state; ?> </option>
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
            <br >
             Student Local Government <br >
            <select name="SubCat3" id="SubCat3" required="required"> </select>
            <br>
            <p>Nationality <br >
     <input name="nationality" type="text" class="ed" value="<?php echo $nationality; ?>" required /> <br > 
     Tribe <br >
     <input name="tribe" type="text" class="ed" value="<?php echo $tribe; ?>" required /> <br >
     <p>Section <br >
            <select name="section">
            <option value="<?php echo $section; ?>"><?php echo $section; ?> </option>
            <option>Nursery </option>
            <option>Basic </option>
            <option>Junior Secondary </option>
            <option>Senior Secondary </option>
            <option>Al-Raudat </option>
            <option>Al-Ibidaah </option>
            <option>Tahfiz </option>
            </select>
			<br>
     
     
     <p><a class="btn btn-success"><i class="glyphicon-plus"></i> &nbsp;DETAILS OF SCHOOL ATTENDED</a>&nbsp;
     <br>
     
     <p>Name of School <br >
     <input name="nofschool" type="text" class="ed" value="<?php echo $nofschool; ?>" /> <br >
     <p>Class <br >
      <input type="text" name="class" class="ed" value="<?php echo $class; ?>" >
      <br>
      <p>Date <br >
     <input name="dateofentry" type="text" class="ed" value="<?php echo $dateofentry; ?>" /> <br >
     <p><a class="btn btn-success"><i class="glyphicon-plus"></i> &nbsp;PARENTAL INFORMATION </a>&nbsp;
     <br>
     <p>Father's Name <br >
     <input name="fathername" type="text" class="ed" value="<?php echo $fathername; ?>" required /> <br >
     <p>Home Address <br >
    <textarea name="homeaddress" id="textarea" cols="45" rows="5" required><?php echo $homeaddress; ?></textarea> 
      <br >
      <p>Father's Phone No. <br >
      <input type="text" name="fatherphone" class="ed" value="<?php echo $fatherphone; ?>" pattern = "[0-9]+" required>
      <br>
      <p>Mother's Name <br >
     <input name="mothername" type="text" class="ed" value="<?php echo $mothername; ?>" required /> <br >
     <p>Mother's Phone No. <br >
      <input type="text" name="motherphone" class="ed" value="<?php echo $motherphone; ?>" pattern = "[0-9]+" required>
      <br>
      <p>Occupation of Parent <br >
     <input name="occupation" type="text" class="ed" value="<?php echo $occupation; ?>" required /> <br >
     <p>Email Address <br >
     <input name="email" type="text" class="ed" value="<?php echo $email; ?>" required /> <br >
			<br>
             <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Image</label>
    <div class="col-sm-10">
      <a href="edit_product_image.php?id=<?php echo $stdid;?>">EDIT IMAGE</a>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Birth Cert Image 2</label>
    <div class="col-sm-10">
      <a href="edit_product_image2.php?id=<?php echo $stdid;?>">EDIT IMAGE 2</a>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Parent/Guardian Signature Image </label>
    <div class="col-sm-10">
      <a href="edit_product_image3.php?id=<?php echo $stdid;?>">EDIT IMAGE 3</a>
    </div>
  </div>
  <br>

  	  <input type="submit" value="Edit" id="button1">
</form>
</div>

				
	
<script>
	    $("#realuser").click(function() {
	        var name=$("#name").val();
	        var username=$("#username").val();
	        var phone=$("#phone").val();
	        var email=$("#email").val();
	        var password=$("#password").val();
	       var status = $('#status').find(":selected").val();
	       swal({
  title: "Dear <?php echo $row['Firstname'];?>",
  text: "Are  you  sure you want to Add" + ' ' + name,
  icon: "warning",
  buttons: true,
  dangerMode: true,
}) 
.then((willDelete) => {
  if (willDelete) {
      
      
      $.ajax({
           type:'POST',
         beforeSend: function(){
            $.LoadingOverlay("show");
                 },
         url: '../assets/addcustomer.php',
            data: {
                          id: <?php echo $row['id']; ?>,
                          name:name,
                          username:username,
                          email:email,
                          phone:phone,
                          password:password,
                          status:status
                        },
            dataType: 'json',
                      success: function (response) {
                          if (response.status == 500){
                               $.LoadingOverlay("hide");
                            swal({
                              title: "Successful!",
                              text: "You successfully added " + ' ' + name,
                              icon: "success",
                              button: "Okay",
                            })
                            $('.swal-button--confirm').click(function(){
                                  $.ajax({
                                        beforeSend: function(){
                                            $.LoadingOverlay("show");
                                        },
            success:  location.reload()
                                  });
                            });
                          }else{
                     $.LoadingOverlay("hide");
            swal(response.title, response.message, response.status)
                
                      }
                      },
                      complete: function(response){
                        $.LoadingOverlay("hide")
                      }
                      
                  });

      
      
  }
  else{
    swal("you pressed cancel ");
  }
 });
	    });
	</script>				

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