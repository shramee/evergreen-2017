<?php
/**
 * The header for our home page
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shramee
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Shramee Srivastav, Shramee, WordPress Developer, PHP, Javascript, PootlePress, Pootle Press, Makesite, Make Site, Page Builder, Pagebuilder, Jamie Marsland">
<?php
	global $shramee_skills;
	$shramee_skills = wp_tag_cloud( [
						'taxonomy' => 'item_tags',
						'smallest'                  => 25,
						'largest'                   => 70,
						'unit'                      => 'px',
						'echo'                      => false,
					] ); ?>
<meta name="description" content="Shramee Srivastav, Skilled in <?php echo $shramee_skills ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site" itemscope itemprop="Person" itemtype="http://schema.org/Person">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>
	<img id="top-logo" src="<?php evg_url( 'assets/logo.png' ); ?>" alt="Evergreen icon">

	<header id="masthead" class="site-header tac" role="banner">
		<div class="custom-header">
			<div class="two-col">
				<div class="col mascot">
					<img data-top-bottom="left:50px" data-bottom="left:-50px"
						srcset="<?php evg_url( 'assets/mascot-1k.png' ); ?> 871w" sizes="(min-height: 800px) 871px,"
						src="<?php evg_url( 'assets/mascot-500.png' ); ?>" alt="Evergreen mascot">
				</div>
				<div class="col">
					<h1 class="blue">Brush, Floss, and Post Daily</h1>
					<h3 class="green">Take the evergreen challenge</h3>
					<h4 class="mb">Schedule a year of posts in 3 minutes <br> (most do it even faster)</h4>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content" itemprop="description">
