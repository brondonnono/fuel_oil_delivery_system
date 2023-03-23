<?php
	require_once('../backend/connection.php');
	if (!isset($_SESSION['username'])) {
?>

<html lang="en">

<head>
	<title>DELIVERY - Forgot password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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

	<!--===============================================================================================-->
</head>

<body style="background-color: #666666;">

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="../backend/signin.php">
					<?php
						if (isset($_SESSION['message'])) {
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
						?>
						<button type="button" class="close" data-dismiss="alert" arial-label="close">
							<span arai-hidden="true">&times;</span>
						</button>
					</div>
					<?php
						}
					?>
					<span class="login100-form-title p-b-43">
						Reset password
					</span>

					<h5 class="p-b-15 text-justify">
					Enter your phone number, if an account exist with this number we will send you a password reset code
					</h5>

					<div class="wrap-input100 validate-input" data-validate="Phone number is required">
						<input class="input100" type="text" name="phone">
						<span class="focus-input100"></span>
						<span class="label-input100">Phone number</span>
					</div>


					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="forgot" value="send" type="submit">
					</div>

				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
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

</body>

</html>

<?php
	} else {
	    header("Location:index.php");
    }
?>