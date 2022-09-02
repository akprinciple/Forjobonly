<?php 
	include 'inc/session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jobs In Nigeria | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
	<?php include 'inc/header.php'; ?>
	<?php include 'inc/search.php'; ?>
	<span class="pl-4 small">
		<a href="index.php">Home</a> / Search Results
	</span>

	<div class="col-md-11 m-auto row">
		<div class="col-md-9">
			<div class="gradient p-2 mt-4 rounded-top text-light">
				<h5>Jobs In Nigeria</h5>
			</div>
			<div class="shadow p-4 bg-white">
				<h6>
					<?php 
						$sql = "SELECT * FROM jobs WHERE status = 1";
						$query = mysqli_query($connect, $sql);
						$count = mysqli_num_rows($query);
						echo "$count  <span class='text-black-50'>Jobs Found</span>";
					 ?>
				</h6>
			</div>
			<div class="mt-3">
				<div class="gradient p-3 mt-4 rounded-top text-light">
					<h6>Jobs</h6>
				</div>
				<div class="">
						<?php 
							$sql = "SELECT * FROM jobs WHERE status = 1 LIMIT 15";
							$query = mysqli_query($connect, $sql);
							while ($rw = mysqli_fetch_array($query)) {
								
							
						 ?>
						 <div class="mb-3 bg-white mt-3">
						 	<h4 class="pl-3 pr-3 pt-3">
						 		<a href="listings.php?list=<?php echo $rw['id']	; ?>" class="text-dark">
						 			<?php echo $rw['title']; ?>
								</a>
						 	</h4>
						 	<div class="pl-3 pr-3 pb-3 mb-0 border-bottom">
						 	<a href=""><?php echo $rw['company']; ?></a>
						 	<div class="">
						 	<?php echo $rw['location']; ?> | <?php echo $rw['department']; ?>
						 	<div>
						 		<span>Job Function :</span>
						 		<span class="float-right text-black-50"><?php echo $rw['date']; ?></span>
						 	</div>
						 	</div>
						 	
						 	</div>
						 	<div class="p-3 text-justify">
						 		<h6><?php echo $rw['description']; ?></h6>
						 	</div>	
						 </div>
						<?php } ?>
					</div>
				<div>
					
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="gradient p-3 mt-4 rounded-top text-light">
					<h6>Filter Results</h6>
			</div>
			<div class="bg-white p-3">
				<form method="post" enctype="multipart/form-data" class="p-3">
				<div class="border-default border row">
					
					<input type="SEARCH" name="" class="fas p-2 border-0 search" style="width: 80%" placeholder=" Keyword Search">
					<button class="fas text-center p-2 border-left border-right-0 border-top-0 border-bottom-0" type="submit" style="width: 20%; outline: none; background-color: transparent;">&#xf002</button>
					
				</div>
			</form>
				<div class="p-2">
					<div class=""></div>
				</div>
			</div>

		</div>
	</div>

 	<?php include '../inc/footer.php' ?>
</body>
</html>
<?php include 'inc/footlink.php'; ?>
