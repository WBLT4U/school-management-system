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
                        <br>
                        <br>
						 <div class="well">
				
      <center>
	<?php
 $IDS=$_GET['id'];
include('../connect.php');//para sa connection sang database

$result2 = mysqli_query($conn, "SELECT * FROM stdregistration WHERE stdid ='$IDS'");

$row1=mysqli_fetch_array($result2);
?>
   
<form action="https://checkout.flutterwave.com/v3/hosted/pay" method="post">
    <input type="hidden" name="public_key" value="FLWPUBK-9f7aa4424651f545ca6c02800ff9ed7e-X" />
    <span style="color: #000; font-weight: bold;">Email Address:</span>
    <input name="customer[email]" placeholder="Your Email" value="<?php echo $row1['email']; ?>" readonly class="form-control" type="text">
<input name="customer[aplicant_id]" type="hidden" class="ed" id="authocode" value="<?php echo $row1['aplicant_id']; ?>" readonly />
<span style="color: #000; font-weight: bold;">Name:</span>
<input name="customer[sname]" value="<?php echo $row1['sname']; ?> <?php echo $row1['firstname']; ?> <?php echo $row1['oname']; ?>" required="required" class="form-control" type="text" readonly>
<span style="color: #000; font-weight: bold;">Phone:</span>
<input name="customer[contactno]" value="<?php echo $row1['fatherphone']; ?>" required="required" class="form-control" type="text" readonly>
<span style="color: #000; font-weight: bold;">Amount:</span>
<input name="amount" value="<?php echo $row1['price']; ?>" readonly class="form-control" type="text">
<input type="hidden" name="currency" value="NGN" />
<input type="hidden" name="tx_ref" value="<?php echo $row1['authocode']; ?>" readonly />
<input type="hidden" name="meta[token]" value="54" />
  
  <input type="hidden" name="redirect_url" value="https://www.wblt.com.ng/inventadmin/status.php" />


<div class="form-group">
<input name="button" id="button" value=" Make Payment" class="btn btn-danger btn-lg" type="submit">

</div>
</form>

     
     <a href="mpayment.php"><button type="button"  class="btn btn-success"><span class="icon-off"></span> Back</button></a> 
      </center>
</div>
<?php
	
    
?>
	<!------ end adding user ------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
				
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