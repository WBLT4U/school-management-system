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
<strong>APPLICATION FORM FINANCIAL REPORTS </strong>
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
    <td><strong>Price Paid</strong></td>
    <td><strong>Date</strong></td>
  </tr>
  <?php
		
		include('../connect.php');
		//$admin = $_SESSION['admin'];
 $a=$_POST['from'];
                $b=$_POST['to'];
		$result2 = mysqli_query($conn, "SELECT * FROM applicants WHERE payment='PAID' AND Date_paid BETWEEN '$a' AND '$b'");
		
		while($row2 = mysqli_fetch_array($result2))
			{
				
				
				?>
  <tr>
    <td><?php echo $row2['sname']; ?> <?php echo $row2['firstname']; ?> <?php echo $row2['oname']; ?></td>
    <td><?php echo $row2['gender']; ?></td>
    <td><?php echo $row2['fatherphone']; ?></td>
    <td><?php echo $row2['price']; ?></td>
    <td><?php echo $row2['Date_paid'];?></td><?php  }  ?>
  </tr>
  
  
  <tr>
    <td><strong>Grand Total </strong></td>
    <td><?php
include('../connect.php');
// $cashier = $_SESSION['cashier'];
 $a=$_POST['from'];
                $b=$_POST['to'];
				  $result5 = mysqli_query($conn, "SELECT sum(price) FROM applicants WHERE payment='PAID' AND Date_paid BETWEEN '$a' AND '$b'");
					
					 
					  
					 $row5 = mysqli_fetch_array($result5);
					 
					 
					 $total1=$row5['sum(price)'];
					 		  
					  
					  echo $total1; 
						//$sfdddsdsd=$row5['sum(grandtotal)'];
					  
				  ?></td>
  </tr>
</table>
</div>