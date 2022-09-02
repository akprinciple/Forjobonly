	<?php include 'inc/session.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include 'inc/link.php'; ?>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
		<?php
			include 'inc/sidebar.php';
		?>
			<div class="p-3">
				<div class="row"> 
				<div class="col-md-3">
					<a href="customers.php" class="text-light">
						<div class="p-3 text-center text-light gradient rounded">
							<h4 class="">
							<?php 
							$sql = "SELECT * FROM users WHERE status = 0";
							$query = mysqli_query($connect, $sql);
							$count = mysqli_num_rows($query);
							echo $count;
						 ?>
						 	</h4>
						<i>Job Seekers</i>
						</div>
					</a>
				</div>
			
				<div class="col-md-3">
					<a href="employers.php" class="text-light">
						<div class="p-3 text-center text-light gradient rounded">
							<h4 class="">
							<?php 
							$sql = "SELECT * FROM users WHERE status = 1";
							$query = mysqli_query($connect, $sql);
							$count = mysqli_num_rows($query);
							echo $count;
						 ?>
						 	</h4>
						 	<i>Employer(s)</i>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="customers.php" class="text-light">
						<div class="p-3 text-center text-light gradient rounded">
							<h4 class="">
							<?php 
							$sql = "SELECT * FROM users WHERE status = 2";
							$query = mysqli_query($connect, $sql);
							$count = mysqli_num_rows($query);
							echo $count;
						 ?>
						 	</h4>
						 	<i>Administrator(s)</i>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="managejobs.php" class="text-light">
						<div class="p-3 text-center text-light gradient rounded">
							<h4 class="">
							<?php 
							$sql = "SELECT * FROM jobs";
							$query = mysqli_query($connect, $sql);
							$count = mysqli_num_rows($query);
							echo $count;
						 ?>
						 	</h4>
						 	<i>Job(s)</i>
						</div>
					</a>
				</div>
			</div>
			</div>
		</div>

				</div>
			</div>
</body>
</html>