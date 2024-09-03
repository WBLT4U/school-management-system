<?php

include('../connect.php');

        $query = mysqli_query($conn, "select * from tb_announcement where status not like '%seen%' order by announcementID asc");
        $comment_count=mysqli_num_rows($query);
        if($comment_count!=0)
        {
        echo $comment_count;
        }
        else {
        	echo "0" ;
        }
      ?>