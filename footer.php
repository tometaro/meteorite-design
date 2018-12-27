<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meteorite-design
 */

?>

	<?php wp_reset_query(); if ( !is_home() && !is_front_page() ) : ?>
		<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
			<div class="breadcrumbs-inner">
				<?php if(function_exists('bcn_display'))
				{
				bcn_display();
				}?>
			</div>
		</div>
	<?php endif; ?>

	<footer class="footer">
		<div class="footer-wrap">
			<div class="footer-navi">
				<div class="footer-block">
					<?php wp_nav_menu(array('menu' => 'footermenu1')); ?>
				</div>
				<div class="footer-block">
					<?php wp_nav_menu(array('menu' => 'footermenu2')); ?>
				</div>
				<div class="footer-blanding">
					<img class="footer-logo-mark" src="<?php bloginfo('template_directory'); ?>/images/logo-mark.svg">
					<div class="footer-logo-type">
					</div>
				</div>
			</div>
		</div>
		<div class="footer-info">Copyright © <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> </a>All Rights Reserved.
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>