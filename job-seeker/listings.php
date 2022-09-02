<?php 
	include 'inc/session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Job Listing | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
	<?php include 'inc/header.php'; ?>
	<?php include 'inc/search.php'; ?>
	<?php 
		if (isset($_GET['list'])) {
			$id = (int)$_GET['list'];

			$sql = "SELECT * FROM jobs WHERE id = '{$id}'";
			$query = mysqli_query($connect, $sql);
			$count = mysqli_num_rows($query);
			while ($rw = mysqli_fetch_array($query)) {
	?>
	<div>
		<?php if ($count = 0) {
			echo "Amateur";
		} ?>
		<?php echo $rw['title']; ?>
	</div>

	<?php
		}}
	 ?>
	<?php include "../inc/footer.php"; ?>

</body>
</html>
<?php include "inc/footlink.php"; ?>
