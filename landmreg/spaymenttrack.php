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
                        
                        <h2 align="center">2ND TERM PAYMENT TRACKS</h2><br>
                        <br>
						 

<form method="POST" action="delete_product.php">
<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									

  </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
                             
               
               
               <script language="JavaScript">
function toggle(source) {
checkboxes = document.getElementsByName('selector[]');
for(var i=0, n=checkboxes.length;i<n;i++) {
checkboxes[i].checked = source.checked;
}
}
</script> 
                                <thead>
                                    
        <tr>
          <th colspan="9" bgcolor="#FFFFFF"></th>
        </tr>
        <tr style="font-size: 13px; color: #2A00FF;">
         <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Surname</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Firstname</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Othername</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Adm. No.</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Class </span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Session</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Term</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Section</span></th>
           <th bgcolor="#FFFFFF"><span style="color: #2A00FF">School Fee Price</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Part Paid Price</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Cumulative Paying Price</span></th>
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Balance</span></th>
          
          <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Payment Status</span></th>
           <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Payment Method</span></th>
           <th bgcolor="#FFFFFF"><span style="color: #2A00FF">Date Paid</span></th>
          
          <!--    <th>Action</th> -->
        </tr>
      </thead>
      <tbody>
       <?php 
	$result=mysqli_query($conn, "SELECT * FROM stdregistrationtrack2 where payment='PARTPAID' AND term='SECOND TERM' order by stdid DESC");
	
	while($row = mysqli_fetch_array($result)){
		$id=$row['adminusername'];
		$ids=$row['stdid'];
	 	//print_r($row);
	  ?>
        <tr style="font-size: 12px">
          <td bgcolor="#FFFFFF"><?php echo $row['sname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['firstname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['oname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['admno']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['class']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['yearofadmission']; ?> </td><td bgcolor="#FFFFFF"><?php echo $row['term']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['section']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['price']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['part']; ?> </td>
          <td bgcolor="#FFFFFF"><?php echo $row['fpart']; ?> </td>
          
          <td bgcolor="#FFFFFF"><?php $plus = $row['price'];
		  $pluses = $row['fpart'];
		  $remaining = $plus - $pluses ;
		  
		  echo $remaining; ?></td>
          
          <td bgcolor="#FFFFFF"><?php echo $row['payment'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['payment_method']; ?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['Date_paid']; ?></td>
          <td>
              <?php }
             
     ?>
          
          
      </tbody>
   </table>
      
                            </div>
								</div>
							</div>
					<!----- end transaction of the day ----->
								</div>
								</div>

				
	
</body>

</html><script>
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