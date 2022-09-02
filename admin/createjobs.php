	<?php 
		include '../inc/config.php'; 
			$msg = "";
			if (isset($_POST['submit'])) {
				$company = mysqli_real_escape_string($connect, $_POST['company']);
				$title = mysqli_real_escape_string($connect, $_POST['title']);
				$location = mysqli_real_escape_string($connect, $_POST['location']);
				$department = mysqli_real_escape_string($connect, $_POST['department']);
				$description = mysqli_real_escape_string($connect, $_POST['description']);
				$time = date('h:i:sa');
				$date = date('d/M/Y');

				$sel = "SELECT * FROM jobs WHERE company = '$company' && title ='$title' && description='$description'";
				$ins = mysqli_query($connect, $sel);
				$count = mysqli_num_rows($ins);
				if ($count > 0) {
					$msg = "<div class='alert-danger text-center p-2 rounded'>Job has already been added</div>";
					
				}else{
				$sql = "INSERT INTO jobs (company, title, location, department, description, time, date) VALUES('$company', '$title', '$location', '$department', '$description', '$time', '$date')";
				$query = mysqli_query($connect, $sql);
				if ($query) {
					$msg = "<div class='alert-success text-center p-2 rounded'>Job Successfully Added</div>";
				}
				}
			}
		
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Jobs</title>
	<?php include 'inc/link.php'; ?>

</head>
<body>
			
			<div class="container-fluid">
				<div class="row">
				<?php
						include 'inc/sidebar.php';
				 ?>
				 <div class="col-md-9 m-auto">
				 	<h3 class="text-center mt-5">Add Jobs</h3>
				 	<?php echo $msg; ?>
				 	<form method="post" enctype="multipart/form-data">
				 		<label class="font-weight-bold">Company Name</label>
				 		<div class="form-group">
				 			<input type="text" name="company" class="form-control" placeholder="Company's Name" required="required">
				 		</div>

				 		<label class="font-weight-bold">Job Title</label>
				 		<div class="form-group">
				 			<input type="text" name="title" class="form-control" placeholder="Job Title" required="required">
				 		</div>

				 		<label class="font-weight-bold">Location</label>
				 		<div class="form-group">
				 			<input type="text" name="location" class="form-control" placeholder="Location" required="required">
				 		</div>

				 		<label class="font-weight-bold">Department</label>
				 		<div class="form-group">
				 			<input type="text" name="department" class="form-control" placeholder="Department e.g Health, Education, etc." required="required">
				 		</div>

				 		<label class="font-weight-bold">Job Description</label>
				 		<div class="form-group">
				 			<textarea name="description" class="form-control" placeholder="Job Description"></textarea>
				 		</div>

				 		<center>
				 			<button type="submit" name="submit" class="btn btn-success btn-lg w-100 mb-5">Submit</button>
				 		</center>

				 	</form>
				 </div>


				</div>
			</div>
</body>
</html>