<?php
 			include 'inc/session.php';

 			if ($_GET['del']) {
 				$del = (int)$_GET['del'];

 				$sql = "DELETE FROM users WHERE id = '{$del}'";
 				$query = mysqli_query($connect, $sql);
 				if ($query) {
 					header("location: employers.php");
 				}
 			}
?>