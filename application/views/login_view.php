<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>ordr</title>
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<section id="login-bg">
		<div id="login-wrapper">
			<img id="login-logo" src="<?php echo base_url(); ?>/assets/images/logo.png" />
			<div id="login-container">
				<span class="login-heading">Log in to ordr</span>
				<?php echo form_open('Login/validate'); ?>
					<input type="text" id="" placeholder="Username" name="username" />
					<input type="password" placeholder="Password" name="password" />
					<input class="btn" type="submit" value="Log in" />
				<?php echo form_close(); ?>
				<div id="login-container-footer"><a href="#">Create an account</a></div>
			</div>
		</div>
	</section>
</body>
</html>