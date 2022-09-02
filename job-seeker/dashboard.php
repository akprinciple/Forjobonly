<?php 
	include 'inc/session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
 	<title>Job Seeker Dashboard | Forjobonly</title>
 	<?php include 'inc/link.php'; ?>
</head>
<body>
 	<?php include 'inc/header.php'; ?>
	<?php include 'inc/search.php'; ?>
	<div style="background-color: #f8f8f8;" class="mb-3">
		<div class="col-md-11 m-auto p-3">
			<h5>Hello <?php echo $row['firstname']; ?></h5>
			<p>Welcome to your Dashboard! Checkout the latest Update.</p>

			<div class="row">
				<div class="col-md-9">
					<div class="gradient mt-3 text-light p-2 rounded-top">
						Jobs For You
					</div>
					<div class="bg-white ">
						<?php 
							$sql = "SELECT * FROM jobs WHERE status = 1";
							$query = mysqli_query($connect, $sql);
							while ($rw = mysqli_fetch_array($query)) {
								
							
						 ?>
						 <div class="border-bottom p-3">
						 	<h5>
						 		<a href="listings.php?list=<?php echo $rw['id']	; ?>"><?php echo $rw['title']; ?></a>
						 		<span class="fas fa-heart text-black-50 float-right"></span>
						 	</h5>
						 	<a href=""><?php echo $rw['company']; ?></a>
						 	<div>
						 	<?php echo $rw['location']; ?> | <?php echo $rw['department']; ?>
						 	<span class="float-right text-black-50"><?php echo $rw['date']; ?></span>
						 	</div>
						 	<div></div>
						 </div>
						<?php } ?>
					</div>
					<div class="mt-3 gradient text-light p-2 rounded-top">
						Job Alert
					</div>
					<div class="bg-white p-3 shadow">
						Get notified when new jobs match your needs and quickly view jobs for each alert.
					</div>
					<div class="mt-3 gradient text-light p-2 rounded-top">
						Job Applications
					</div>
					<div class="bg-white p-3">
						Keep a record of the jobs you have applied for and the status of the job application.
					</div>
				</div>
				<?php include 'inc/sidebar.php'; ?>
				
			</div>
		</div>
	</div>
	<?php include "../inc/footer.php"; ?>

</body>
</html>
<?php include "inc/footlink.php"; ?>