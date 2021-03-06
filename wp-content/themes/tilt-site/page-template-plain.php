<?php
/**
 * Template Name: totally normal template
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


get_header('home'); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main <?= $isWorkPage ? ' site-work work-'.$post->post_name : '';?>" role="main">

			<div class="news-wrapper">
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					// End the loop.
					endwhile;
				?>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
