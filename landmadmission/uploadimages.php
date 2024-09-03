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
				
				$stdid=$row['stdid'];
				$aplicant_id=$row['aplicant_id'];
				
				
			}
?>
<form id="drop_list" name= "drop_list" action="" method="post">
	 <br >
			<br>
             <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Image</label>
    <div class="col-sm-10">
      <a href="applicnt_img.php?id=<?php echo $stdid;?>">Upload Image</a>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Birth Cert Image </label>
    <div class="col-sm-10">
      <a href="bcert_img.php?id=<?php echo $stdid;?>">Upload Image </a>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Applicant Parent Signature Image </label>
    <div class="col-sm-10">
      <a href="sign_img.php?id=<?php echo $stdid;?>">Upload Image </a>
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