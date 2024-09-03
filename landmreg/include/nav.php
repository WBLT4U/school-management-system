	<?php $Nursery1 = "Nursery 1";
	$Nursery2 = "Nursery 2";
	$Nursery3 = "Nursery 3"; ?>
    <!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									
									<span class="user-level"></span>
									
								</span>
							</a>
							</div>
					</div>
					<ul class="nav nav-primary">
					    
						<li class="nav-item <?php if($das==="1") echo "active" ?>">						
						<a href="admin_index.php">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
                         
                        <li class="nav-item <?php if($das==="2") echo "active" ?>">
							<a data-toggle="collapse" href="#service">
								 <i class="fas fa-user"></i>
								<p> Make Payment </p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="service">
								<ul class="nav nav-collapse">
                                <li>
										<a href="applicant.php">
											<span class="sub-item">Applicant Payment</span>
										</a>
									</li>
									<li>
										<a href="mpayment.php">
											<span class="sub-item">1st School Fee Payment</span>
										</a>
									</li>
									<li>
										<a href="mpayment2.php">
											<span class="sub-item">2nd School Fee Payment</span>
										</a>
									</li>
                                    <li>
										<a href="mpayment3.php">
											<span class="sub-item">3rd School Fee Payment</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

<li class="nav-item <?php if($das==="2") echo "active" ?>">
							<a data-toggle="collapse" href="#fans">
								 <i class="fas fa-user"></i>
								<p> Part Payment Tracks</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="fans">
								<ul class="nav nav-collapse">
									<li>
										<a href="fpaymenttrack.php">
											<span class="sub-item">1st Term Payment Tracks</span>
										</a>
									</li>
									<li>
										<a href="spaymenttrack.php">
											<span class="sub-item">2nd Term Payment Tracks</span>
										</a>
									</li>
                                    <li>
										<a href="tpaymenttrack.php">
											<span class="sub-item">3rd Term Payment Tracks</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
                        <li class="nav-item <?php if($das == "4") echo "active"?>">
							<a  href="finreportadmis.php">
							 <i class="fas fa-coins"></i>
								<p>Applicant Financial Reports</p>
								
							</a>
							</li>
                            

<li class="nav-item <?php if($das==="2") echo "active" ?>">
							<a data-toggle="collapse" href="#trans">
								 <i class="fas fa-user"></i>
								<p> School Fee Financial Reports</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="trans">
								<ul class="nav nav-collapse">
									<li>
										<a href="finreport.php">
											<span class="sub-item">1st Term Financial Report</span>
										</a>
									</li>
									<li>
										<a href="finreport2.php">
											<span class="sub-item">2nd Term Financial Report</span>
										</a>
									</li>
                                    <li>
										<a href="finreport3.php">
											<span class="sub-item">3rd Term Financial Report</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>
                  
                          
                            <li class="nav-item <?php if($das == "8") echo "active"?>">
							<a  href="user.php">
							 <i class="fas fa-user"></i>
								<p>Change Password</p>
								
							</a>
							</li>
                             
							<li class="nav-item">
							<a  href="logout.php">
							 <i class="fas fa-sign-out-alt"></i>
								<p>Log Out</p>
								
							</a>
							</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->