<?php
	require_once('../backend/connection.php');
	if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DELIVERY - Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
	<!-- Custom stylesheet--> 
	<link rel="stylesheet" href="css/custom.css" />

<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	
	<!--Preloader--> 

	<?php
		include('./preloader.php');
	?>

	<!---End off Preloader-->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form login100-form-signup validate-form" method="POST" action="../backend/register.php">
					
					<?php
						if (isset($_SESSION['message'])) {
							if ($_SESSION['msg_type'] == 'danger') {
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
							unset($_SESSION['msg_type']);
						?>
						<button type="button" class="close" data-dismiss="alert" arial-label="close">
							<span arai-hidden="true">&times;</span>
						</button>
					</div>
					<?php
							} else if($_SESSION['msg_type'] == 'success') {
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
							unset($_SESSION['msg_type']);
						?>
						<button type="button" class="close" data-dismiss="alert" arial-label="close">
							<span arai-hidden="true">&times;</span>
						</button>
					</div>
					<?php
							} else if($_SESSION['msg_type'] == 'info') {
					?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
							unset($_SESSION['msg_type']);
						?>
						<button type="button" class="close" data-dismiss="alert" arial-label="close">
							<span arai-hidden="true">&times;</span>
						</button>
					</div>
					<?php
							}
						}
					?>
					<a href="./index.php">
						<span class="fa fa-home" style=" font-size: x-large; color: #ffcb0f;"></span>
					</a>
					<span class="login100-form-title p-b-20">
						Create your account
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Repeated password is required">
						<input class="input100" type="password" name="Cpassword">
						<span class="focus-input100"></span>
						<span class="label-input100">Repeat your password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Your name is required">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Your address is required">
						<input class="input100" type="text" name="address">
						<span class="focus-input100"></span>
						<span class="label-input100">Address</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valide Phone number is required: 6xxxxxxxx or 2xxxxxxxx">
						<input class="input100" type="text" name="phone" minlenght="9">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone number</span>
					</div>

					<div class="w-full p-t-3 p-b-32" style="align: right;">
						<div class="contact100-form-checkbox">
							<a href="./login.php" class="txt1">
								Already have an account?
							</a>
						</div>

					</div>
			

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="signup" value="Register" type="submit">
					</div>
					
				</form>

				<div class="login100-more" style="background-image: url('images/signup-bg.jpg');">
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main2.js"></script>
	<!--JavaScript -->
	<script src="js/jquery-1.12.1.min.js"></script>
	<!-- JS Implementing Plugins-->
	<script src="js/jquery.fancybox.js?v=2.1.5"></script>
	<script src="js/main.js"></script>

</body>
</html>

<?php
	} else {
	 header("Location:index.php");
    }
?>
