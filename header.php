<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package True_Nature
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/mtu5iht.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer="defer"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="loader">
	<div class="loader_content">
		<div class="loader_logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/loader_logo.svg" alt="">
		</div>
		<div class="description_holder">
			<div class="single_description first">
				<p>
					<span>True</span> [troo], adjective.
				</p>
				<p class="description">
					“Real, genuine, authentic”
				</p>
			</div>
			<div class="single_description second">
				<p>
					<span>Nature</span> [ney-chure], noun.
				</p>
				<p class="description">
					“Identity or essential character”
				</p>
			</div>
		</div>
		
	</div>
</div>

<div class="nav_holder">
	<nav>
		<ul>
			<li>
				<a href="">Home</a>
			</li>
			<li>
				<a href="">yoga therapY</a>
			</li>
			<li>
				<a href="">group classes</a>
			</li>
			<li>
				<a href="">mentoring</a>
			</li>
			<li>
				<a href="">studio</a>
			</li>
			<li>
				<a href="">contact us</a>
			</li>
		</ul>
	</nav>
</div>

<header>
	<div class="header_content">
		<div class="logo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/black_header_logo.png" alt="" class="black">
			<img src="<?php echo get_template_directory_uri(); ?>/images/white_header_logo.svg" alt="" class="white">
		</div>
		<div class="menu_opener">
			<img src="<?php echo get_template_directory_uri(); ?>/images/menu_shape.svg" alt="arrow" class="menu_shape">
			<p>MENU</p>
		</div>
	</div>
	
</header>
<div id="viewport">
  <div id="scroll-container">


