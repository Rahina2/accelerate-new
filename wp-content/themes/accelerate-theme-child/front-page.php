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

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-cntent">
			<h4  class="discription" >Featured Work</h4>
			<ul class="frontpage-featured-image">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
					$image1 = get_field("image1");
					$size = "medium";
				?>
					<a href="<?php the_permalink();?>">
					<li  class="individual-featured-work">
						<figure  class="individual-featured-work">
							<?php echo wp_get_attachment_image( $image1, $size );?>
							<h3  class="discription"> <a href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</figure>	
					</li></a>
					<?php endwhile; ?> 
					<?php wp_reset_query(); ?>
			</ul>
		</div>
	</section>

	<section class="services">
	 <div class="site-content ">
		 <h4 class="homepage-services-title">Our Services</h4>
		 <ul class="homepage-services">
				<?php query_posts('posts_per_page=1&post_type=page'); ?>
				 <?php while ( have_posts() ) : the_post();
				 $image1 = get_field("image1");
				 $image2 = get_field('image2');
				 $image3 = get_field('image3');
				 $image4 = get_field('image4');
				 $size = "medium";
				$cS = get_field("content_strategy");
				$iM = get_field("influencer_mapping");
				$sM = get_field("social_media_strategy");
				$dAd = get_field("design_and_development");
				  ?>

					<li  class="homepage-services">
						<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image1, $size );?>
							<h4><?php echo $cS;?></h4>
						</figure>	
					</li>

					<li  class="homepage-services">
						<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image2, $size );?>
							<h4><?php echo $iM;?></h4>
						</figure>	
					</li>


					<li  class="homepage-services">
						<figure  class="individual-service">
						<?php echo wp_get_attachment_image( $image3, $size );?>
							<h4><?php echo $sM;?></h4>
						</figure>	
					</li>

					<li  class="homepage-services">
						<figure  class="individual-service">
						<?php echo wp_get_attachment_image( $image4, $size );?>
							<h4><?php echo $dAd;?></h4>
						</figure>	
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			 </ul>
	 </div>
	</section>


	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
			<h4>From the Blog</h4>
				<?php query_posts('posts_per_page=1'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?> 
				<?php endwhile; ?> 
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>
	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
			<h4 id="twitter-feed">recent tweet</h4>
			<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
