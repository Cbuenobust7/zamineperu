<?php get_header(); ?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
      </a>
    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
      <h1>Servicios Especializados</h1>
    </div>
  </div>
  <div class="title-orange">
    <h2>y Repuestos</h2>
  </div>

  <div class="info">
    <div class="wrapper text-center py-5 top-icon no-p-b">
      <?php the_content(); ?>
    </div>
  </div>
  <?php $categories = get_terms('tipos_servicios', ['hide_empty' => false, 'order' => 'DESC']); ?>

  <div class="products py-5">
    <div class="container">
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
        <div class="col-md-4 bg-orange pl-md-0">
          <div id="accordion" class="accordion-menu py-5">
            <?php foreach ($categories as &$category): ?>
              <div class="accordion--item">
                <h5 class="mb-0">
                  <a href="#" class="d-flex collapsed" data-toggle="collapse" data-target="#cat-<?php echo $category->term_id?>">
                    <span><?php echo $category->name?></span>
                    <i class="ml-auto fa fa-plus" aria-hidden="true"></i>
                    <i class="ml-auto fa fa-minus" aria-hidden="true"></i>
                  </a>
                </h5>
                <div id="cat-<?php echo $category->term_id?>" class="collapse pt-3" data-parent="#accordion">
                  <?php 
                      $services = query_posts( [
                        'post_type'=> 'servicios',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                              'taxonomy' => 'tipos_servicios',
                              'field'    => 'term_id',
                              'terms'    => array( $category->term_id ),
                            ),
                        ),
                        'orderby'   => 'date',
                        'order'     => 'ASC',
                      ]);
                      $category->posts = $services;
                    ?>
                  <ul>
                    <?php foreach ($services as $service): ?>
                      <li>
                        <a href="<?php echo get_the_permalink($service) ?>"><?php echo $service->post_title?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-8">
          <div class="products--list--items">
            <div class="row">
              <?php foreach ($categories as &$category): ?>
                <?php foreach ($category->posts as $service): ?>
                  <div class="col-sm-6 col-md-4">
                    <a class="products--list--items--item" href="<?php echo get_the_permalink($service) ?>">
                      <img src="<?php echo get_the_post_thumbnail_url($service)?>" class="img-fluid">
                      <div class="products--list--items--item--title">
                        <h5>
                          <span><?php echo $service->post_title?></span>
                          <i class="fa fa-plus"></i>
                        </h5>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="brands">
    <div class="wrapper py-5">
      <div class="container-fluid">
        <div class="bar bar--orange my-4 mx-auto"></div>
        <h2 class="subtitle-orange text-center">NUESTRAS MARCAS</h2>

        <?php 
          $brands = query_posts( [
            'post_type'=> 'marcas',
            'posts_per_page' => -1,
            'orderby'   => 'date',
            'order'     => 'ASC',
          ]);
        ?>

        <div class="swiper-container swiper-brands">
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
        </div>

      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>