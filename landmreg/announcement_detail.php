<?php include('include/session.php'); ?>
<?php include('../../../connect.php');?>
<?php  include 'include/header.php'; 

?>
<?php 
include('../../../announce2.php');
include('../../../function.php');
        $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
        $limit = 2;
        $startpoint = ($page * $limit) - $limit;
        
        //to make pagination
        $statement = "`tb_announcement`";
        
        
?>
			<!-- End Navbar -->
		<!-- Sidebar -->
		<?php  include 'include/nav.php'; ?>
        <?php echo include 'include/footer.php'; ?>
				<!-- End Sidebar -->
		<link href="../../../assets/css/bootstrap.css" rel="stylesheet"/>

	<link href="../../../assets/css/docs.css" rel="stylesheet"/>
	 
    <link href="../../../assets/style.css" rel="stylesheet"/>
	<link href="../../../assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>	
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
								<h5 class="text-white op-7 mb-2"><a href="#"><?php $query = mysqli_query($conn, "select * from tb_user where userID='$ses_id'");
                $row = mysqli_fetch_array($query);
                $id = $row['userID']; ?> <b>Welcome!  </b> <?php echo $row['username'];?> <span class="badge badge-info"> <?Php include('announce.php');?></span></a> </h5>
							</div>
							
						</div>
						</div>
						</div>
						<!----- surplus data balance ------>
						<br>
                        <br>
                        <br>
                        <br>
						 <div class="well">

 <?php
      $id=$_GET['id'];
                $query =mysqli_query($conn, "select * from tb_announcement {$statement} where announcementID='$id' LIMIT {$startpoint} , {$limit}");
             $row = mysqli_fetch_array($query);
         ?>


        <div class="row">

           
            <div class="col-md-5">
                <form method="post">
                    <input type="hidden" name="image" value="../../../announcement/<?php echo $row['image'];?>"  />
                    <input type="hidden" name="name" value="<?php echo $row['name'];?>" />
                    <input type="image" src="../../../announcement/<?php echo $row['image'];?>" name="image"  class="img-responsive"/>
                </form>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html"><?php echo $row['name'];?></a>
                </h3>
                <p>Date: <?php echo date("F j, Y - h:i A ", strtotime($row['date'])) ?></p>
                <p>
                       <?php echo $string=$row['detail'];
                    ?>
                </p>
                <a class="btn btn-primary" href="index.php">BACK <i class="fa fa-angle-right"></i></a>
            </div>

        </div>
        <br/><br/>
          

            <div class="col-lg-12">
                <ul class="pagination">
                     <?php
    echo pagination($statement,$limit,$page);
?>      
                </ul>
            </div>
</div>
        </div><!--/span-->
      </div><!--/row-->
<?php
	if(isset($_POST['image'])){
	   $image=$_POST['image'];
       $name= $_POST['name'];
?>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <div class="well">
<img src="<?php echo $image;?>" width="525"/>
</div>
<div class="col-sm-10">
</div>
        </div>
        <center><font size="4"><strong><?php echo $name; ?></strong></font></center>
        <div class="modal-footer">
        <form method="post">
        
          <input type="submit" name="" class="btn btn-danger"  value="Close">
        </div>
      </div>
    </div>
  </div>
  </form>
      <script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
<?php
	}
?>


      <hr>

     

    </div>
				
	
</body>

</html>