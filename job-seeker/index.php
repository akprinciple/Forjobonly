<?php 
	include 'inc/session.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Seeker Profile | Forjobonly</title>
 	<?php include 'inc/link.php'; ?>
</head>
<body>
	<?php include 'inc/header.php'; ?>
	<?php include 'inc/search.php'; ?>
	<div style="background-color: #f8f8f8;" class="mb-3">
 		<div class="col-md-11 m-auto pt-4">
 			<div class="gradient p-3 mt-4 text-light text-center">
 				<i class="fas fa-user fa-3x text-primary bg-white round p-3"></i>
 				<h3 class="mt-3">
 					<?php echo $row['firstname']." ".$row['lastname']; ?>
 				</h3>
 				<span>Experience: <?php echo $row['experience']; ?></span>
 				<div>Availability: <?php echo $row['availability']; ?></div>
 				<div>State: <?php echo $row['state']; ?></div>
 			</div>
 			<div class="row">
 				<div class="col-md-9">
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Employment & Availability</h4>
 							<p>
 							Keeping this section up to date will help employers & recruiters find you. They will know the field you are in, what your preferred industries are, and if you are actively looking.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Update</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>

 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>About Me</h4>
 							<p>
 							Give a short overview of your career history and skills.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>

 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Work Experience</h4>
 							<p>
 							Add your Work Experience. Such as an internship, part-time work or long term specialised experience.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Education</h4>
 							<p>
 							List your qualifications here.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Job Skills</h4>
 							<p>
 								What are your areas of expertise?
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<input type="text" name="" class="form-control" placeholder="Skills">
 							</div>
 						</div>
 						<div class="p-3">
 							<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Associations</h4>
 							<p>
 							Part of a professional association or organization? Add them to help enrich your professional profile.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Certificates & Awards</h4>
 							<p>
 							Received any certificates or awards? Show them off to help enrich your career profile.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Language Skills</h4>
 							<p>
 							Speak more than one language fluently? Let potential employers know.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Cover Letter</h4>
 							<p>
 							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Edit</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>CV</h4>
 							<p>
 							You can use your uploaded CV to quickly apply for a job.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 					<div class="bg-white mt-3 shadow">
 						<div class="border-bottom">
 							<div class="p-3">
 							<h4>Projects & Portfolio</h4>
 							<p>
 							Add links to your online projects and portfolios or sites such as LinkedIn.
 							</p>
 							</div>
 						</div>
 						<div class="border-bottom">
 							<div class="p-3">
 								<a href="" class="float-right font-weight-bold">Add</a>
 								<div class="clearfix"></div>
 							</div>
 						</div>
 					</div>
 				</div>
 					
			<?php include 'inc/sidebar.php'; ?>
 				
 			</div>
 		</div>
 	</div>
 	<?php include '../inc/footer.php' ?>
 	
</body>
</html>
<?php include 'inc/footlink.php'; ?>
