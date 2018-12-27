<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meteorite-design
 */

get_header();
?>
	<div class="hero"></div>

	<section class="section">
		<div class="section-wrapper">
			<!-- <h2 class="title-underLine">text</h2> -->
			<div class="articleList">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'template-parts/articleList' ); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
