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
                        <h2>1ST TERM PAYMENT PROCESS</h2><br>
                        <br>
						 

<form method="POST" action="" enctype="multipart/form-data" onSubmit="return validateForm()">
<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									

  </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table >
                             
               
               
               <script language="JavaScript">
function toggle(source) {
checkboxes = document.getElementsByName('selector[]');
for(var i=0, n=checkboxes.length;i<n;i++) {
checkboxes[i].checked = source.checked;
}
}
</script> 
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
		
		var strURL="findState.php?country="+countryId;
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
	function getStat(countryId) {		
		
		var strURL="findState2.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statdiv').innerHTML=req.responseText;	
									
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getStat(countryId) {		
		
		var strURL="findState4.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statdiv').innerHTML=req.responseText;	
									
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
                                <thead>
    <tr>
      <td width="581"><table width="100%" align="left" cellpadding="5" cellspacing="5">
       
        <?php
 $id=$_GET['id'];
include('../connect.php');//para sa connection sang database

$result2 = mysqli_query($conn, "SELECT * FROM stdregistration WHERE stdid ='$id'");

$row=mysqli_fetch_array($result2);
?>
        <input type="text" id="stdid" class="form-control" name = "stdid" value="<?php echo $row['stdid'];  ?>" readonly >
       
        <tr>
          <td align="right">Name</td>
          <td colspan="3" align="left"><span class="controls">
          <input type="text" id="name" class="form-control" name = "name" value="<?php echo $row['fname'];  ?>" readonly ></td>
          </tr>
          
          <input type="hidden" id="aplicant_id" class="form-control" name = "aplicant_id" value="<?php echo $row['aplicant_id'];  ?>" readonly >
          <tr>
          <td align="right">Verification Number</td>
         <td> <input name="authocode" type="text" class="ed" id="authocode" value="<?php $rand = rand(0,9999999); $cf = "LNDREG_VN-"; $pid = $cf.$rand ; echo $pid ; ?>" readonly /></td>
         </tr>
         <tr>
          <td align="right">Admission Number</td>
         <td> <input name="admno" type="text" class="ed" id="admno" required /></td>
         </tr>
         <tr>
          <td align="right">Term</td>
         <td> <select name="term" required >
          <option> FIRST TERM </option>
          </select></td>
         </tr>
         <tr>
          <td align="right">Section</td>
         <td> <select name="sclass">
            <option>Nursery </option>
            <option>Basic </option>
            <option>Junior Secondary </option>
            <option>Senior Secondary </option>
            <option>Al-Raudat </option>
            <option>Al-Ibidaah </option>
            <option>Tahfiz </option>
            </select></td>
         </tr>
         <tr>
          <td align="right">Year of Admission</td>
         <td> <input name="yofadm" type="text" class="ed" id="yofadm" required /></td>
         </tr>
         <tr>
         <td align="right">Student Class </td>
          <td><select name="country" required onChange="getState(this.value), getStat(this.value), getSta(this.value), getSt(this.value),getSti(this.value)" >
          <option > </option>
          <?php
		
		include('../connect.php');
		//$id=$_GET['id'];
		  //$admin = $_SESSION['admin'];
 //$a=$_POST['from'];
                //$b=$_POST['to'];
		$result = mysqli_query($conn, "SELECT * FROM reg_charge");
		
		while($row2 = mysqli_fetch_array($result))
						{
							
							echo "<option value=\"" . $row2['class'] . "\">" . $row2['class']. "</option>";
        }
			
				
				
				?>
        </select>
          </td></tr>
          <tr>
          <td align="right">Registration Fee </td>
          <td align="left"><div id="statediv"><select name="state" required></select></div></td>    </tr>
          <tr>
          <td align="right">Student Status </td>
          <td align="left"><div id="statdiv"><select name="state2" required></select></div></td>    </tr>
                        
                        <input type="hidden" id="payment" class="form-control" name = "payment" value="UNPAID" readonly >
                       
         
        <tr >
          <td colspan="4" align="center"><div class="text-center">
								<div class="form-group">
	            	<button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">Submit</button>
	            </div>
								</div></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
  <?php
			 include('../connect.php');
                            if (isset($_POST['submit'])) {
                             
							// $passport=$_POST['passport'];

$stdid=$_POST['stdid'];
$name=$_POST['name'];
//$email=$_POST['email'];
$aplicant_id=$_POST['aplicant_id'];
$authocode=$_POST['authocode'];
//$price=$_POST['price'];
$payment=$_POST['payment'];
$status=$_POST['status'];
$admno=$_POST['admno'];
$yofadm=$_POST['yofadm'];
$class=$_POST['country'];
$regfee=$_POST['state'];
$stdstatus=$_POST['state2'];
$term=$_POST['term'];
$sclass=$_POST['sclass'];
$fpart='0';

$result2 = mysqli_query($conn, "SELECT * FROM stdregistration WHERE admno='$admno'");

						$qry_row=mysqli_num_rows($result2);
	
	
		
		if($qry_row > 0)
		
		{
			echo "<script> alert('ADMISSION NUMBER ALREADY EXIST!'); window.location.replace('stdreg.php')</script>";
			
		?>
		
		<?php }
		

		
	else
	
	{


$result = mysqli_query($conn, "UPDATE stdregistration SET authocode='$authocode', payment='$payment', admno='$admno', yearofadmission='$yofadm', class='$class', total='$regfee', price='$regfee', fpart='$fpart', term='$term', section='$sclass', stdstatus='$stdstatus' WHERE stdid='$stdid'");

$result = mysqli_query($conn, "UPDATE stdregistration2 SET admno='$admno', yearofadmission='$yofadm', section='$sclass' WHERE stdid='$stdid'");             

$result = mysqli_query($conn, "UPDATE stdregistration3 SET admno='$admno', yearofadmission='$yofadm', section='$sclass' WHERE stdid='$stdid'");        
    
	                       echo "<script>window.location.replace('mpayment.php')</script>";
                                          } }
       ?>                          
      
</form>
<p></div>
  
</p>
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