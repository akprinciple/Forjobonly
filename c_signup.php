	<?php 

			include 'inc/config.php'; 
			$msg= "";
			if (isset($_POST['submit'])) {
				$firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
				$lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
				$email = mysqli_real_escape_string($connect, $_POST['email']);
				$password = mysqli_real_escape_string($connect, $_POST['password']);
				$dob = mysqli_real_escape_string($connect, $_POST['dob']);
				$number = mysqli_real_escape_string($connect, $_POST['number']);
				$gender = mysqli_real_escape_string($connect, $_POST['gender']);
				$state = mysqli_real_escape_string($connect, $_POST['state']);
				$nationality = mysqli_real_escape_string($connect, $_POST['nationality']);
				$qualification = mysqli_real_escape_string($connect, $_POST['qualification']);
				$function = mysqli_real_escape_string($connect, $_POST['function']);
				$experience = mysqli_real_escape_string($connect, $_POST['experience']);
				$availability = mysqli_real_escape_string($connect, $_POST['availability']);
				$date = date('h:i:sa d/M/Y');
				$cv = $_FILES['file']['name'];
				$tmp = $_FILES['file']['tmp_name'];
				 $type = pathinfo("upload/$cv", PATHINFO_EXTENSION);


				 	$sel = "SELECT * FROM users WHERE email = '$email'";
				$ins = mysqli_query($connect, $sel);
				$count = mysqli_num_rows($ins);
				if ($count > 0) {
					$msg = "<div class='alert-danger text-center p-2 rounded'>Email is existing</div>";
					
				}
				 elseif ($type != "pdf" && $type != "docx" && $type != "doc" && $type != "") {
				 	$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>File type must be pdf, docx or doc</div>";
				 	
				 }
				 elseif ($_FILES["file"]["size"] > 1000000) {
				 	$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>File size is larger than 1mb</div>";
				 }
				 elseif ($availability == "Select" || $experience == "Select" || $function == "Select" || $qualification == "Select" || $nationality == "Select" || $state == "Select" || $gender == "Select") {
				 		$msg = "<div class='alert-danger p-2 font-weight-bold rounded mb-3 text-center'>Change the 'SELECT' input</div>";
				 }
				 else{
				 	$sql = "INSERT INTO users (firstname, lastname, email, password, dob, number, gender, state, nationality, qualification, function, experience, availability, cv, date) VALUES('$firstname', '$lastname', '$email', '$password', '$dob', '$number', '$gender', '$state', '$nationality', '$qualification', '$function', '$experience', '$availability', '$cv', '$date')";
				 	$query = mysqli_query($connect, $sql);
				 	move_uploaded_file($tmp, "uploads/$cv");

				 	if ($query) {
				 		$msg = "<div class='alert-primary p-2 font-weight-bold rounded mb-3 text-center'>Account successfully Created <a href='login.php'>Login Now</a></div>";
				 	}
				 	else{
				 		$msg = "<div class='alert-primary p-2 font-weight-bold rounded mb-3 text-center'>Error</div>";
				 	}
				 }


			}

			?>


<!DOCTYPE html>
<html>
<head>
	<title>Customer's Signup | Forjobonly</title>
	<?php include 'inc/link.php'; ?>
