<?php
		include 'inc/config.php';
		 session_start();

		$msg = $email = $password = "";

		if (isset($_POST['submit'])) {
			$email = mysqli_real_escape_string($connect, $_POST['email']);
			$password = mysqli_real_escape_string($connect, $_POST['password']);

			$sql = "SELECT * FROM users WHERE email = '{$email}' && password = '{$password}'";
			$query = mysqli_query($connect, $sql);
			$count = mysqli_num_rows($query);
			$row = mysqli_fetch_array($query, MYSQLI_ASSOC);

				if ($count > 0) {
					$_SESSION['id'] = $row['id'];
				header('location:index.php');
					header('location: index.php');
				}
				else{
					$msg = "<div class='alert-danger text-center p-2 rounded'>Incorrect Email or Password</div>";
				}
		}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
								<?php include 'inc/header.php'; ?>

								<div style="background-image: url('images/floriane.jpg'); background-size: contain; background-origin: content-box;">
									<div class="col-md-6 bg-white p-3">
										<div class="mt-5">
											<h2 class="text-center font-weight-bold">Log in and Get productive</h2>

											<div class="text-center mt-5">Use Your Social account to log in as a seeker.</div>
											<div class="col-md-6 m-auto text-center ">

											<i class="w-25 ml-3 p-2 fab fa-facebook border fa-2x text-primary"></i>
											<i class="w-25 ml-3 p-2 fab fa-google border fa-2x text-info"></i>
											<i class="w-25 ml-3 p-2 fab fa-linkedin border fa-2x text-info"></i>
										</div>
										<p class="text-center">
											__________________Or Continue with_______________
										</p>

									<form method="post" enctype="multipart/form-data" class="col-md-8 pl-5 pr-5 pt-2 m-auto">
												<?php echo $msg; ?>
										<label class="font-weight-bold">Email</label>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
										</div>

										<label class="font-weight-bold">Password</label>
										<div class="form-group">
											<input type="password" minlength="6" name="password" class="form-control" placeholder="Enter Your Password">
										</div>

										<input type="checkbox" name="check">
										<span>Keep me Logged in</span> 
										<a href="" class="float-right">Forgot Password?</a>

										<button type="submit" name="submit" class="btn mt-2 w-100 font-weight-bold text-light gradient">LOG IN</button>
									</form>


									</div>
									</div>
								</div>

                            	 <?php include 'inc/footer.php'; ?>
								

</body>
</html>