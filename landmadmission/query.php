<?php

$student = $_SESSION['admin'];
include('../connect.php');

$result2 =mysqli_query($conn, "select * from message where Status not like '%Seen%' order by ID asc");

$num = mysqli_num_rows($result2);
			$row2=mysqli_fetch_array($result2);
		
        if($num!=0)
        {
        echo $num;
        }
        else {
            echo "0" ;
        }
      ?>