</head>
<body>		
								<?php include 'inc/header.php'; ?>
							<h3 class="pt-5 text-center mb-0 font-weight-bold">Create a Job Seeker Account</h3>
							<div class="text-center">Your new career is one click away</div>

								<div class="col-md-7 m-auto"><?php echo $msg; ?></div>


									<form method="post" enctype="multipart/form-data" class="pb-5">
							<div class="col-md-7 m-auto bg-white p-0 shadow-me pb-5">
								<div class="bg-primary p-2 rand text-light">
									<h4> Personal Information</h4>
								</div>
								<div class="col-md-9 m-auto">
										<label class="font-weight-bold mt-3">Firstname</label>
										<div class="form-group">
											<input type="text" minlength="2" name="firstname" class="form-control" placeholder="Enter Your Firstname">
										</div>

										<label class="font-weight-bold mt-3">Lastname</label>
										<div class="form-group">
											<input type="text" minlength="2" name="lastname" class="form-control" placeholder="Enter Your Lastname">
										</div>

										<label class="font-weight-bold mt-3">Email</label>
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Enter Your Email">
										</div>

										<label class="font-weight-bold mt-3">Password</label>
										<div class="form-group">
											<input type="password" minlength="6" name="password" class="form-control" placeholder="Enter Your Password">
										</div>

										<label class="font-weight-bold mt-3">Date of Birth</label>
										<div class="form-group">
											<input type="date" name="dob" required="required" class="form-control">
										</div>

										<label class="font-weight-bold mt-3">Mobile Number</label>
										<div class="form-group">
											<input type="text" minlength="6" name="number" class="form-control" placeholder="+234 80* *** ****">
										</div>
										<label class="font-weight-bold mt-3">Gender</label>
										<div class="form-group">
											<select name="gender" class="form-control">
												<option>Select</option>
												<option>Male</option>
												<option>Female</option>
												
											</select>
										</div>
											<label class="font-weight-bold mt-3">State</label>
										<div class="form-group">
											<select name="state" class="form-control">
												<option>Select</option>
												<option>Abia</option>
												<option>Adamawa</option>
												<option>Rivers</option>
												<option>Lagos</option>
												<option>Oyo</option>
												<option>Ogun</option>
												<option>Kwara</option>
												<option>Not Listed</option>
											</select>
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
								</div>
							</div>





								<div class="mt-5">
							<div class="col-md-7 m-auto bg-white p-0 shadow-me pb-5">
								<div class="bg-primary p-2 text-light rand"><h4>Work Information</h4></div>
									<div class="col-md-9 m-auto">
									<label class="font-weight-bold mt-3">Highest Qualification</label>
										<div class="form-group">
											<select name="qualification" class="form-control">
												<option>Select</option>
												<option>Degree</option>
												<option>Diploma</option>
												<option>High School (SSCE)</option>
												<option>HND</option>
												<option>MBA/MSc</option>
												<option>Mphil/PhD</option>
												<option>NCE</option>
												<option>OND</option>
												<option>Vocations</option>
												<option>Not Listed</option>
											</select>
										</div>


										<label class="font-weight-bold mt-3">Current Job Function</label>
										<div class="form-group">
											<select name="function" class="form-control">
												<option>Select</option>
												<option>Accounting, Auditing and Finance</option>
												<option>Admin & Office</option>
												<option>Building & Architecture</option>
												<option>Community & Social Services</option>
												<option>Consulting & Strategy</option>
												<option>Creative & Design</option>
												<option>Customer Service</option>
												<option>Driving & Transport Services</option>
												<option>Education & Teaching</option>
												<option>Engineering & Technology</option>
												<option>Estate Agent & Property Management</option>
												<option>Farming & Agriculture</option>
												<option>Food Services & Catering</option>
												<option>Health & safety</option>
												<option>Hospitality & Leisure</option>
												<option>Human Resources</option>
												<option>Legal Services</option>
												<option>Management & Business Development</option>
												<option>Marketing & Communication</option>
												<option>Medical & Pharmaceutics</option>
												<option>Prouct & Project Management</option>
												<option>Sales</option>
												<option>Not Listed</option>
											</select>
										</div>


											<label class="font-weight-bold mt-3">Years of Experience</label>
										<div class="form-group">
											<select name="experience" class="form-control">
												<option>Select</option>
												<option>0 - 5 Years</option>
												<option>6 - 10 Years</option>
												<option>11 - 15 Years</option>
												<option>16 - 20  Years</option>
												<option>21 years and above </option>
											</select>
										</div>

											<label class="font-weight-bold mt-3">Availability</label>
										<div class="form-group">
											<select name="availability" class="form-control">
												<option>Select</option>
												<option>Immediately</option>
												<option>1 Week</option>
												<option>2 Weeks</option>
												<option>3 Weeks</option>
												<option>1 Month</option>
												<option>2 Months</option>
												<option>More than 3 Months</option>
											</select>
										</div>


											<label class="font-weight-bold mt-3">Curriculum Vitae</label>
										<div class="form-group">
											<input type="file" name="file" class="form-control">
				
										</div>

										<p> 
										Upload a CV no larger than 1MB for file types .pdf .doc .docx <br>
										<br>Please note: You will need to upload a CV to apply for jobs,
										however you can skip the CV upload on sign up.
										</p>

										<p class="text-center mt-2">
											By clicking "Create Your Account", you agree to our TERMS & CONDITIONS and PRIVACY POLICY
										</p>

										 <button type="submit" name="submit" class="btn btn-primary w-100">Create Your Account</button>
										<p class="text-center"> Already have an account?
										 <a href="login.php"> LOG IN</a>
										 </p>

										</div>

										
							</div>
						</div>
								</form>


                            	 <?php include 'inc/footer.php'; ?>

</body>
</html>