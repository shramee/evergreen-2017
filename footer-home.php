<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<aside class="widget-area" role="complementary">
			<div class="widget-column footer-widget-2">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>
			<div class="widget-column footer-widget-1">
				<img src="<?php evg_url( 'assets/logo.png' ); ?>" alt="Evergreen Logo">
				<?php dynamic_sidebar( 'sidebar-3' ); ?>
			</div>
		</aside><!-- .widget-area -->

		<?php
		if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" role="navigation"
					 aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_class'     => 'social-links-menu',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
				) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>
	</div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
