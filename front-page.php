<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header( 'home' );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<section class="blue-bg mb2">
			<div class="col tac">
				<h4>Stop paying $500 to an agency or social media expert every month.</h4>
				<br><br>
				<h3>Get everything above for just<br>$997 for an entire year.</h3>
			</div>
		</section>

		<section>
			<div class="two-col reverse-desktop" id="as-easy-as">
				<div class="col mascot">
					<img data-bottom="transform:scale(0.9) translateY(-20px);" data-center="transform:scale(1.1) translateY(0px);" src="<?php evg_url( 'assets/mascot-yeah.png' ); ?>" alt="Evergreen mascot">
				</div>
				<div class="col">
					<h2 data--160-bottom="transform:scale(1);" data-bottom="transform:scale(1.1);" class="blue">As easy as</h2>
					<ol class="no-list relative">
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><b class="circle-icon">1</b><span>Fill A Library of Evergreen Content</span></li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><b class="circle-icon">2</b><span>Choose a Facebook Page or Twitter</span></li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><b class="circle-icon">3</b><span>Select a Publishing Interval</span></li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><b class="circle-icon">4</b><span>4 Get Back to Business that Matters</span></li>
					</ol>
				</div>
			</div>

		</section>

		<section>
			<div id="subscribers-receive" class="two-col">

				<div class="col mascot">
					<img data-bottom-top="transform:translateY(50px);" data-top="transform:translateY(-50px);"  src="<?php evg_url( 'assets/mascot-yay.png' ); ?>" alt="Evergreen mascot">
				</div>

				<div class="col">
					<h2 class="blue">ANNUAL SUBSCRIBERS RECEIVE</h2>

					<ul class="no-list">
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> Unlimited Publishing on Facebook and Twitter</li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> 365 Evergreen Images for their Library</li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> A Social Media Photo Prop Kit</li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> 30 Day Money Back Guarantee</li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> 20% Discount</li>
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><i data--250-bottom="transform:scale(1.1)" data--180-bottom="transform:scale(.8)" class="fa fa-check-square-o"></i> Monthly Emails with Tips and Tactics on Social Media Strategy</li>
					</ul>
				</div>

			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<script type="text/javascript">if( window.innerWidth > 1150 ) window.s = skrollr.init( { forceHeight: false } );</script>

<?php get_footer( 'home' ); ?>