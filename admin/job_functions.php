<?php 
	include 'inc/session.php'; 
	$msg = $function = "";
	if (isset($_POST['submit'])) {
		$function = mysqli_real_escape_string($connect, $_POST['function']);
		$date = date("d/M/Y");
		$select = "SELECT * FROM functions WHERE function = '{$function}'";
		$return = mysqli_query($connect, $select);
		$count = mysqli_num_rows($return);
		if ($count > 0) {
			$msg = "<div class='alert-danger p-2 col-md-6 m-auto'>Job Function Already Exist</div>";
		}else{
		$sql = "INSERT INTO functions (function, date) VALUES ('$function', '$date')";
		$query = mysqli_query($connect, $sql);
		if ($query) {
			$msg = "<div class='alert-success p-2 col-md-6 m-auto'>Job Function Added Successfully</div>";
		}
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Job Functions | ForJobOnly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
		<div class="container-fluid">
		<div class="row">
		<?php
			include 'inc/sidebar.php';
		?>
	<form enctype="multipart/form-data" method="post">
		<div class="p-3">
			<h4 class="text-center text-underline">Add Job Functions</h4>
			<?php echo $msg; ?>
			<div class="form-group mt-2">
				<center>
				<input type="text" name="function" class="form-width form-control text-center" required="required" value="<?php echo $function; ?>">
				<button type="submit" name="submit" class="btn btn-success w-50 mt-2">Add</button>
				</center>
				
			</div>
			<table class="table table-striped text-center">
				<thead class="table-head">
					<tr>
						<th>S/N</th>
						<th>Job Functions</th>
						<th>Date</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$ins = "SELECT * FROM functions";
						$s_query = mysqli_query($connect, $ins);
						$n = 1;
						while ($rw = mysqli_fetch_array($s_query)) {
							
						
					 ?>
					 <tr>
					 	<td><?php echo $n++; ?></td>
					 	<td><?php echo $rw['function']; ?></td>
					 	<td><?php echo $rw['date'] ?></td>
					 	<td><a href="delete.php?function=<?php echo $rw['id'] ?>" class="fas fa-times text-danger"></a></td>
					 </tr>
					 <?php } ?>
				</tbody>
			</table>			
		</div>
	</form>
</body>
</html>