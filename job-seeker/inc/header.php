<div class="jumbotron p-0 m-0">

						<div class="slider position-absolute top-0 w-100">
					<div class="col-md-3 border bg-white p-0 text-uppercase">

					
					<div class="mb-3 border-bottom">	

					
					</div>


					<div class="p-4">
				<form method="post" enctype="multipart/form-data">
				<div class="border-default border mt-3 row">
					
					<input type="SEARCH" name="" class="fas p-2 border-0 search" style="width: 80%" placeholder=" Keyword Search">
					<button class="fas text-center p-2 border-left border-right-0 border-top-0 border-bottom-0" type="submit" style="width: 20%; outline: none; background-color: transparent;">&#xf002</button>
					
				</div>
			</form>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Find A job</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Job Seekers</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Employers</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Courses</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Career Centers</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Professional CV services</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Skill Assessment</a></li>
				<li class="nav-link p-2"><a href="" class=" text-secondary">Contact Us</a></li>

				</div>
				<div class="mt-4 border-bottom p-3 border-top">
				<li class="nav-link p-2">

					<?php 
						if(isset($_SESSION['id'])){

							?>
							<a href='logout.php' class='nav-link p-2 font-weight-bold text-danger' >Logout</a>

							<?php
						}else{
							echo "<li class='nav-link'><a href='login.php' class='font-weight-bold'>Log in</a></li><a href='signup.php' class='font-weight-bold nav-link p-2'>Sign Up</a>";
						}

					?></li>
			<!-- 	<li class="nav-link p-2"></li> -->
			</div>
				<li class="nav-link p-5"><a href="" class=" text-secondary">Post a Job</a></li>
				
			

			</div>
			</div>


			<!--------------------------- Header --------------------------------->

			<div class="bg-white fixed-top" >
				<div class="float-left p-2">
					<a  class="nav-link fas fa-bars pointer"></a>

					<a href="index.php" class="logo text-dark" style="font-weight: bold; font-size: 25px; font-style: oblique;">
						For<span class="text-primary">job</span>only
					</a>
				</div>
					<div class="float-right nav p-2">
					

					<?php 
						if(isset($_SESSION['id'])){
							// echo "<a href='logout.php?logout' class='nav-link font-weight-bold'>Logout</a> ";
							?>

							<span class='nav-link dropdown'>
								<span class="dropdown-toggle pointer " data-toggle="dropdown">
								 	Welcome Back!
								</span>
								<div class=" position-absolute dropdown-menu shadow border-0 text-light bg-light mt-3 text-center" style="z-index: 1;">
									<a href="dashboard.php" class="text-light">
										<div class="border-bottom p-2 w-100 bg-dark ">Dashboard
										</div>
										</a>
									<a href="index.php" class="border-bottom">	
										<div class="border-bottom w-100 ">
											<span class="">Account</span>
										</div>
									</a>
									<a href="logout.php" class="text-danger">
										<div class="">
											Logout
										</div>
									</a>
								</div>
							</span>

							<?php
						}else{
							echo "<li class='nav-link'><a href='login.php' class='font-weight-bold'>Log in</a></li>.<a href='signup.php' class='font-weight-bold nav-link p-2'>Sign Up</a>";
						}

					?>
					<!-- <a href="signup.php" class="nav-link font-weight-bold">Sign Up</a> -->
					<button class="btn btn-primary">Post Job</button>
					</div>
				<div class="clearfix"></div>


				</div>
				<div class="marg">
