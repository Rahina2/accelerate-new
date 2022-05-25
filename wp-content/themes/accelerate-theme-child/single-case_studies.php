<?php
/**
 * The template for displaying the homepage
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field("services");
				$client = get_field("client");
				$link = get_field("link");
				$image1 = get_field("image1");
				$image2 = get_field("image2");
				$image3 = get_field("image3");
				$size = "large";
				?>
				
				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
						<h3><?php echo $services;?></h3>
						<h4>Client: <?php echo $client;?></h4>
						<?php the_content(); ?>
						<h3><strong><a href="<?php echo $lnk;?>">Site Link</a></strong></h3>
					</aside>


					<aside class="case-study-images">
						<figure  class="case-study-single-image">
							<?php if($image1) { 
								echo wp_get_attachment_image( $image1, $size );
							 } ?>
						</figure>
						<figure  class="case-study-single-image">
							<?php if($image2) { 
								echo wp_get_attachment_image( $image2, $size );
							 } ?>
						</figure>
						<figure  class="case-study-single-image">
							<?php if($image3) { 
								echo wp_get_attachment_image( $image3, $size );
							 } ?>
						</figure>
					</aside>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
