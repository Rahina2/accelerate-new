<?php
/**
 * The template for displaying the arcive case studies
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
				$size = "large";
				?>
				
				<article class="case-study-archive">
					<aside class="case-study-sidebar-image">
						<h2><?php the_title(); ?></h2>
						<h3><?php echo $services;?></h3>
						<h4>Client: <?php echo $client;?></h4>
						<?php the_excerpt(); ?>
						<h3><strong><a href="<?php echo $lnk;?>">Site Link</a></strong></h3>
					</aside>


					<aside class="case-study-images-archive">
					<a href="<?php the_permalink();?>"><li  class="individual-featured-work">
						<figure  class="individual-image-archive">
							<?php echo wp_get_attachment_image( $image1, $size );?>
							<h3  class="discription"> <a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</figure>
					</li></a>
					</aside>
				</article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
