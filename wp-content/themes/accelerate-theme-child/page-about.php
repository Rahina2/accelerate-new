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
<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			 <div class="hero-para"><p>Accelerate is a content and marketing adency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p></div>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->



	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); 
				$services = get_field("services");
				$cS = get_field("content_strategy");
				$cSt = get_field("content_strategy_text");
				$iM = get_field("influencer_mapping");
				$iMt = get_field("influencer_mapping_text");
				$sM = get_field("social_media_strategy");
				$sMt = get_field("social_media_strategy_text");
				$dAd = get_field("design_and_development");
				$dAdt = get_field("design_and_development_text");
				$image1 = get_field("image1");
				$image2 = get_field("image2");
				$image3 = get_field("image3");
				$image4 = get_field("image4");
				$size = "large";
				?>
			<?php endwhile; // end of the loop. ?>
	
		<section class="about">
			<article class="homepage-services">
						<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image1, $size );?>
						</figure>

						<aside class="about-sidebar">
							<h3><?php echo $cS;?></h3>
							<?php echo $cSt; ?>
						</aside>
					</article>

			<article class="homepage-services">
					<aside class="about-sidebar">
						<h3><?php echo $iM;?></h3>
						<?php echo $iMt; ?>
					</aside>

					<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image2, $size );?>
						</figure>
			</article>
			
			<article class="homepage-services">
			<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image3, $size );?>
						</figure>
					<aside class="about-sidebar">
						<h3><?php echo $sM;?></h3>
						<?php echo $sMt; ?>
					</aside>
			</article>

			<article class="homepage-services">
					<aside class="about-sidebar">
						<h3><?php echo $dAd;?></h3>
						<?php echo $dAdt; ?>
					</aside>

					<figure  class="individual-service">
							<?php echo wp_get_attachment_image( $image1, $size );?>
						</figure>
			</article>
		</section>

	<div class="work-interest">
		<h3>Intrested in working with us ?<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a></h3>
	</div>
	</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
