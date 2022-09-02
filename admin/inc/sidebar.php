							
<?php 
		#include 'search.php';
 ?>	
  <script type="text/javascript">
          function find(val) {
               $.ajax({
                  type: "GET",
                  url: "search.php",
                  data: 'see='+val,
                  success: function (data) {
                        $('#search').html(data);
                  }
               })
          }
         
    </script>
    			<?php #include 'search.php'; ?>
							<div class="left_side bg-dark h-100 p-0" style="overflow-y: auto;">




								<div class="nav-link p-3 text-center">
									<img src="../images/avatar5.png" class="w-50 round" style="border-radius: 50%"><br>
									<b class="text-light">Administrator</b>
									
								</div>
								<div class="nav-link text-light border-bottom">
									<h5>DASHBOARD</h5>
								</div>

								<div class="nav-link text-light border-bottom">
									<h3>DASHBOARD</h3>
								</div>
								<a  href="index.php"  class="nav-link border-bottom text-light" title="Dashboard">
									<b class="fas fa-box text-light mr-3"></b>DASHBOARD
								</a>
								<div class="nav-link border-bottom text-light font-weight-bold">
								Navigation
									<b class="fas fa-caret-down text-light float-right"></b>

							</div>
							<!------------------------------Jobs  ------------------------------->
							<a href="javascript:void(0)" class="nav-link border-bottom text-light posts" title="Jobs">
									<b class="fas fa-city mr-3"></b>
										Jobs
									<b class="fas fa-caret-down text-light float-right"></b>
								</a>
								<div  class="post"  style="display: none;">
						<!------------------------------Create Jobs  ------------------------------->

								<a href="createjobs.php" class="nav-link border-bottom text-light" title="Add Jobs">
									<b class="mr-3"></b>
										Create Jobs
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>

						<!------------------------------Manage Jobs  ------------------------------->

								<a href="managejobs.php" class="nav-link border-bottom text-light" title="Manage Jobs">
									<b class="mr-3"></b>
										Manage Jobs
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>
								</div>
							<!------------------------------Members  ------------------------------->
							<li class="nav-link border-bottom text-light" id="category">
								<b class="fas fa-pen-nib mr-3"></b>
							Members
							<b class="fas fa-caret-down float-right"></b>
						</li>
						<div style="display: none;" class="cat">
							<a href="Customers.php" class="nav-link border-bottom text-light" title="Members">
								
								Customers
								<b class="fas fa-caret-right float-right"></b>
								
							</a>
							<a href="employers.php" class="nav-link border-bottom text-light" title="Manage Categories">
								
								Employers
								<b class="fas fa-caret-right float-right"></b>
								
							</a>
						</div>

							
<!------------------------------Job Details Functions  ------------------------------->

								<a href="members.php" class="nav-link border-bottom text-light" title="View Members">
									<b class="fas fa-users mr-3"></b>
										View Members
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>
<!------------------------------Job Details Functions ------------------------------->
							
								<a href="javascript:void(0);" class="nav-link comment  border-bottom text-light" title="Job Inputs">
									<b class="fas fa-plus mr-3"></b>
										Job Inputs
									<b class="fas fa-caret-down text-light float-right"></b>
								</a>
								<ul class="comments m-0 p-0" style="display: none;">
									<a href="Job_functions.php" class=" border-bottom text-light nav-link">
									
										Job Functions
									<b class="fas fa-caret-right text-light float-right"></b>
										 </a>
										
									<a href="unapprovedcomments.php" class=" border-bottom text-light nav-link">
									
										Approved Comments
									<b class="fas fa-caret-right text-light float-right"></b>
										 </a>
									
								</ul>
							<!------------------------------ page section  ------------------------------->

							<a href="javascript:void(0)" class="nav-link border-bottom text-light page">
								<b class="fas fa-pager mr-3"></b>
								Pages
								<b class="fas fa-caret-down float-right"></b>
							</a>
							<div class="pages" style="display: none;">
							<a href="contactus.php" class="nav-link border-bottom text-light page">
								<b class="mr-3"></b>
								Pages
								<b class="fas fa-caret-right float-right"></b>
							</a>
							<a href="aboutus.php" class="nav-link border-bottom text-light page">
								<b class="mr-3"></b>
								Pages
								<b class="fas fa-caret-right float-right"></b>
							</a>
						</div>
							<!------------------------------ Maths section  ------------------------------->
							
								<a href="maths.php" class="nav-link border-bottom text-light" title="View Mathematics Questions">
									<b class="fas fa-ellipsis-h mr-3"></b>
										Mathematics
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>
								<a href="visitors.php" class="nav-link border-bottom text-light" title="visitors">
									<b class="fas fa-cogs mr-3"></b>
										Visitors
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>
								<a href="logout.php" class="nav-link border-bottom text-light" title="Logout">
									<b class="fas fa-question mr-3"></b>
										Logout
									<b class="fas fa-caret-right text-light float-right"></b>
								</a>

							</div>


					<div class="col-md-10 p-0">
						<div class="p-3 bg-white">
							<form method="post" enctype="multipart/form-data">
							<input type="text"  onkeyup="find(this.value);" placeholder="Search for ..." class="p-2  rounded-top rounded-left border-0 bg-light m-0 search">
							<button class="rounded-right rounded-bottom p-2 bg-primary border-0 fas">&#xf002;</button>
							
							<div class="col-md-2 border-left float-right">
								<b class="fas fa-envelope ml-2" style="color: #e1e1e1"></b>
								<b class="fas fa-bell ml-2" style="color: #e1e1e1"></b>
							</div>
						</form>
						</div>
							<div class="">
						 <div id="search"></div>
						</div>

						