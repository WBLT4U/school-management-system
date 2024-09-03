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

$result2 = mysqli_query($conn, "SELECT * FROM stdregistration2 WHERE stdid ='$IDS'");

$row=mysqli_fetch_array($result2);
$price=$row['price'];
?>
        
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
          <td align="right">Registration Fee </td>
          <td colspan="3" align="left"><span class="controls">
          <input name="price" type="text" id="price" value="<?php echo $price; ?>" size="30" readonly/>  
        </tr>
       
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
						
                                $payment = $_POST['payment'];
                                
                                $paymentmethod = $_POST['paymentmethod'];
								$price = $_POST['price'];
                               
								$datecreated = date("Y-m-d");
								//$expdates = date('$expdate');
		//$expdated = date('$expdates', strtotime('+$durations months'));
		
		
        
        	$result3=mysqli_query($conn, "UPDATE stdregistration2 SET payment ='$payment', payment_method ='$paymentmethod', fpayment ='$price', Date_paid ='$datecreated' WHERE stdid ='$IDS'");
			
			
        	echo "<script>window.location.replace('mpayment2.php')</script>";
        }
		
      
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


