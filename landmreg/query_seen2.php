<?php
include('../connect.php');


 $result =mysqli_query($conn, "update message2 set Status='Seen' where ID='$mes'");

      ?>