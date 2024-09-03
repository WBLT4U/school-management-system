<?php include('include/session.php'); ?>
<?php include('../connect.php');?>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title></title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<div style="text-align: center; font-weight: bold;">
<img src="../img/landmarklogo.jpg" width="100">
<p><span style="text-align: center; font-size: 16px;"><strong>LANDMARK  BRIDGE OF SUCCESS INT'L SCHOOL</strong></span><br>
  <span style="text-align: center; font-size: 13px;">No. 20 Gidan Bawan Allah, Off Gidan Fulani, Sokoto-Nigeria</span><br>
  
  <span style="text-align: center; font-size: 13px;">Contact: <a href="#">08144339182, 07060576984, 08066142884</a> </span>
</div><br /><?php $a=$_POST['from'];
                $b=$_POST['to'];
				
?>
<strong>Date From: <?php echo $a;?> To: <?php echo $b; ?> </strong>
<br><br>
<strong>2ND TERM STUDENT REGISTRATION FEE FINANCIAL REPORTS </strong>
<br><br>
<?php $admin = $_SESSION['admin'];
$query = mysqli_query($conn, "select * from registration where Username='$admin'");
                $row = mysqli_fetch_array($query);
                $name = $row['Username']; ?>
	
	
<table cellpadding="5" cellspacing="0" id="resultTable" border="1">
  <tr>
    <td><strong>Pupils Name</strong></td>
    <td><strong>Gender</strong></td>
    <td><strong>Father Phone No.</strong></td>
    <td><strong>Price to Be Paid</strong></td>
    <td><strong>Price Paid</strong></td>
    <td><strong>Balance</strong></td>
    <td><strong>Payment Status</strong></td>
    <td><strong>Payment Method</strong></td>
    <td><strong>Transaction ID</strong></td>
    <td><strong>Date Paid</strong></td>
  </tr>
  <?php
		
		include('../connect.php');
		//$admin = $_SESSION['admin'];
 $a=$_POST['from'];
                $b=$_POST['to'];
		$result2 = mysqli_query($conn, "SELECT * FROM stdregistration2 WHERE payment='PAID' AND Date_paid BETWEEN '$a' AND '$b'");
		
		while($row2 = mysqli_fetch_array($result2))
			{
				
				
				?>
  <tr>
    <td><?php echo $row2['fname']; ?></td>
    <td><?php echo $row2['gender']; ?></td>
    <td><?php echo $row2['fatherphone']; ?></td>
    <td><?php echo $row2['price']; ?></td>
    <td><?php echo $row2['fpayment']; ?></td>
    <td><?php echo $row2['fpart']; ?></td>
    <td><?php echo $row2['payment']; ?></td>
    <td><?php echo $row2['payment_method']; ?></td>
    <td><?php echo $row2['authocode']; ?></td>
    <td><?php echo $row2['Date_paid'];?></td><?php  }  ?>
  </tr>
   <?php
		
		include('../connect.php');
		//$admin = $_SESSION['admin'];
 $a=$_POST['from'];
                $b=$_POST['to'];
		$result3 = mysqli_query($conn, "SELECT * FROM stdregistration2 WHERE payment='PARTPAID' AND Date_paid BETWEEN '$a' AND '$b'");
		
		while($row3 = mysqli_fetch_array($result3))
			{
				
				
				?>
  <tr>
    <td><?php echo $row3['fname']; ?></td>
    <td><?php echo $row3['gender']; ?></td>
    <td><?php echo $row3['fatherphone']; ?></td>
    <td><?php echo $row3['price']; ?></td>
   <td><?php echo $row3['fpart']; ?></td>
    <td><?php echo $row3['total']; ?></td>
    <td><?php echo $row3['payment']; ?></td>
    <td><?php echo $row3['payment_method']; ?></td>
    <td><?php echo $row3['authocode']; ?></td>
    <td><?php echo $row3['Date_paid'];?></td><?php  }  ?>
  </tr>

  
  
  <tr>
    <td><strong>Grand Total </strong></td>
    <td><?php
include('../connect.php');
// $cashier = $_SESSION['cashier'];
 $a=$_POST['from'];
                $b=$_POST['to'];
				  $result5 = mysqli_query($conn, "SELECT sum(price) FROM stdregistration2 WHERE payment='PAID' AND Date_paid BETWEEN '$a' AND '$b'");
				  
				  $result6 = mysqli_query($conn, "SELECT sum(fpart) FROM stdregistration2 WHERE payment='PARTPAID' AND Date_paid BETWEEN '$a' AND '$b'");
					
					 				  
					 $row5 = mysqli_fetch_array($result5);
					 $row6 = mysqli_fetch_array($result6);
					 
					 
					 $total1=$row5['sum(price)'];
					 $total2=$row6['sum(fpart)'];
					 
					 $value=$total1 + $total2;
					  
					  echo $value; 
						//$sfdddsdsd=$row5['sum(grandtotal)'];
					  
				  ?></td>
  </tr>
</table>
</div>