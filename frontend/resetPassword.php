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
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
	<link rel="shortcut icon" href="images/logo.jpg">
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
                <?php
                    if (!isset($_SESSION['reset'])) {
                ?>
				<form class="login100-form validate-form" method="POST" action="../backend/verifyCodeAndChangePassword.php">
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
							echo $_SESSION['message'].' ';
							echo $_SESSION['phone'];
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
					<h3 class="login100-form-title p-b-43">
						Reset your password
					</h3>

					<div class="p-b-15 text-center">
					A reset code have being send to your phone enter it here please!
					</div>

					<div class="wrap-input100 validate-input" data-validate="Reset code is required">
						<input class="input100" type="text" name="code">
						<span class="focus-input100"></span>
						<span class="label-input100">Reset code</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="verify" value="Verify" type="submit">
					</div>

				</form>
                <?php
                    } else {
                ?>
                <form class="login100-form validate-form" method="POST" action="../backend/verifyCodeAndChangePassword.php">
					<?php
						if (isset($_SESSION['message'])) {
					?>
					<div class="alert alert-info alert-dismissible fade show" role="alert">
						<?php
							echo $_SESSION['message'].' ';
							echo $_SESSION['phone'];
							unset($_SESSION['message']);
							unset($_SESSION['msg_type']);
						?>
						<button type="button" class="close" data-dismiss="alert" arial-label="close">
							<span arai-hidden="true">&times;</span>
						</button>
					</div>
					<?php
						}
					?>	
					<h3 class="login100-form-title p-b-43">
						Change your password
					</h3>

					<h5 class="p-b-15 text-center">
						Enter a new password
					</h5>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" name="change" value="change" type="submit">
					</div>
				</form>
                <?php
					unset($_SESSION['reset']);
                    }
                ?>

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