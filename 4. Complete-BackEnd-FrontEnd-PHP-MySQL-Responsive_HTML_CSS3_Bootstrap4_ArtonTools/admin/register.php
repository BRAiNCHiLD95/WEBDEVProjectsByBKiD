<?php
	session_start();
	if(isset($_SESSION['user_name']) && $_SESSION['user_name']!=""){
        echo
        '<script language="javascript">
        alert("Hey '.$_SESSION['user_name'].',\nPlease Logout First!");
        window.location.href="index.php?sessionActive=true"
        </script>';
	}
	else if (isset($_POST['submit'])) {
		$uname = $_POST['uname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$cpwd = $_POST['cpwd'];
		if ($pwd != $cpwd) {
			echo
			'<script language="javascript">
			alert("Passwords Did Not Match!");
			window.location.href="register.php"
			</script>';
		}
		else {
			require_once('config.php');
			$fetchData = "SELECT * FROM `users` WHERE `uname` = '$uname' || `email` = '$email'";
			$fetch = mysqli_query($conn, $fetchData);
			if (mysqli_num_rows($fetch) > 0) {
				echo
				'<script language="javascript">
				alert("User already in database!\nTry Logging In!");
				window.location.href="login.php"
				</script>';
			}
			else {
				$registerUser = "INSERT INTO `users` (`uname`,`fname`,`lname`,`email`,`pwd`) VALUES ('$uname', '$fname', '$lname', '$email', '".base64_encode($pwd)."')";
				$run = mysqli_query($conn,$registerUser);
				if ($run == 1) {
					echo
					'<script language="javascript">
					alert("Registration Successful!\nRedirecting to Login Page.");
					window.location.href="login.php"
					</script>';
				}
				else {
					echo
					'<script language="javascript">
					alert("Database Error! Contact Us for help!");
					window.location.href="register.php"
					</script>';
				}
			}
		}
	}
	else {
	?>	
		<!doctype html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<title>AdminPanel | Register</title>
			<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
			<style>
				body {
					background-color: #CC9966;
				}
				.bg-dark {
					background-color: #000000 !important;
				}
			</style>
		</head>
		<body>
			<section id="register" class="container mt-md-5 pt-md-5">
				<div class="card shadow bg-dark text-light col-md-10 offset-md-1">
					<h1 class="text-center">REGISTRATION</h1>
					<form action="register.php" method="POST">
						<div class="form-row">
							<div class="form-group col-md-5">
								<label for="username">Username</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">@</span>
									</div>
									<input class="form-control" name="uname" type="text" required placeholder="Choose Username">
								</div>
							</div>
							<div class="form-group col-md-6 text-center">
								<label for="names" class="ml-md-4">Full Name</label>
								<div class="form-inline" id="names">
									<input class="form-control col-md-5 offset-md-1" name="fname" type="text" required placeholder="First Name">
									<input class="form-control col-md-5 mt-2 mt-md-0 offset-md-1" name="lname" type="text" required placeholder="Last Name">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input class="form-control" name="email" required placeholder="Enter your best email address">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="pwd">Password</label>
								<input class="form-control" type="password" name="pwd" required placeholder="Enter password">
							</div>
							<div class="form-group col-md-6">
								<label for="cpwd">Confirm Password</label>
								<input class="form-control" type="password" name="cpwd" required placeholder="Re-enter password">
							</div>
						</div>
						<div class="form-row justify-content-center">
							<button class="btn btn-primary mx-2 col-md-3" name="submit" type="submit">Register Now</button>
							<button class="btn btn-danger mt-2 mt-md-0 mx-2 col-md-3" type="reset">Clear Data</button>
						</div>
						<div class="form-row justify-content-center">
							<h6 class="my-3 font-weight-normal">Already a user? Click <a href="login.php">here</a> to login!</h6>
						</div>
					</form>
				</div>
			</section>
		</body>
		</html>
	<?php } 
?>