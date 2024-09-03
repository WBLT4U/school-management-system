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
                       
				  <li class="nav-item <?php if($das == "2") echo "active"?>">
							<a  href="applicant.php">
                            <i class="fas fa-user"></i>
                            
								<p>Applicant Reg</p>
							
							</a>
							</li>
                            <li class="nav-item <?php if($das==="2") echo "active" ?>">
							<a data-toggle="collapse" href="#user">
								 <i class="fas fa-user"></i>
								<p> Student Reg</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="user">
								<ul class="nav nav-collapse">
									<li>
										<a href="stdreg.php">
											<span class="sub-item">1st Term Student Reg</span>
										</a>
									</li>
									<li>
										<a href="stdreg2.php">
											<span class="sub-item">2nd Term Student Reg</span>
										</a>
									</li>
                                    <li>
										<a href="stdreg3.php">
											<span class="sub-item">3rd Term Student Reg</span>
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