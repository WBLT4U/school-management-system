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
						 

<form method="POST" action="">
<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									

  </h3>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
        <tr>
          <td colspan="4"></td>
        </tr>
        <?php
 $IDS=$_GET['id'];
include('../connect.php');//para sa connection sang database

$result2 = mysqli_query($conn, "SELECT * FROM stdregistration3 WHERE stdid ='$IDS'");

$row=mysqli_fetch_array($result2);
$total=$row['total'];
$fpart=$row['fpart'];
$price=$row['price'];
$sname=$row['sname'];
$firstname=$row['firstname'];
$oname=$row['oname'];
$admno=$row['admno'];
$yearofadmission=$row['yearofadmission'];
$class=$row['class'];
$term=$row['term'];
$section=$row['section'];
?>
        <input name="fname" type="hidden" id="fname" value="<?php echo $sname; ?>" size="30" readonly />
        <input name="firstname" type="hidden" id="firstname" value="<?php echo $firstname; ?>" size="30" readonly />
        <input name="oname" type="hidden" id="oname" value="<?php echo $oname; ?>" size="30" readonly />
        <input name="admno" type="hidden" id="admno" value="<?php echo $admno; ?>" size="30" readonly />
        <input name="yearofadmission" type="hidden" id="yearofadmission" value="<?php echo $yearofadmission; ?>" size="30" readonly />
        <input name="class" type="hidden" id="class" value="<?php echo $class; ?>" size="30" readonly />
        <input name="term" type="hidden" id="term" value="<?php echo $term; ?>" size="30" readonly />
        <input name="section" type="hidden" id="section" value="<?php echo $section; ?>" size="30" readonly />
        <tr>
          <td align="right"><strong>Payment:</strong></td>
        </tr>
        <tr>
          <td align="right">Payment Method </td>
          <td colspan="3" align="left"><span class="controls">
          <select name="paymentmethod" id="paymentmethod" required="required">
              
              <option value="Transfer">Transfer</option>
              <option value="POS">POS</option>
              <option value="Cash">Cash </option>
                          </select>  
        </tr>
        <tr>
          <td align="right">Payment Status</td>
          <td colspan="3" align="left"><span class="controls">
            <select name="payment" id="payment" required="required">
              
              <option value="PAID">PAID</option>
                          </select>
        </tr>
        <tr>
          <td align="right">Balance Fee </td>
          <td colspan="3" align="left"><span class="controls">
          <input name="total" type="text" id="total" value="<?php echo $total; ?>" size="30" readonly/>  
        </tr>
        <tr>
          <td align="right">Part Payment </td>
          <td colspan="3" align="left"><span class="controls">
          <input name="partpay" type="number" id="partpay" size="30" />  
        </tr>
        <input name="price" type="hidden" id="price" value="<?php echo $price; ?>" size="30" readonly />
                <input name="fpart" type="hidden" id="fpart" value="<?php echo $fpart; ?>" size="30" readonly />
               
        <tr bgcolor="#999999">
          <td colspan="4" align="center"><div class="text-center">
								<button class="btn btn-dark-green" type = "submit" value = "submit" name = "update" id="update">Update</button>
								</div></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
  <?php
 include('../connect.php');                
				
							 if (isset($_POST['update'])) {
						
                                $fname = $_POST['fname'];
								$firstname = $_POST['firstname'];
								$oname = $_POST['oname'];
								$admno = $_POST['admno'];
								$yearofadmission = $_POST['yearofadmission'];
								$class = $_POST['class'];
								$term = $_POST['term'];
								$section = $_POST['section'];
								$payment = $_POST['payment'];
                                
                                $paymentmethod = $_POST['paymentmethod'];
								$price = $_POST['price'];
								
								$total = $_POST['total'];
								
								$partpay = $_POST['partpay'];
								$fpart = $_POST['fpart'];
								
								$remaining = $total - $partpay ;
								$fremaining = $partpay + $fpart ;
								$partpayment = 'PARTPAID';
								$datecreated = date("Y-m-d");
								//$expdates = date('$expdate');
		//$expdated = date('$expdates', strtotime('+$durations months'));
		if ($fremaining > $price) {
			
			echo "<script> alert('THE PART PAYMENT IS MORE THAN THE REMAINING BALANCE!'); window.location.replace('mpayment3.php')</script>";
			
		}
		elseif ($price==$fremaining) {
			
			
        	$result3=mysqli_query($conn, "UPDATE stdregistration3 SET payment ='$payment', payment_method ='$paymentmethod', part ='$partpay', fpart ='$fremaining', total ='$remaining', Date_paid ='$datecreated' WHERE stdid ='$IDS'");
			
			$update=mysqli_query($conn, "INSERT INTO stdregistrationtrack3 (sname, firstname, oname, admno, yearofadmission, term, class, section, price, payment, payment_method, part, fpart, total, Date_paid)
VALUES
('$fname', '$firstname', '$oname', '$admno', '$yearofadmission', '$term', '$class', '$section', '$price', '$payment', '$paymentmethod', '$partpay', '$fremaining', '$remaining', '$datecreated')");
			
			echo "<script>window.location.replace('mpayment3.php')</script>";
		}
			
		else {

        
        	$result3=mysqli_query($conn, "UPDATE stdregistration3 SET payment ='PARTPAID', payment_method ='$paymentmethod', part ='$partpay', fpart ='$fremaining', total ='$remaining', Date_paid ='$datecreated' WHERE stdid ='$IDS'");
			
			$update=mysqli_query($conn, "INSERT INTO stdregistrationtrack3 (sname, firstname, oname, admno, yearofadmission, term, class, section, price, payment, payment_method, part, fpart, total, Date_paid)
VALUES
('$fname', '$firstname', '$oname', '$admno', '$yearofadmission', '$term', '$class', '$section', '$price', '$partpayment', '$paymentmethod', '$partpay', '$fremaining', '$remaining', '$datecreated')");
			
			
        	echo "<script>window.location.replace('mpayment3.php')</script>";
        } }
		
      
?>
                             
      
</form>
<p></div>
  
</p>
</div>
</main>


			<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../MDB/js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../MDB/js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../MDB/js/mdb.min.js"></script>
	<script type="text/JavaScript" src="result.js"></script>
	<script src="../circle/js/jquery.circliful.js"></script>
    <script language="javascript" type = "text/javascript" src="../js/state-lga-list.js"></script>
	
	</body>
</html>


