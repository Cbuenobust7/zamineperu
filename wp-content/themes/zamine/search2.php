
<?php
/* Template Name: Services  */
/*
 * @package WordPress
 * @subpackage zamine
 * @since Zamine 1.0
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) { 
			echo "hola" ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			zamine_p(
				array(
					'prev_text'          => __( 'Previous page', 'zamine' ),
					'next_text'          => __( 'Next page', 'zamine' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'zamine' ) . ' </span>',
				)
			);}

			// If no content, include the "No posts found" template.
		else { echo "hola";
						get_template_part( 'template-parts/content', 'none' );}

		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_footer(); ?>
