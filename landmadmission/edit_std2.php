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
$result2 = mysqli_query($conn, "SELECT * FROM stdregistration2 WHERE stdid='$id' AND payment='PAID'");

						$qry_row=mysqli_num_rows($result2);
	
	
		
		if($qry_row > 0)
		
		{
			//$_SESSION['msg'] = "Invoice already generated." ;
			//header("location: cashstore_master.php");
			echo "<script>alert('Applicant Paid!. It cannot be edited pls contact the Director.'); window.location='stdreg2.php';</script>";
			
		?>
		
		<?php }
		

		
	else
	
	{
	
	}}
?>

  <?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = mysqli_query($conn, "SELECT * FROM stdregistration2 where stdid='$id'");
		while($row = mysqli_fetch_array($result))
			{
				$price=$row['price'];
				$admno=$row['admno'];
				$yearofadmission=$row['yearofadmission'];
				$class=$row['class'];
				$stdid=$row['stdid'];
				
				
			}
?>
<form id="drop_list" name= "drop_list" action="execeditstd2.php" method="post" enctype="multipart/form-data" onSubmit="return validateForm()">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
      <p>Admission No. <br >
     <input name="admno" type="text" value="<?php echo $admno; ?>" class="ed" readonly /> <br >
     <p>Year of Admission <br >
     <input name="yofadm" type="text" value="<?php echo $yearofadmission; ?>" class="ed" required /> <br >
       <p>Student class <br >
            <select name="country" required onChange="getState(this.value), getStat(this.value), getSta(this.value), getSt(this.value),getSti(this.value)" >
          <option > </option>
          <?php
		
		include('../connect.php');
		//$id=$_GET['id'];
		  //$admin = $_SESSION['admin'];
 //$a=$_POST['from'];
                //$b=$_POST['to'];
		$result = mysqli_query($conn, "SELECT * FROM reg_charge2");
		
		while($row2 = mysqli_fetch_array($result))
						{
							
							echo "<option value=\"" . $row2['class'] . "\">" . $row2['class']. "</option>";
        }
			
				
				
				?>
        </select>
			<br> 
            <p>Registration Fee <br >
            <div id="statediv"><select name="state" required></select></div>
                     <br>
        <br>
      	  <input type="submit" value="Edit" id="button1">
</form>
</div>

<script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findStatetworeg.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;	
									
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	</script>
				
	
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