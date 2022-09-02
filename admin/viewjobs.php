	<?php 
			include 'inc/session.php';

			$msg = "";

			if (isset($_GET['job'])) {
				 					$id = (int)$_GET['job'];

				 					$sql = "SELECT * FROM jobs WHERE id = '{$id}'";
				 					$query = mysqli_query($connect, $sql);
				 					while ($row = mysqli_fetch_array($query)) {
				 						
			if (isset($_POST['submit'])) {
				$company = mysqli_real_escape_string($connect, $_POST['company']);
				$title = mysqli_real_escape_string($connect, $_POST['title']);
				$location = mysqli_real_escape_string($connect, $_POST['location']);
				$department = mysqli_real_escape_string($connect, $_POST['department']);
				$description = mysqli_real_escape_string($connect, $_POST['description']);
				$time = date('h:i:sa');
				$date = date('d/M/Y');

				$sel = "UPDATE jobs SET company = '$company', title ='$title', description='$description', location ='$location', department = '$department' WHERE id = '$id'";
				$ins = mysqli_query($connect, $sel);
				
				if ($ins) {
					header("location:managejobs.php");
					$msg = "<div class='alert-success text-center p-2 rounded'>Job Successfully Updated</div>";
					
				}}
			 ?>

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
				 	<div class="col-md-9 m-auto p-2">

				 		<h3 class="text-center">View & Edit Jobs</h3>
				 		<?php

				 				echo $msg;
				 				
				 					
				 				
				 		?>
						<p>
				 		<b>Posted on: </b><?php echo $row['date']; ?> |  <?php echo $row['time']; ?>
				 	    </p>
				 		<form method="post" enctype="multipart/form-data">
				 		<label class="font-weight-bold">Company Name</label>
				 		<div class="form-group">
				 			<input type="text" name="company" class="form-control" placeholder="Company's Name" required="required" value="<?php echo $row['company']; ?>">
				 		</div>

				 		<label class="font-weight-bold">Job Title</label>
				 		<div class="form-group">
				 			<input type="text" name="title" class="form-control" placeholder="Job Title" required="required" value="<?php echo $row['title']; ?>">
				 		</div>

				 		<label class="font-weight-bold">Location</label>
				 		<div class="form-group">
				 			<input type="text" name="location" class="form-control" placeholder="Location" required="required" value="<?php echo $row['location']; ?>">
				 		</div>

				 		<label class="font-weight-bold">Department</label>
				 		<div class="form-group">
				 			<input type="text" name="department" class="form-control" placeholder="Department e.g Health, Education, etc." required="required" value="<?php echo $row['department']; ?>">
				 		</div>

				 		<label class="font-weight-bold">Job Description</label>
				 		<div class="form-group">
				 			<textarea name="description" class="form-control" rows="10" placeholder="Job Description"><?php echo $row['description']; ?></textarea>
				 		</div>

				 		<center>
				 			<button type="submit" name="submit" class="btn btn-success btn-lg w-100 mb-5">Submit</button>
				 		</center>

				 	</form>
				 	</div>

				 		<?php }} ?>
				</div>
			</div>
</body>
</html>

<?php 
			
		

 ?>