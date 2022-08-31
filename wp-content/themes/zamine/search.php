<?php
/* Template Name: Services  */?>

<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-result-box card-box">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="pt-3 pb-4"> 
                                <div class="mt-4 text-center">
								<h1>Resultados de búsqueda: <?php echo get_search_query(); ?></h1></div>
							</div>
                        </div>
                    </div>
                     <!-- end row -->
					 <ul class="nav nav-tabs tabs-bordered">
                        <li class="nav-item"><a href="#home" data-toggle="tab" aria-expanded="true" class="nav-link active">Todos los resultados</a></li>
                    </ul>           
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="search-item">
      									<section class="search-page">

											<!-- Post Loop -->

											<?php if ( have_posts() ) : 
												while ( have_posts() ) : the_post(); 

												?>
													<?php if ( is_singular() ) : ?>
														<?php the_title( '<h1 class="mb-1 title default-max-width">', '</h1>' ); ?> 
													<?php else : ?>
														<?php the_title( sprintf( '<h2 class="mb-1 title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
													<?php endif; ?>

														<div class="media-body">
														<p class="font-13">
															<?php the_content(); ?>
														</p>
		
														<?php get_template_part('content'); 
														
														the_posts_pagination( array( 

																	"next_text" => "Siguiente pagina",
																	"prev_text" => "Anterior página"
																	) ); ?>
													</div>
												<?php endwhile; 
												
													else : ?>
													<p><?php esc_html_e( 'No se encontró contenido con esos criterios.' ); ?></p>
											<?php endif; ?>
											<div class="clearfix"></div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
	
		</div>
		<!-- container -->
	</div>

<?php get_footer(); ?>


    

            
            