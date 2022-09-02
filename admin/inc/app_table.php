<?php
		include '../inc/config.php';

		if (!empty($_POST['show'])) {
			$sql = "SELECT * FROM jobs WHERE id = '" . $_POST["show"] . "'";
			$query = mysqli_query($connect, $sql);
			while ($row = mysqli_fetch_array($query)) {
				
			
?>
			<h5><?php echo $row['title']; ?></h5>
			<table class="table table-striped" id="table">
				<thead class="table-head">
					<tr>
						<th>S/N</th>
						<th>Email</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
			</table>


			<?php }} ?>