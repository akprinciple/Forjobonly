<?php
		include ('inc/config.php');


		if (!empty($_POST['select'])) {
			$sql = "SELECT * FROM jobs WHERE ministry_id = '" . $_POST["select"] . "'";
			$query = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($query)) {
		

?>

				<option id="option" value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
	


<?php }} ?>