
			<?php
    //if (isset($_GET['status'])) 
    $tx_ref = $_GET['tx_ref'];
        $status = $_GET['status'];
		$datecreated = date("Y-m-d");
        if($status == 'successful') {
            
            	include('../connect.php');
				
       
 
			$result3=mysqli_query($conn, "UPDATE stdregistration SET payment ='PAID', payment_method ='Online Payment', Date_paid ='$datecreated' WHERE authocode = '$tx_ref'");			
        	
        	echo "<script>window.location.replace('success.php')</script>";
        }
		
       else { 
       echo "<script>window.location.replace('fail.php')</script>";
        }
       
?>