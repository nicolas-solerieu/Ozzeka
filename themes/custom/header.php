<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<title><?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- CSS Zone -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" >
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" >

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

<audio id="music" src="<?php echo get_template_directory_uri(); ?>/files/music.mp3" type="audio/mp3" style="display:none"></audio>

<div class="menu-panel">
	<h2>Menu <i class="fa fa-times close-menu-bt"></i></h2>

	<p class="menu_section-title">Explore</p>
	<a href="#concept" class="menu_item nav-link">The concept</a>
	<a href="#services" class="menu_item nav-link">Our services</a>
	<a href="#contact" class="menu_item nav-link">Contact</a>

	<p class="menu_section-title">Discover</p>
	<a href="https://medium.com/" target="_blank" class="menu_item">Our blog</a>

	<p class="menu_section-title">Language</p>
	<div class="menu_lang">
		<?php $blog_id = get_current_blog_id(); ?>
		<a href="<?php echo get_site_url(1); ?>" class="menu_item <?php if ($blog_id == 1) { echo 'active'; } ?>">English</a>
		<a href="<?php echo get_site_url(2); ?>" class="menu_item <?php if ($blog_id == 2) { echo 'active'; } ?>">French</a>
	</div>

	<a href="#" class="menu_cta">Start a project</a>

</div>
<div class="overlay-dark"></div>

<div id="page">

	<header class="site-header">
		<div class="wrapper">

			<div class="site-branding">

				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-ozzeka.png" alt="logo Ozzeka" height="60"/>
						<p class="site-name"><?php bloginfo( 'name' ); ?> / <?php bloginfo( 'description' ); ?></p>
					</a>
				</h1>

			</div>

			<div class="burger-menu-bt"><i class="fa fa-bars"></i></div>

			<div class="music-caption">
				<i class="fa fa-volume-up" id="play-music"></i>
				<i class="fa fa-volume-down" id="pause-music" style="display:none"></i>
			</div>

		</div>
	</header>

	<main class="site-content">
