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
                        <h2>THIRD TERM (3RD TERM) STUDENT REGISTRATION</h2><br>
                        <br>
						 

<form method="POST" action="delete_applicant.php">
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
								
								<th> Surname </th>
                                <th> Firstname </th>
                                <th> Other name </th>
                                <th> Admission No. </th>
								<th> Gender </th>
                                <th> Term </th>
                                <th> Signature </th>
                                <th> Passport </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../connect.php');
							$result = mysqli_query($conn, "SELECT * FROM stdregistration3 order by stdid DESC");
							while($row = mysqli_fetch_array($result))
								{
									$id=$row['stdid'];
									?>
                                    <tr style="font-size: 12px">
          <td bgcolor="#FFFFFF"><?php echo $row['sname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['firstname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['oname'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['admno'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['gender'];?></td>
          <td bgcolor="#FFFFFF"><?php echo $row['term'];?></td>
                   <td bgcolor="#FFFFFF"><img class="img-rounded" src="../signature/<?php echo $row['parentsign']; ?>" width="60" height="60" /></td>
          <td bgcolor="#FFFFFF"><img class="img-rounded" src="../passport/<?php echo $row['passport']; ?>" width="60" height="60" /></td>
          <td>
           <?php 
     $stats=$row['payment'];

     if ($stats=="") {
		 
      ?>
     <a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="add_admisNo3.php?id=<?php echo $row['stdid'];?>" class="btn btn-success"><font size="2">Generate 3rd Term Invoice</font></a>
     <br><br> 
     <a href="edit_std3.php<?php echo '?id='.$id; ?>" class="btn btn-danger"> Edit</a>
     <br> <br>
      <!---------------------their is a receipt--->   
   <?php }elseif ($stats=="UNPAID") {
      ?>
      <a href="edit_std3.php<?php echo '?id='.$id; ?>" class="btn btn-danger"> Edit</a>
     <br><br>
      <!---------------------their is a receipt--->   
   <?php } else { ?>
          <br><br>
         
      <a href="edit_std3.php<?php echo '?id='.$id; ?>" class="btn btn-success"> Edit</a>
     
          <br><br> 
          
          <a  rel="tooltip"  title="Edit" id="<?php echo $id; ?>" href="printout3.php?id=<?php echo $row['stdid'];?>" class="btn btn-danger"><font size="2">Paid Receipt</font></a>
          <br><br>
          </td>
    <?php }
         }    
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