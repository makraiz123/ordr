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
	<style>
		header.customers {
			background: <?php echo $restaurant->theme_color; ?>;
		}

		nav {
			background: <?php echo $restaurant->theme_color; ?>;
		}
	</style>

	<script type="text/javascript"> 
		function addUser() {
			var username = $('#customer-input').val();
			$.ajax({
				type: 'POST',
				dataType: 'json',
				data: {'username': username },
				ContentType: 'application/json',
				url: 'checkInUser',
				cache: false,
				success: function(res) {
					//console.log(res);
					var date = new Date();
					var datetext = date.toTimeString();
					datetext = datetext.split(' ')[0];
					console.log(res);
					if(res != null) {
						var html = `<div class="customer-card">
							<div class="customer-name">` + res.full_name + `</div>
							<div class="customer-time">` + datetext + `</div>
							<div class="customer-username">` + res.username + `</div>
						</div>`;

						$('#customer-list').append(html);
						
					}
					else {
						alert("Invalid Username");
					}
				},
				error: function(xhr, status, error) {
					alert(xhr.responseText);
				}
			});
		}
	</script>
</head>
<body>
	<header class="customers">
		<section id="header-container">
			<nav><ul>
				<li><div class="li-wrapper"><img id="nav-logo" src="<?php echo base_url(); ?>/assets/images/logo.png" /></div></li>
				<li><a href="<?php echo site_url('Restaurant/customerCheckInView'); ?>"><div class="li-wrapper">Customers</div></a></li>
				<li><a href="<?php echo site_url('Restaurant/index'); ?>" ><div class="li-wrapper">Profile</div></a></li>
				<li><div class="li-wrapper">Edit</div></li>
				<li><div class="li-wrapper">Log out</div></li>
			</ul></nav>
			<h1 class="customers">Customer Check-in</h1>
			<input id="customer-input" type="text" onchange="addUser()"/>
		</section>
	</header>
	<section id="customer-list">
		
	</section>
</body>
</html>