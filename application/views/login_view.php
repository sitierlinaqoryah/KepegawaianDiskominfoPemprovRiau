<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Kepegawaian Diskominfo | Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url()?>'../../resources/img/pic_buat_tab.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>'../../resources/login/css/main.css">
<!--===============================================================================================-->



<?php 
		$this->load->helper('url'); 
		$this->load->library('javascript');
		?>
</head>
<body class="bg-dark">
<div class="bg-image"></div>
   	<div class="limiter">
		<div class="container-login100" style="background-image:url(../../resources/login/images/bg-01.jpg)">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo site_url('login/aksi_login'); ?>" method="post">
					<span class="login100-form-logo">
						<img src="http://localhost/KepegawaianDiskominfo/resources/img/header.png" alt="Logo">
						<i class="menu-icon ti ti-user"></i> 
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					
										<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>'../../resources/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url();?>'../../resources/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>'../../resources/login/js/main.js"></script>

</body>
</html>
					
