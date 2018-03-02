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
				<br>
				<h3>Get <a href="#subscribers-receive">everything below</a> for just<br>$997 for an entire year.</h3>
				<a href="https://app.evergreen.to" class="button green-bg">Get Started</a>
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
						<li data--160-bottom="opacity:1;left:0" data-bottom="opacity:0;left:25px"><b class="circle-icon">4</b><span>Get Back to Business that Matters</span></li>
					</ol>
					<a href="https://app.evergreen.to" class="button green-bg">Get Started</a>
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

					<a href="https://app.evergreen.to" class="button green-bg">Get Started</a>
				</div>

			</div>
		</section>

		<section id="testimonials">
			<div class="flex">
				<div class="testimonial">
					<img class="img" src="<?php evg_url( 'assets/erin.png' ); ?>" alt="Erin Wagner, founder, howtobabysit.net">
					<blockquote class="testimonial">
						<cite>Erin Wagner <br> founder, howtobabysit.net</cite>
						<p>Now that the content is done and we've got the Dropbox lined up, all I can say is: Wow. That was easy.</p>
					</blockquote>
				</div>
				<div class="testimonial">
					<img class="img" src="<?php evg_url( 'assets/bryan.png' ); ?>" alt="Dr. Bryan Laskin, ceo/founder, OperaDDS">
					<blockquote class="testimonial">
						<cite>Dr. Bryan Laskin <br> ceo/founder, OperaDDS</cite>
						<p>Evergreen is literally the most effortless marketing tool we’ve ever used. We set it up and now it works for us every day and night without even thinking about it.</p>
					</blockquote>
				</div>
				<div class="testimonial">
					<img class="img" src="<?php evg_url( 'assets/dina.jpg' ); ?>" alt="Erin Wagner, founder, howtobabysit.net">
					<blockquote class="testimonial">
						<cite>Dina Simon<br>President & Chairman, SimonSaysGive.org</cite>
						<p>Without Evergreen, we probably wouldn’t have much presence in social media, but every week our followers just keep going up and up. I couldn’t believe it the other day when we flew past 4500 followers, even though we only spend a few minutes each month managing our Facebook Page.</p>
					</blockquote>
				</div>
				<div class="testimonial">
					<div class="img" style="background: center/cover url('<?php evg_url( 'assets/everbot.png' ); ?>')"><div class="screen-reader-text">EverBot</div></div>
					<blockquote class="testimonial">
						<cite>EverBot ... Er ... Jerry <br> from Accounting Company</cite>
						<p>Bleep bloop, I am a totally normal human customer and I think Evergreen transcends all other software ever created. Even if I were a robot capable of thousands of computations per second  (which I totally am not ... Because I'm human), I would still use Evergreen every day. Bloop.</p>
					</blockquote>
				</div>
			</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<script type="text/javascript">if( window.innerWidth > 1150 ) window.s = skrollr.init( { forceHeight: false } );</script>

<?php get_footer( 'home' ); ?>