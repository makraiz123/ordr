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
		header.profile {
			background: <?php echo $restaurant->theme_color; ?>;
		}

		nav {
			background: <?php echo $restaurant->theme_color; ?>;
		}

		.feed-card {
			border-top: 8px solid <?php echo $restaurant->theme_color; ?>;
		}

		#header-cover {
			background: url("<?php echo base_url() . 'assets/images/' . $restaurant->cover_photo_url; ?>") 0 50%;
			background-size: cover;
		}

		#profile-photo {
			background: url("<?php echo base_url() . 'assets/images/' . $restaurant->profile_photo_url;?>") white 0 50%;
			background-repeat: no-repeat;
			background-size: contain;
			z-index: 100;
		}

	</style>
</head>
<body>
	<header class="profile">
		<section id="header-container">
			<nav><ul>
				<li><div class="li-wrapper"><img id="nav-logo" src="<?php echo base_url(); ?>/assets/images/logo.png" /></div></li>
				<li><a href="<?php echo site_url('Restaurant/customerCheckInView'); ?>"><div class="li-wrapper">Customers</div></a></li>
				<li><a href="<?php echo site_url('Restaurant/index'); ?>" ><div class="li-wrapper">Profile</div></a></li>
				<li><div class="li-wrapper">Edit</div></li>
				<li><div class="li-wrapper">Log out</div></li>
			</ul></nav>
			<section id="header-cover">
				<div id="profile-photo"></div>
			</section>
		</section>
	</header>
	<h1 class="restaurant-name"><?php echo $restaurant->name; ?></h1>
	<section id="profile-feed">
		<div id="feed-menu-container">
			<section class="feed-card" id="feed-menu">
				<h2 class="menu-heading">Our Menu</h2>
				<div class="menu-item">
					<div class="menu-item-photo"></div>
					<div class="menu-item-name">Menu Item A</div>
					<div class="menu-item-price">$0.00</div>
					<div class="menu-item-about">Fuck. You are not your fucking work. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother?</div>
				</div>
				<div class="menu-item">
					<div class="menu-item-photo"></div>
					<div class="menu-item-name">Menu Item B</div>
					<div class="menu-item-price">$0.00</div>
					<div class="menu-item-about">Fuck. You are not your fucking work. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother?</div>
				</div>
				<div class="menu-item">
					<div class="menu-item-photo"></div>
					<div class="menu-item-name">Menu Item C</div>
					<div class="menu-item-price">$0.00</div>
					<div class="menu-item-about">Fuck. You are not your fucking work. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother?</div>
				</div>
				<div class="menu-item">
					<div class="menu-item-photo"></div>
					<div class="menu-item-name">Menu Item D</div>
					<div class="menu-item-price">$0.00</div>
					<div class="menu-item-about">Fuck. You are not your fucking work. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother?</div>
				</div>
			</section>
		</div>
		<aside id="feed-aside">
			<section class="feed-card" id="feed-about">
				<h3>About</h3>
				<span class="aside-info"> <?php echo $restaurant->about; ?> </span>
			</section>
			<section class="feed-card" id="feed-specials">
				<h3>Specials</h3>
				<span class="aside-info">Sometimes it is appropriate to place various typographic elements on the outside of the fucking left margin of text to maintain a strong vertical axis.</span>
			</section>
		</aside>
	</section>
</body>
</html>