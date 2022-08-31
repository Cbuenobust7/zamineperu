<?php
/* Template Name: Articulo  */
get_header(); ?>

<div class="page_post" id="page_post_id">
	<main>
		<?php 
		if ( have_posts() ): 
 			while ( have_posts() ) :
 			 the_post();
 			
 			?>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                  
                                    <h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">January 1, 2022</div>
                                    <!-- Post categories-->
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                                </header>
                                <!-- Preview image figure-->
                                <figure class="mb-4">
                                <div id='post-<?php the_ID(); ?>' <?php post_class( 'post_page'); ?> >
                                        <?php if ( has_post_thumbnail() ) : ?>	
                                            <div class="thumdail_post">
                                            <?php the_post_thumbnail( 'medium'); ?>
                                            </div> 				
                                        <?php endif; ?>
                                
                                <!-- Post content-->
                                <section class="mb-5">
                                    <div class="post_content">
                                        <?php the_content(); ?>		 				
                                    </div>
                                </section>
                                </article>
                            <!-- Comments section-->
                            <section>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <!-- Comment form-->
                                        <?php 
                                            wp_link_pages(
                                                array(
                                                    "before" => "<div class='page_pagination'>",
                                                    "after" => "</div>",
                                                    "link_before" => "<span>",
                                                    "link_after" => "</span>",
                                                    "separator" => " - ",
                                                    "next_or_number" => "next"
                                                )
                                            );

                                            if ( comments_open() || get_comments_number(  ) ){
                                            comments_template();
                                            }

                                            ?>
                                        </div>                                       
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>




		 		

		 		


			</div>
		 	<?php 
		 	endwhile;
		 	endif;
		 	 ?>
	</main>
</div>
<?php get_footer(); ?>