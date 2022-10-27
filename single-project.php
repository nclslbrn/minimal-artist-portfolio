<?php
/**
 * The template for displaying all single project.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Minimal-Artistic-Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php get_sidebar(); ?>

		<?php
		while ( have_posts() ) : 
			the_post();
			get_template_part( 'template-parts/content', 'project' );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
