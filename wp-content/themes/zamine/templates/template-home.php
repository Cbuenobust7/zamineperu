<?php
/* Template Name: Home  */
get_header();
?>

<?php
global $cards;
$banners = query_posts([
  'post_type' => 'banner',
  'posts_per_page' => -1,
  'order' => 'ASC'
]); ?>

<?php get_template_part('components/banner-logo');?>
<div class="page-home">
  <?php the_content(); ?>

  <!--<nav class="navbar navbar-expand-lg navbar-dark separator">
    
  </nav>  -->
 

  <div class="news--others" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-us-bg.webp');">
    <div class="about-us--overlay py-1">
      <div class="">
        <div class="container">
            <?php $isos = get_field("imagen_isos");?>
            <?php $urlIsos = get_field("url_isos_nosotros");?>
            <a class="d-flex flex-wrap justify-content-center" href="<?php echo ($urlIsos)?>"><img id="img2" src="<?php echo ($isos[url])?>" class="img-fluid isos" onmouseover="Cambiar('img2')" onmouseout="this.src='<?php echo ($isos[url])?>';"></a>
          </div>
        </div>
    </div>
</div>
  <!--div class="wrapper px-lg-5 mb-5"-->
  <?php
  $cards = get_field("tarjetas-informativas");
  include get_template_directory() . '/components/cards.php';
  //include locate_template(get_template_directory().'/components/cards.php', false, false); 
  ?>


  <?php
  $ID = get_the_ID();
  $ntitle = get_post_meta($ID, 'titulo_nosotros', true);
  $nsubtitle = get_post_meta($ID, 'subtitulo_nosotros', true);
  $ntext = get_post_meta($ID, 'contenido_nosotros', true);
  $nimg_id = get_post_meta($ID, 'image_nosotros', true);
  $nimg_url = wp_get_attachment_url($nimg_id);

  ?>
  <div class="news--others" style="display:none" background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-us-bg.webp');">
    <div class="about-us--overlay py-5">
      <div class="wrapper pt-5 about-us mb-5 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 px-lg-5">
              <div class="px-md-4">
                <h3 class="text-uppercase">
                  <span class="font-weight-light"><?php echo $ntitle ?></span>
                  <span class="font-weight-bold"><?php echo $nsubtitle ?></span>
                </h3>
                <div class="bar bar--white my-4"></div>
                <div class="pr-md-4 text-justify">
                  <p><?php echo $ntext ?></p>
                  <div class="text-right">
                    <a href="/nosotros" class="btn btn-plomo px-5 mt-5 nh text-uppercase">
                    <?php echo __('mas información'); ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 pt-5 pr-lg-0">
              <img src="<?php echo $nimg_url ?>" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $cards = get_field("tarjetas");
  include get_template_directory() . '/components/cards.php';
  ?>
  <?php
  $news = query_posts([
    'post_type' => 'news',
    'posts_per_page' => 4,
    'orderby'   => 'date',
    'order'     => 'DESC',
  ]);
  ?>

  <div class="news--others" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news-bg.webp');">
    <div class="news--others--overlay py-5">
      <div class="wrapper">
        <div class="bar bar--white my-4 mx-auto"></div>
        <h2 class="subtitle-white text-center pb-5">ÚLTIMAS NOVEDADES</h2>
        <div class="container">
          <div class="row">
            <?php foreach ($news as $new) : ?>
              <div class="col-md-6 col-lg-3">
                <a class="news--others--bg" style="background-image: url(<?php echo get_the_post_thumbnail_url($new) ?>)" href="<?php echo get_the_permalink($new) ?>">
                  <div class="news--others--date">
                    <div class="news--others--day"><?php echo get_the_date('d', $new); ?></div>
                    <div class="news--others--month text-uppercase"><?php echo get_the_date('M y', $new); ?></div>
                  </div>
                  <div class="news--others--details">
                    <div class="news--others--details-container">
                      <div>
                        <span class="material-icons material-icons-outlined">
                          article
                        </span>
                      </div>
                      <div class="news--others--text"><?php echo $new->post_title ?></div>
                      <span>
                        <i class="fa fa-plus-square"></i>
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="news--others-more my-4">
            <a href="<?php echo home_url('/novedades'); ?>" class="btn btn-plomo px-4">ver más novedades</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $isosWhite = get_field("imagen_secundaria_isos");?>
<script>
function Cambiar(imagen){
	document.getElementById(imagen).src = '<?php echo ($isosWhite[url])?>';
}
</script>

<?php get_footer(); ?>