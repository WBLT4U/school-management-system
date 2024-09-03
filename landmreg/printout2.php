<?php include('include/session.php'); ?>
<?php include('../connect.php');

function formatMoney($number, $fractional=false) {
                if ($fractional) {
                  $number = sprintf('%.2f', $number);
                }
                while (true) {
                  $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                  if ($replaced != $number) {
                    $number = $replaced;
                  } else {
                    break;
                  }
                }
                return $number;
              }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title> WBLT TECH </title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' /><title>WBLT TECH</title>
</head>

<script>
function myFunction()
{
        var printButton = document.getElementById("printpagebutton");
        var back = document.getElementById("back");
        printButton.style.visibility = 'hidden';
        back.style.visibility = 'hidden';
        printButton.style.visibility = 'hidden';
        window.print()
}

</script>
	</head>


	<body >
		<a id="back" href="mpayment2.php">Back</a>
        <br> <br>
        <div id="print">
<a href="" id="printpagebutton" onclick="myFunction()"><B>Print</B></a>
<table width="926" height="214" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="922" valign="top">
      <table width="920" border="1" cellpadding="3" cellspacing="1">
        <tr>
          <td colspan="5" align="center"><h1><img src="../img/landmarklogo.jpg" width="100"></h1>
          <h1><strong>Registration Slip</strong>.</h1></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td><strong>Bio Data</strong></td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <?php 
			include('../connect.php');
			$IDS=$_GET['id'];
			$result2 = mysqli_query($conn, "select * from stdregistration2 where stdid='$IDS'");
			
	$row=mysqli_fetch_array($result2);
	if(!$row){
	$_SESSION['msg'] = "Invalid Login Parameters" ;
	echo "<script> window.location.replace('index.php')</script>";
//header("Location:stdwelcome.php");
	exit() ;
}
	  $id = $row ['stdid'];
	  
  ?>
        <tr>
          <td width="228"><strong>NAME</strong></td>
          <td colspan="2"><strong><?php echo $row['sname']; ?> <?php echo $row['firstname']; ?> <?php echo $row['oname']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
          <td width="208" rowspan="6" valign="top"><div align="center"><img src="../passport/<?php echo $row['passport']; ?>" width="132" height="132" alt="" /></div></td>
        </tr>
        <tr>
          <td><strong>DATE OF BIRTH</strong></td>
          <td colspan="2"><strong><?php echo $row['dateofbirth']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>State</strong></td>
          <td colspan="2"><strong><?php echo $row['state']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>LGA</strong></td>
          <td colspan="2"><strong><?php echo $row['lga']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>NATIONALITY</strong></td>
          <td colspan="2"><strong><?php echo $row['nationality']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>ADDRESS</strong></td>
          <td colspan="2"><strong><?php echo $row['homeaddress']; ?></strong></td>
          <td width="184" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td><strong>Father Phone No.</strong></td>
          <td colspan="2"><strong><?php echo $row['fatherphone']; ?></strong></td>
          <td width="184" align="right" valign="top"><strong>Admission No.:</strong></td>
          <td width="208" valign="top"><strong><?php echo $row['admno']; ?></strong></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr bgcolor="#999999">
          <td><strong>Section/Class Admitted into</strong></td>
          <td colspan="4"></td>
        </tr>
        <tr>
          <td><strong>Class</strong></td>
          <td colspan="4"><strong><?php echo $row['class']; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Session</strong></td>
          <td colspan="4"><strong><?php echo $row['yearofadmission']; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Term</strong></td>
          <td colspan="4"><strong><?php echo $row['term']; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Section</strong></td>
          <td colspan="4"><strong><?php echo $row['section']; ?></strong></td>
        </tr>
                <tr bgcolor="#999999">
          <td><strong>Payment Details</strong></td>
          <td colspan="4"></td>
          </tr>
          <tr>
          <td><strong>Paid Price</strong></td>
          <td colspan="4"><strong><?php echo $row['fpart']; ?><?php echo $row['fpayment']; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Balance</strong></td>
          <td colspan="4"><strong><?php $plus = $row['price'];
		  $pluses = $row['fpart'];
		  $remaining = $plus - $pluses ;
		  
		  echo $remaining; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Payment Status</strong></td>
          <td colspan="4"><strong><?php echo $row['payment']; ?></strong></td>
        </tr>
        <tr>
          <td><strong>Payment Method</strong></td>
          <td colspan="4"><strong><?php echo $row['payment_method']; ?></strong></td>
        </tr>

        <tr>
          <td><strong>Date Paid</strong></td>
          <td colspan="4"><strong><?php echo $row['Date_paid']; ?></strong></td>
        </tr>
        <tr bgcolor="#999999">
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
      </table>
    <p>
      <input type="submit" name="button" id="button" value="Print" onclick="window.print() " />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="mpayment2.php"><input type="submit" name="button2" id="button2" value="Back" /></a>
    </p></td>
  </tr>
</table>
</body>
</html>

