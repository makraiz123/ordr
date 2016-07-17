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
	<header class="users">
		<section id="header-container">
			<nav><ul>
				<li><div class="li-wrapper"><img id="nav-logo" src="<?php echo base_url(); ?>/assets/images/logo.png" /></div></li>
				
				<li><div class="li-wrapper">Log out</div></li>
			</ul></nav>
		</section>
	</header>
	<div id="restaurants-container">
	<?php if(isset($restaurants)) { 
		foreach($restaurants as $restaurant) { ?>
		
			<section class="feed-card-restaurants"> 
				<h1 class="restaurant-name"><?php echo $restaurant->name; ?></h1>
				<div class="restaurant-info">
					<h3> Location: <?php echo $restaurant->location; ?> </h3>
					<h3> Cuisine: <?php echo $restaurant->cuisine; ?> </h3>
					<h3> Price Range: <?php echo $restaurant->price_range_min . "-" . $restaurant->price_range_max; ?> </h3>
				</div>
				<div class="restaurant-image" style='background: url("<?php echo base_url(); ?>assets/images/<?php echo $restaurant->profile_photo_url; ?>");'> 

				</div>
			</section>
			
		
	
	<?php } } ?>
	</div>
	<!-- 
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
	</section> -->
</body>
</html>