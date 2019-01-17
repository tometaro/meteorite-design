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

    <div class="keyVisual">
		<div class="keyVisual-wrap">
			<div class="keyVisual-overlay">
				<div class="keyVisual-gradation">
					<div class="keyVisual-titleBlock-left">
						<h1 class="keyVisual-title"><?php the_title(); ?></h1>
						<p class="keyVisual-read"><?php echo the_time('Y.m.d'); ?></p>
						<p><?php echo get_post_meta($post->ID , 'リンク' ,true); ?></p>
					</div>
				</div>
			</div>
				<?php the_post_thumbnail( 'full' ); ?>
		</div>
	</div>
	<div class="section">
		<div class="section-wrapper ">
			<div class="section-content">
			
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>




<?php
get_footer();
