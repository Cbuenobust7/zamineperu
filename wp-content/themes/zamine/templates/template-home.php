<?php
/* Template Name: Home  */
get_header();
$lang = get_bloginfo("language");
?>
<style>
.transparenciaHome {
  background: #d1cfcbc7;
}
</style>
<?php
global $cards;
$banners_query = new WP_Query([
  'post_type'      => 'banner',
  'posts_per_page' => -1,
  'order'          => 'ASC',
]);

if ($banners_query->have_posts()) :
  while ($banners_query->have_posts()) : $banners_query->the_post();
    // Tu código para mostrar cada banner aquí
  endwhile;
  wp_reset_postdata();
endif;
?>

<?php get_template_part('components/banner-logo');?>

<div class="page-home">
  <?php the_content(); ?>

    <div class="news--others" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-us-bg.webp');">
    <div class="transparenciaHome py-1">
      <div class="">
        <div class="container">
            <?php $isos = get_field("imagen_isos");?>
            <?php $urlIsos = get_field("url_isos_nosotros");?>
            <a class="d-flex flex-wrap justify-content-center" href="<?php echo ($urlIsos)?>"><img id="img2" src="<?php echo ($isos[url])?>" class="img-fluid isos" onmouseover="Cambiar('img2')" onmouseout="this.src='<?php echo ($isos[url])?>';"></a>
          </div>
        </div>
    </div>
</div>
  <?php
  $cards = get_field("tarjetas-informativas-3");
  include get_template_directory() . '/components/cards-home.php';
  ?>

  <?php
  $ID = get_the_ID();
  $ntitle = get_post_meta($ID, 'titulo_nosotros', true);
  $nsubtitle = get_post_meta($ID, 'subtitulo_nosotros', true);
  $ntext = get_post_meta($ID, 'contenido_nosotros', true);
  $nimg_id = get_post_meta($ID, 'image_nosotros', true);
  $nimg_url = wp_get_attachment_url($nimg_id);
  ?>

  <?php
  $cards = get_field("tarjetas-informativas");
  include get_template_directory() . '/components/cards-home.php';
  ?>

  <?php
  $cards = get_field("tarjetas");
  include get_template_directory() . '/components/cards-home.php';
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
        <?php if ($lang == 'es-PE'){
        echo '<h2 class="subtitle-white text-center pb-5">ÚLTIMAS NOVEDADES</h2>';
        }?>
        <?php if ($lang == 'en-US') { 
        echo '<h2 class="subtitle-white text-center pb-5">NEWS</h2>';
        }?>
        <div class="container">
          <div class="row">
            <?php foreach ($news as $new) : ?>
              <div class="col-md-6 col-lg-3">
               <?php $thumbnail_url = get_the_post_thumbnail_url($new);
                    if ($thumbnail_url) : ?>
                      <a class="news--others--bg" style="background-image: url(<?php echo esc_url($thumbnail_url); ?>)" href="<?php echo esc_url(get_the_permalink($new)); ?>">
                    <?php endif; ?>
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
            
            <a href="<?php echo home_url('/novedades'); ?>" class="btn btn-plomo px-4">
            <?php if ($lang == 'es-PE'){ echo ('ver más novedades'); }
                  else { echo ('see more news'); }?> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $isosWhite = get_field("imagen_secundaria_isos");?>
<script>
var isosWhiteUrl = <?php echo wp_json_encode($isosWhite['url']); ?>;
function Cambiar(imagen){
  document.getElementById(imagen).src = isosWhiteUrl;
}

</script>


<?php get_footer(); ?>
