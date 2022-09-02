<?php 
		include 'inc/session.php'; 
		
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User's Details | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php
				include 'inc/sidebar.php';

				if (isset($_GET['user'])) {
					$user = (int)$_GET['user'];

					$sql = "SELECT * FROM users WHERE id  = '{$user}'";
					$query = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_array($query)) {
						
					
			?>
			<h3 class="text-center font-weight-bold">User's Details</h3>
		<div class="col-md-9 m-auto row p-3">
				<div class="col-md-6 border-right">
				<b>Email :</b>
				<div class="mb-2">
					<?php echo $row['email']; ?>
				</div>

				<b>Date of Birth :</b>
				<div class="mb-2">
					<?php echo $row['dob']; ?>
				</div>

				<b>Password :</b>
				<div class="mb-2">
					<?php echo $row['password']; ?>
				</div>

				<b>State :</b>
				<div class="mb-2">
					<?php echo $row['state']; ?>
				</div>

				<b>Qualification :</b>
				<div class="mb-2">
					<?php echo $row['qualification']; ?>
				</div>

				<b>Availabilty :</b>
				<div class="mb-2">
					<?php echo $row['availability']; ?>
				</div>
				</div>

				<div class="col-md-6">
					<b>Name :</b>
				<div class="mb-2">
					<?php echo $row['firstname']. " " .$row['lastname']; ?>
				</div>

				<b>Phone Number :</b>
				<div class="mb-2">
					<?php echo $row['number']; ?>
				</div>

				<b>Gender :</b>
				<div class="mb-2">
					<?php echo $row['gender']; ?>
				</div>
				<b>Nationality :</b>
				<div class="mb-2">
					<?php echo $row['nationality']; ?>
				</div>
				<b>Previous Job Function :</b>
				<div class="mb-2">
					<?php echo $row['function']; ?>
				</div>

				<b>Years of experience :</b>
				<div class="mb-2">
					<?php echo $row['experience']; ?>
				</div>
				</div>
				<?php if (!empty($row['cv'])) {
					
				 ?>
		<a href="../uploads/<?php echo $row['cv']; ?>" class="w-50 border pl-2">
		
			<b class=" w-50 pl-2 text-left">
					Curriculum Vitae :
			</b>
			
				
				<span class="float-right pr-2">
				<?php echo $row['cv']; ?> <i class="fas fa-arrow-down"></i>
				</span>
		</a>
		<?php } ?>		
			
				
		
		</div>

			 <?php 
					}} 

			?>



			<?php
				

				if (isset($_GET['company'])) {
					$user = (int)$_GET['company'];

					$sql = "SELECT * FROM users WHERE id  = '{$user}'";
					$query = mysqli_query($connect, $sql);
					while ($row = mysqli_fetch_array($query)) {
						
					
			?>
			<h3 class="text-center font-weight-bold">Company's Details</h3>
		<div class="col-md-7 m-auto row p-3">
				<div class="col-md-6 border-right">
				

				<b>Company's Name:</b>
				<div class="mb-2">
					<?php echo $row['company']; ?>
				</div>

				<b>Email :</b>
				<div class="mb-2">
					<?php echo $row['email']; ?>
				</div>
				<b>Password :</b>
				<div class="mb-2">
					<?php echo $row['password']; ?>
				</div>

				<b>Industry :</b>
				<div class="mb-2">
					<?php echo $row['industry']; ?>
				</div>

				<b>Number of Employees :</b>
				<div class="mb-2">
					<?php echo $row['employees']; ?>
				</div>

				<b>Website :</b>
				<div class="mb-2">
					<a href="../../<?php echo $row['website']; ?>">	
					<?php echo $row['website']; ?>
						
					</a>
				</div>
				</div>

				<div class="col-md-6">
					<b>Name :</b>
				<div class="mb-2">
					<?php echo $row['firstname']. " " .$row['lastname']; ?>
				</div>

				<b>Phone Number :</b>
				<div class="mb-2">
					<?php echo $row['number']; ?>
				</div>

				<b>Company's type :</b>
				<div class="mb-2">
					<?php echo $row['type']; ?>
				</div>
				<b>Nationality :</b>
				<div class="mb-2">
					<?php echo $row['nationality']; ?>
				</div>
				<b>Company's Phone Number :</b>
				<div class="mb-2">
					<?php echo $row['phone']; ?>
				</div>

				<b>Address :</b>
				<div class="mb-2">
					<?php echo $row['address']; ?>
				</div>
				</div>
		
			
				
		
		</div>

			 <?php 
					}} 

			?>

</body>
</html>