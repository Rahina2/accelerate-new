<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content   unfound-page" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
			<div class="work-interest">
		<h3><a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a></h3>
	</div>
			<h1>Page not found <br>404</h1>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<?php get_footer(); ?>
