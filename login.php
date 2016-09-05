<?php
session_start();
include('pdo-connection.php');
include('dbconfig.php');
$dbServer =$db_server;
$dbUser =$db_user;
$dbPass =$db_pass;
$dbName=$db_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['login']))
{

	$loginEmail = $_POST['email'];
	$loginPass = md5($_POST['password']);

	//$loginSql = "SELECT * FROM userinfo WHERE name='$loginName' AND password='$loginPass'";
	//$loginData = $dbcon->query($loginSql);
	//$Row = $loginData->fetch(PDO::FETCH_ASSOC);

	//$name = $Row['name'];
	//$pass = $Row['password'];

	$loginQuery = "SELECT * FROM user_info WHERE email='$loginEmail' AND password='$loginPass'";
	$loginInfo = $dbcon->query($loginQuery);
	$Rows = $loginInfo->fetchAll(PDO::FETCH_ASSOC);


	$LogEmail = $Rows['email'];
	$LogPass = $Rows['password'];

	if(($LogEmail !="") && $LogPass !=""){
		$_SESSION['user'] = $LogEmail;
		$_SESSION['login'] = "True";
	}

	if(($LogEmail == $loginEmail) && ($LogPass == $loginPass)){
		echo "<script>location.href='index.php'</script>";
	}
	else{
		$logError = "Invalid Username or password";
	}


	//if(($name == $loginName) && ($pass == $loginPass)){
	//	echo("<script>location.href='index.php'</script>");
	//}
	//else{
	//	$error =  "Username or password incorrect";
	//}
}

?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ECA - Login</title>
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

<!--===== start login form =====-->
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<?php
			if(isset($_POST['login'])){
				if(($LogEmail != $loginEmail) && ($LogPass != $loginPass)){
					echo '<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						 '.$logError.'
						</div>';
				}
			}
			?>
			<div class="eca-login">
				<h2 class="eca-logo">ECA</h2>
				<h4>Sign in</h4>
				<form action="" method="post">
					<div class="form-group">
					    <label for="username">Email</label>
					    <input name="email" type="email" class="form-control" id="username" required>
				  	</div>
				  	<div class="form-group">
					    <label for="password">Password</label>
					    <input name="password" type="password" class="form-control" id="password" required>
				  	</div>
				  	<div class="checkbox">
					    <label>
					      	<input type="checkbox"> Keep me signed in
				    	</label>
						<a href="#" class="link">&nbsp;&nbsp; Forgot password?</a>
				  	</div>
				  	<button name="login" type="submit" class="btn btn-primary">Sign in</button>
				</form>
				<a href="adduser.php" class="link">Create new account.</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center">
			<hr>
			<p>All rights reserved. <a href="#" class="link">Eunoia I.T. Solutions</a>.2016 </p>
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