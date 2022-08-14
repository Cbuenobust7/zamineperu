<?php
/* Template Name: Suministros Equipos  */
get_header(); ?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">
      <!-- <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
      </a> -->
    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
      <h1>Suministros para Equipos</h1>
    </div>
  </div>
  <div class="title-orange">
    <h2>móviles pesados</h2>
  </div>

  <div class="info">
    <div class="wrapper text-center py-5 top-icon no-p-b">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="products py-5">
    <div class="container-fluid">
          <div class="wrapper d-flex mb-5">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Servicios Especializados y Repuestos</li>
      </ol>
      <div class="ml-auto search">
        <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
        <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
      </div>
    </div>
    <div class="products--list container-fluid">
      <div class="row">
        <div class="col-md-4 pl-md-0 accordion-menu" style="background: transparent!important;">
            <?php
                /*$args = array(
                'taxonomy'     => 'cat_sum_equipos',
                'hierarchical' => true,
                'title_li'     => '',
                'hide_empty'   => false
                );*/
              ?>

                <!--<ul>
                    <?php wp_list_categories( $args ); ?>
                </ul>-->
          <div id="accordion" class="accordion-menu py-5" style="background: #f47b20;">
            <?php 
              $categories = get_terms( 
                  array(
                      'taxonomy'   => "cat_sum_equipos",
                      'parent'     => 0, // <-- No Parent
                      'orderby'    => 'term_id',
                      'hide_empty' => false // <!-- change to false to also display empty ones
                  )
              );
            ?>
            <?php foreach ($categories as $category): ?>
              <div class="accordion--item" style="padding: 0 20px!important; color: #fff;">
                <h5 class="mb-0">
                  <a href="<?php echo get_category_link( $category->term_id );?>" class="collapsed" ><?php echo $category->name?></a>
                  <i class="ml-auto fa fa-plus" style="font-size: 0.6em; margin-left: 10px;" aria-hidden="true" data-toggle="collapse" data-target="#cat-<?php echo $category->term_id?>"></i>
                  
                </h5>
                
                  <?php 
                    $categories2 = get_terms( 
                        array(
                            'taxonomy'   => "cat_sum_equipos",
                            'parent'     => $category->term_id, // <-- No Parent
                            'orderby'    => 'term_id',
                            'hide_empty' => false // <!-- change to false to also display empty ones
                        )
                    );
                  ?>
                    <?php foreach ($categories2 as $category2): ?>
                        <div id="cat-<?php echo $category->term_id?>" class="collapse pt-3 ml-3" data-parent="#accordion">
                            <h5 class="mb-0">
                                <a href="<?php echo get_category_link( $category2->term_id );?>" class="collapsed" ><?php echo $category2->name?></a>
                                <i class="ml-auto fa fa-plus" style="font-size: 0.6em; margin-left: 10px;" aria-hidden="true" data-toggle="collapse" data-target="#cat-<?php echo $category2->term_id?>"></i>
                            </h5>
                        </div>
                        <?php 
                            $categories3 = get_terms( 
                                array(
                                    'taxonomy'   => "cat_sum_equipos",
                                    'parent'     => $category2->term_id, // <-- No Parent
                                    'orderby'    => 'term_id',
                                    'hide_empty' => false // <!-- change to false to also display empty ones
                                )
                            );
                        ?>
                        <div id="cat-<?php echo $category2->term_id?>" class="collapse pt-3 ml-5" data-parent="#cat-<?php echo $category->term_id?>">
                            <?php foreach ($categories3 as $category3): ?>
                                <h5 class="mb-0">
                                    <a href="<?php echo get_category_link( $category3->term_id );?>" class="collapsed" ><?php echo $category3->name?></a>
                                </h5>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-8" style="background: #fff; border-bottom: 1px solid #fff;">
            
                <?php
                    $publicaciones = query_posts( [
                        'post_type'=> 'suministros-equipos',
                        'posts_per_page' => -1,
                        'orderby'   => 'date',
                        'order'     => 'ASC',
                    ]);
                    //var_dump($publicaciones);
                ?>
                <?php foreach ($publicaciones as $post): ?>
                  <div class="row mb-4">
                    <div class="col-md-6">
                      <?php 
                          $images = get_field('galeria_servicios', $servicio->ID);
                        
                      ?>
                      <div id="slider" class="flexslider">
                          <ul class="slides">
                              <?php foreach( $images as $image ): ?>
                                  <li>
                                      <img src="<?php echo esc_url($image['serv_img']); ?>" alt="<?php echo esc_attr($image['serv_img']); ?>" />
                                  </li>
                              <?php endforeach; ?>
                          </ul>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="mb-4">
                        <?php the_title('<h2>', '</h2>'); ?>
                      </div>

                      <div class="accordion descripcionacc" id="acordeonDescripcion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="material-icons" style="font-size: 0.6em;">
                                            add
                                        </span>
                                        Descripción
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#acordeonDescripcion">
                            <div class="card-body">
                                <?php the_content(); ?>
                            </div>
                            </div>
                        </div>
                    </div>
                    <!--<p><a href="<?php echo get_field('ficha_tecnica'); ?>" target="_blank" style="font-size: 1.2em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></p>-->

                    <p>
                        <?php 
                            $marca = get_field('marca', $servicio->ID);
                            if(isset($marca) && !empty($marca)){
                                echo "<span>".$marca."</span>";
                                echo '<a href="'.get_field('pdf_marca').'" target="_blank" class="btn btn-orange ml-4" style="font-size: 14px!important;">Descargar PDF</a>';
                            }
                        ?>
                    </p>
                
                    <!--<a class="btn btn-orange" style="font-size: 0.9em!important;" href="<?php echo home_url('contactanos') ?>">
                    SOLICITA TU COTIZACIÓN
                    </a>-->
                    </div>
                    
                  </div>
                  <hr/>
                <?php endforeach; ?>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="brands">
    <div class="wrapper py-5">
      <div class="container-fluid">
        <h2 class="subtitle-orange text-center">NUESTRAS MARCAS</h2>

        <?php 
          $brands = query_posts( [
            'post_type'=> 'marcas',
            'posts_per_page' => -1,
            'orderby'   => 'date',
            'order'     => 'ASC',
          ]);
        ?>
        <div class="row align-items-center">
        <?php foreach ($brands as $k => $brand): ?>
          <div class="col-md-3"><img src="<?php echo get_the_post_thumbnail_url($brand)?>" class="d-block img-fluid" style="max-width: 220px;"></div>
        <?php endforeach; ?>
        </div>
        <!--<div class="swiper-container swiper-brands">
          <div class="swiper-wrapper py-5">
            <div class="swiper-slide">
              <?php foreach ($brands as $k => $brand): ?>
                <?php if ($k > 0 && $k%4 == 0 ): ?>
                  </div>
                  <div class="swiper-slide">
                <?php endif;?>
                <div class="swiper-img">
                  <img src="<?php echo get_the_post_thumbnail_url($brand)?>" class="img-fluid">
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>-->

      </div>
    </div>
  </div>

</div>

<script>
    jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>
<?php get_footer(); ?>