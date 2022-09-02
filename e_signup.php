<?php
				include 'inc/config.php'; 
				$msg= $email = $firstname = $lastname= $number = $company = $website = $phone = $address = $password = "";
				if (isset($_POST['submit'])) {
				$email = mysqli_real_escape_string($connect, $_POST['email']);
				$firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
				$lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
				$password = mysqli_real_escape_string($connect, $_POST['password']);
				$number = mysqli_real_escape_string($connect, $_POST['number']);
				$company = mysqli_real_escape_string($connect, $_POST['company']);
				$industry = mysqli_real_escape_string($connect, $_POST['industry']);
				$employees = mysqli_real_escape_string($connect, $_POST['employees']);
				$type = mysqli_real_escape_string($connect, $_POST['type']);
				$website = mysqli_real_escape_string($connect, $_POST['website']);
				$phone = mysqli_real_escape_string($connect, $_POST['phone']);
				$nationality = mysqli_real_escape_string($connect, $_POST['nationality']);
				$address = mysqli_real_escape_string($connect, $_POST['address']);
				$date = date('h:i:sa d/M/Y');


					$sel = "SELECT * FROM users WHERE email = '{$email}'";
					$ins = mysqli_query($connect, $sel);
					$count = mysqli_num_rows($ins);

					$selt = "SELECT * FROM users WHERE company = '{$company}'";
					$inst = mysqli_query($connect, $selt);
					$counts = mysqli_num_rows($inst);

				if ($industry == "Select" || $employees == "Select" || $type == "Select" || $nationality == "Select") {
							$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>Change the 'SELECT' input</div>"; 
				}
				elseif ($count > 0) {
							$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>Email is already Existing</div>";
				}
				elseif ($counts > 0) {
							$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>Company's name is already Existing</div>";
				}	
				 else {
					$sql = "INSERT INTO users (firstname, lastname, email, number, nationality, company, industry, employees, type, website, phone, address, status, date) VALUES ('$firstname', '$lastname', '$email', '$number', '$nationality', '$company', '$industry', '$employees', '$type', '$website', '$phone', '$address', 1, '$date')";
					$query = mysqli_query($connect, $sql);
					if ($query) {
						$msg = "<div class='alert-success p-2 font-weight-bold rounded mb-3 text-center'>Your Registration is successful. <a href='login.php'>Log In Now</a></div>";
					}
					else{
						$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>Error</div>";
					}
				}
			}
				


?>



<!DOCTYPE html>
<html>
<head>
	<title>Employer's Signup | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>
								<?php include 'inc/header.php'; ?>
								<h3 class="pt-5 text-center mb-0 font-weight-bold">
								Create an Employer Account
							</h3>
						<div class="text-center">
						Reach top talent and find the right candidate today
					</div>

					<form method="post" enctype="multipart/form-data" class="pb-5">
							<div class="col-md-7 m-auto bg-white p-0 shadow-me pb-5">
								<div class="gradient p-2 rand text-light mt-5">
									<h4> Personal Information</h4>
								</div>

								<div class="col-md-9 m-auto">

										<div class="mt-3"><?php echo $msg; ?></div>

										<label class="font-weight-bold mt-3">Email Address</label>
										<div class="form-group">
											<input type="email" minlength="2" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">
										</div>


										<label class="font-weight-bold mt-3">Firstname</label>
										<div class="form-group">
											<input type="text" minlength="2" name="firstname" class="form-control" placeholder="Enter Your Firstname" value="<?php echo $firstname; ?>">
										</div>

										<label class="font-weight-bold mt-3">Lastname</label>
										<div class="form-group">
											<input type="text" minlength="2" name="lastname" class="form-control" placeholder="Enter Your Lastname" value="<?php echo $lastname; ?>">
										</div>

											<label class="font-weight-bold mt-3">Password</label>
										<div class="form-group">
											<input type="password" minlength="6" name="password" class="form-control" placeholder="6 characters or more" value="<?php echo $password; ?>">
										</div>

										<label class="font-weight-bold mt-3">Mobile Number</label>
										<div class="form-group">
											<input type="number" minlength="6" name="number" class="form-control" placeholder="+234 80* *** ****" value="<?php echo $number; ?>">
										</div>

										

										

								</div>

							</div>
									<div class="col-md-7 m-auto shadow-me pb-5 pl-0 pr-0 bg-white">
										<div class="mt-5 gradient text-light p-2">
											<h4 class="">Company's Information</h4>
										</div>
								<div class="col-md-9 m-auto">

										<label class="font-weight-bold mt-3">Company's Name</label>
										<div class="form-group">
											<input type="text" required="required" name="company" class="form-control" placeholder="Input Company's Name" value="<?php echo $company; ?>">
										</div>


										<label class="font-weight-bold mt-3">Industry</label>
										<div class="form-group">
											<select name="industry" class="form-control">
												<option>Select</option>
												<option>Advertising Media and Communication</option>
												<option>Agriculture, Fishing and Forestry</option>
												<option>Automotive and Aviation</option>
												<option>Banking, Finance and Insurance</option>
												<option>Construction</option>
												<option>Education</option>
												<option>Energy and Utilities</option>
												<option>Enforcement and Securities</option>
												<option>Entertainment, Events and Sports</option>
												<option>Government</option>
												<option>Healthcare</option>
												<option>Hospitalities & Hotel</option>
												<option>IT & Telecoms</option>
												<option>Not Listed</option>
											</select>
										</div>


										<label class="font-weight-bold mt-3">Number of Employees</label>
										<div class="form-group">
											<select name="employees" class="form-control">
												<option>Select</option>
												<option>1-4</option>
												<option>5-10</option>
												<option>10-50</option>
												<option>50-100</option>
												<option>100-500</option>
												<option>500 and above</option>
												
											</select>
										</div>


										<label class="font-weight-bold mt-3">Type of Employer</label>
										<div class="form-group">
											<select name="type" class="form-control">
												<option>Select</option>
												<option>Recruitment Agency</option>
												<option>Direct Employer</option>
												
											</select>
										</div>

										<label class="font-weight-bold mt-3">Website</label>
										<div class="form-group">
											<input type="text" required="required" name="website" class="form-control" placeholder="https://" value="<?php echo $website; ?>">
										</div>
												

										<label class="font-weight-bold mt-3">Phone Number</label>
										<div class="form-group">
											<input type="number" required="required" name="phone" minlength="6" class="form-control" placeholder="+234 ****" value="<?php echo $phone; ?>">
										</div>
										
										<label class="font-weight-bold mt-3">Nationality</label>
										<div class="form-group">
											<select name="nationality" class="form-control">
												<option>Select</option>
												<option>Nigeria</option>
												<option>Ghana</option>
												<option>Togo</option>
												<option>Sierria Leone</option>
												<option>Senegal</option>
												<option>South Africa</option>
												<option>Uganda</option>
												<option>Not Listed</option>
											</select>
										</div>

										<label class="font-weight-bold mt-3">Address</label>
										<div class="form-group">
											<textarea required="required" name="address" minlength="16" class="form-control" placeholder="Input Your Address" value="<?php echo $address; ?>"><?php echo $address; ?></textarea>
										</div>

										<button type="submit" name="submit" class="btn btn-primary w-100">Create Your Account</button>
										<p class="text-center"> Already have an account?
										 <a href="login.php"> LOG IN</a>
										 </p>

									</div>
									</div>
                            	 <?php include 'inc/footer.php'; ?>
									


</body>
</html>