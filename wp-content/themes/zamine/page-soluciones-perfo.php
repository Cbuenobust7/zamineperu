<?php get_header();
$servicio = get_field("servicio");
//echo json_encode(get_fields());
?>
<div class="page-product">
  <div class="info py-5">
    <div class="wrapper px-5">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/small-logo.png" class="img-fluid mb-4">
      </a>
    </div>
  </div>
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
  <?php
  $category = reset(wp_get_post_terms(get_the_ID(), 'tipos_servicios'));
  ?>

  <?php if ($category) : ?>
    <div class="wrapper">
      <div class="bar bar--gray my-4 mx-auto"></div>
      <h2 class="subtitle-gray text-center pb-5"><?php echo $category->name ?></h2>
    </div>
  <?php endif; ?>

  <div class="product-info py-5">
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="mb-5">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <?php if ($servicio) : ?>
                  <li class="breadcrumb-item"><a href="<?php echo get_the_permalink($servicio->ID); ?>"><?php echo $servicio->post_title ?></a></li>
                <?php endif; ?>
                <?php the_title('<li class="breadcrumb-item active" aria-current="page">', '</li>'); ?>
              </ol>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
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
                <div class="product--info--details pl-md-4">
                  <div class="mb-4">
                    <?php the_title('<h2>', '</h2>'); ?>
                  </div>
                
                <div class="accordion descripcionacc" id="acordeonDescripcion">
                    <div class="card">
                        <div class="card-header" style="background-color:#f47b20;" id="headingOne">
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
                <p><a href="<?php echo get_field('ficha_tecnica'); ?>" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></p>

                <p>
                    <?php 
                        $marca = get_field('marca', $servicio->ID);
                        if(isset($marca) && !empty($marca)){
                             echo "<span>".$marca."</span>";
                             echo '<a href="'.get_field('pdf_marca').'" target="_blank" class="btn btn-orange ml-4" style="font-size: 14px!important;">Descargar PDF</a>';
                        }
                    ?>
                </p>
            
                <a class="btn btn-orange" href="<?php echo home_url('contactanos') ?>">
                SOLICITA TU COTIZACIÓN
                </a>
                  

                </div>
              </div>
            </div>
          </div>
        </div>
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