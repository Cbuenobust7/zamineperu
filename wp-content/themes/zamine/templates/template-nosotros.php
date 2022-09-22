<?php
/* Template Name: Nosotros  */
get_header();
global $cards;
$cards = get_field("tarjetas-informativas");
?>
<?php
$titulos = get_field('titulos_secciones_nosotros');
if( $titulos ): ?>

    

<html>
    <head>

<div class="page-about-us">

  <div class="banner banner-2">    
  <?php get_template_part('components/banner-logo');?>
    
  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
      <?php
          echo do_shortcode('[smartslider3 slider="16"]');
      ?>    
    </div>
  </div>

  <div class="wrapper pt-5">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-1 col-lg-6 top-logo">
          <!--img src="<?php echo get_template_directory_uri(); ?>/images/logoo-black.png" class="img-fluid mb-4"-->
          <!--img src="/wp-content/uploads/2022/05/logo-zamine1.png" class="img-fluid mb-4"-->
			<h3 class="subtitle-orange">

              <span class="font-weight-bold"><?php echo esc_html( $titulos['titulo_seccion_1'] ); ?></span><br>
            </h3>
          <div class="bar bar--orange my-4"></div>
          <div class="pr-md-4 text-justify">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-lg-4 pt-5 px-lg-0">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="page-we__timelight py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="offset-lg-1 col-lg-11">
          <div class="bar bar--orange my-4"></div>
          <h2 class="subtitle-orange"><?php echo esc_html( $titulos['titulo_seccion_2'] ); ?></h2>
        </div>
      </div>


    </div>
    <div class="container-fluid">
      <div class="content-card-timelines">
        <button class="content-card-timelines__btn content-card-timelines__btn--left">
          <span class="material-icons">
            keyboard_arrow_left
          </span>
        </button>
        <div class="content-card-timelines__content">
          <?php
          $timeline = get_field("timeline");
          $title = get_the_title();
          if(!is_array($timeline)) {
            $timeline = [];
          }
          foreach ($timeline as $key => $value) {
            $desde = $value['desde'];
            $hasta = $value['hasta'];
            $desdeGrande = $value['desde_grande'];
            $hastaGrande = $value['hasta_grande'];
            $imagen = $value['imagen'];
            $detalle = $value['detalle'];
            echo '
            <div class="card-timeline">
              <div class="card-timeline__dates">
                <div class="card-timeline__dates__data">
                  '.$desdeGrande.'
                </div>
                <div class="card-timeline__dates__data">
                  '.$hastaGrande.'
                </div>
              </div>
              <!-- <div class="card-timeline__detail">  -->
                <div style="padding-left:5px">
                <!-- <img class="card-timeline__detail__image" src="'.$imagen.'" alt="'.$title.'">  -->
                <img src="'.$imagen.'" alt="'.$title.'">
                <div class="card-timeline__detail__title">
                  ',$desde . $hasta.'
                </div>
                <div>
                  '.$detalle.'
                </div>
              </div>
            </div>';
          }
          ?>
        </div>
        <button class="content-card-timelines__btn content-card-timelines__btn--right">
          <span class="material-icons">
            keyboard_arrow_right
          </span>
        </button>
      </div>
    </div>
  </div>
</div>

<?php
include get_template_directory() . '/components/cards.php';
?>
<?php
$itemsPrincipals = query_posts([
    'post_type' => 'valores',
    /*'meta_key' => 'tipo_valores',
    'meta_value' => 'principal',*/
    'posts_per_page' => -1,
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'tipo_valores',
            'field' => 'slug',
            'terms' => 'principal'
        )
    )
]);
$itemsGeneral = query_posts([
    'post_type' => 'valores',
    /*'meta_key' => 'tipo_valores',
    'meta_value' => 'general',*/
    'posts_per_page' => -1,
    'order' => 'ASC',
    'tax_query' => array(
        array(
            'taxonomy' => 'tipo_valores',
            'field' => 'slug',
            'terms' => 'general'
        )
    )
]);
?>


<div class="values">
  <div class="wrapper py-5">
    <div class="container">
      <div class="bar bar--orange my-4"></div>
      <h2 class="subtitle-orange mb-5"><?php echo esc_html( $titulos['titulo_seccion_3'] ); ?></h2>
      <div class="d-flex w100 flex-wrap justify-content-center">
        <?php foreach ($itemsGeneral as $item) : ?>
          <div class="app-value">
            <div class="app-value__image">
              <img src="<?php echo get_the_post_thumbnail_url($item->ID) ?>" class="img-fuid">
            </div>

            <h5 class="app-value__title"><?php echo $item->post_title ?></h5>
            <div class="app-value__message"><?php echo $item->post_content ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="d-flex w100 flex-wrap justify-content-center">
        <?php foreach ($itemsPrincipals as $item) : ?>
          <div class="app-value">
            <div class="app-value__image">
              <img src="<?php echo get_the_post_thumbnail_url($item->ID) ?>" class="img-fuid">
            </div>

            <h5 class="app-value__title"><?php echo $item->post_title ?></h5>
            <div class="app-value__message"><?php echo $item->post_content ?></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="values--container d-flex flex-wrap justify-content-center">

      </div>
    </div>
  </div>
</div>

  <div id="isos">
    <?php
    $cards = get_field("tarjetas");
      include get_template_directory() . '/components/cards-isos.php';
      ?>
      <?php
      $news = query_posts([
        'post_type' => 'news',
        'posts_per_page' => 4,
        'orderby'   => 'date',
        'order'     => 'DESC',
      ]);
    ?>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>