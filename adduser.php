<?php

include('pdo-connection.php');
include('dbconfig.php');
$dbServer = $db_server;
$dbUser = $db_user;
$dbPass = $db_pass;
$dbName = $db_name;
$dbcon = $connection_object->connection($db_server,$db_user,$db_pass,$db_name);

if(isset($_POST['registration']))
{
	$userID = $_POST['userid'];
	$user = $_POST['username'];
	$password = md5($_POST['userpassword']);
	$dob = $_POST['dob'];
	$contact = $_POST['contact'];
	$email = $_POST['useremail'];
	$address = $_POST['address'];
	$alt_name = $_POST['alt-name'];
	$alt_contact = $_POST['alt-contact'];
	$cv = $_POST['resume'];
	$certificate = $_POST['certificate'];
	$experience = $_POST['experience'];
	$gender = $_POST['gender'];
	$salary = $_POST['salary'];
	$blood_group = $_POST['blood-group'];
	$department = $_POST['department'];
	$designation = $_POST['designation'];

	//$sql = "INSERT INTO userinfo(name,email,password) VALUES ('$user','$email','$password')";
	//$datainserted = $dbcon->query($sql);

	$dataInsert1 = "INSERT INTO user_info(id,name,password,dob,contact,email,address,alt_name,alt_contact,cv,certificate,experience,gender,blood)
					VALUES ('$userID','$user','$password','$dob','$contact','$email','$address','$alt_name','$alt_contact','$cv','$certificate','$experience','$gender','$blood_group')";

	$dataInsert2 = "INSERT INTO user_status(id,salary,department,designation) VALUES ('$userID','$salary','$department','$designation')";

	$dataQuery1 = $dbcon->query($dataInsert1);
	$dataQuery2 = $dbcon->query($dataInsert2);


}
?>



<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,900,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--===== start loader section
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	</div>
 end loader section =====-->

<!--===== start signup form =====-->
<div class="registration">
<div class="overlay">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php
				if(isset($_POST['registration'])){
					if ($dataQuery1 && $dataQuery2 )
					{
						echo '<div class="alert alert-success alert-dismissible" role="alert">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  <strong>Successfully! user added</strong>
							</div>';
					}
				}
			?>
			<div class="eca-login">
				<h2 class="text-center">Registration form</h2>
				<hr>
				<form action="" method="post">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="reg-id">ID</label>
								<input name="userid" type="text" class="form-control" id="reg-id" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-username">Name</label>
								<input name="username" type="text" class="form-control" id="reg-username" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-email">Email</label>
								<input name="useremail" type="email" class="form-control" id="reg-email" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-password">Password</label>
								<input name="userpassword" type="password" class="form-control" id="reg-password" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-dob">Date of birth</label>
								<input name="dob" type="date" class="form-control" id="reg-dob" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-contact">Contact Number</label>
								<input name="contact" type="date" class="form-control" id="reg-contact" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-address">Address</label>
								<input name="address" type="text" class="form-control" id="reg-address" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-alt-name">Emergency Contact Name</label>
								<input name="alt-name" type="text" class="form-control" id="reg-alt-name" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-alt-contact">Emergency Contact Number</label>
								<input name="alt-contact" type="text" class="form-control" id="reg-alt-contact" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-resume">Resume / CV</label>
								<input name="resume" type="file" class="form-control" id="reg-resume" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-certificate">Academic Certificate</label>
								<input name="certificate" type="file" class="form-control" id="reg-certificate" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-experience">Experience</label>
								<input name="experience" type="date" class="form-control" id="reg-experience" required >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-salary">Salary</label>
								<input name="salary" type="text" class="form-control" id="reg-salary" required >
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-gender">Gender</label>
								<select name="gender" id="reg-gender" class="form-control" >
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-blood">Blood Group</label>
								<input name="blood-group" type="text" class="form-control" id="reg-blood" required >
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-department">Department</label>
								<select name="department" id="reg-department" class="form-control" >
									<option value="web">Web</option>
									<option value="c#">C#</option>
									<option value="android">Andriod</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="reg-designation">Designation</label>
								<select name="designation" id="reg-designation" class="form-control" >
									<option value="web-developer">Web Developer</option>
									<option value="programmer">Programmer</option>
									<option value="software-eng">Software Engineer</option>
								</select>
							</div>
						</div>
					</div>

				  	<button type="submit" name="registration" class="btn btn-primary btn-block text-center"><i class="fa fa-plus"></i> Register</button>
				</form>
				<a href="login.php" class="link">Login</a>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<p>All rights reserved. <a href="#" class="link">Eunoia I.T. Solutions</a>.2016 </p>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
<!--===== end login form =====-->


    <!--===== javascripts =====-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>