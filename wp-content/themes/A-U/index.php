<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="navbar-header">
				<button type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?php bloginfo('url'); ?>" class="navbar-brand">A-U</a>
			</div>	
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<?php wp_nav_menu(
					array(
					'container' => false,
					'items_wrap' => '<ul class="nav navbar-nav navbar-center">%3$s</ul>',
					'theme_location' => 'menuprincipal'));
				?>
				<ul class="nav navbar-nav navbar-right">
				 	<li><a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/images/carrito.png" alt=""></a></li>
				 </ul> 
			</div>
		</nav>
	</header>
	<section class="main">
		
	</section>
	<footer>
		
	</footer>
	<?php wp_footer() ?>
</body>
</html>