<?php
include('../connect.php');


 $result =mysqli_query($conn, "update message set Status='Seen' where ID='$mes'");

      ?>