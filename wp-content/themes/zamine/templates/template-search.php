<?php
/* Template Name: Search  */
get_header(); ?>


		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_format() );

				// End the loop.
			endwhile;

	
			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;

			?>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
