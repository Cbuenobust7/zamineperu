<?php
/* Template Name: Novedades intercalado  */
get_header(); 
$lang = get_bloginfo("language"); 


$idPage = get_the_ID();
$url = get_permalink($idPage);
$total = (new WP_Query(['post_type' => 'news']))->found_posts;
$page = get_query_var('paged') ? get_query_var('paged') : 1;
$news_type = $_GET['news_type'];
$classAll = $classEvent = $classNews = '';
if ($news_type == 'news') {
  $classNews = "active";
} else if ($news_type == 'event') {
  $classEvent = "active";
} else {
  $classAll = "active";
}
$urlAll = "$url?paged=1";
$urlNews = "$url?paged=1&news_type=news";
$urlEvents = "$url?paged=1&news_type=event";
$query = [
  'post_type' => 'news',
  'posts_per_page' => 5,
  'orderby'   => 'date',
  'order'     => 'DESC',
  'paged' => $page
];
if ($classAll == '') {
  $query['meta_key'] = "news_type";
  $query['meta_value'] = $news_type;
}
$news = query_posts($query);
?>


<style>
@font-face {
  font-family: openSans-zamine;
  font-style: normal;
  font-display: swap;
  src: url(https://www.zamineperu.com/open-sans-v27-latin-300.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
}

@font-face {
  font-family: 'open sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url(https://www.zamineperu.com/open-sans-v27-latin-300.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
}

@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 200;
  font-display: swap;
  src: url(https://www.zamineperu.com/open-sans-v27-latin-300.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F
}



.page-news .news-list--item--image div {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-size: cover; /* Ajusta el tamanio para cubrir completamente el contenedor */
  background-position: center; /* Centra la imagen de fondo */
  background-repeat: no-repeat; /* Evita que se repita la imagen de fondo */
}

.page-news .news-list--item:nth-child(2n+1) .news-list--item--content, .page-product .swiper-pagination-bullet-active {
  background: #fff;
  color: #000;
}
.news-list--item--month,  {
    color: #f47b20 ;
}

.page-news .news-list--item:nth-child(2n+1) .news-list--item--title {
  color: #000;
}

.page-news .news-list--item:nth-child(2n+1) .news-list--item--day, .page-news .news-list--item:nth-child(2n+1) .news-list--item--month {
  color: #f47b20;
}

.page-news .news-list--item--title {
  font-weight: 600;
  font-size: 32px;
  color: #000;
  margin-bottom: 24px;
  line-height: 1;
}

.news-list--item--day, .page-news .news-list--item:nth-child(2n+1)  .page-news .news-list--item:nth-child(2n+1) .news-list--item--title {
  color: #000;
}
</style>

<div class="page-news">
  <div class="banner banner-2">
    <img src="<?php echo get_the_post_thumbnail_url() ?>">
    <div class="overlay">
      <?php
      if ($lang == 'en-US') { 
        echo do_shortcode('[smartslider3 slider="23"]'); }
      if ($lang == 'es-PE') { 
        echo do_shortcode('[smartslider3 slider="13"]'); }
      ?>
    </div>
  </div>

  <div class="wrapper featured py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="bar bar--orange my-4 mx-auto"></div>
          <h2 class="subtitle-orange text-center pb-5">NOTICIAS DESTACADAS</h2>
          <div class="totals text-center"><?php echo $total ?> Entradas</div>

          <div class="swiper-container swiper-news pb-5">
            <div class="swiper-wrapper">
              
       
              <?php foreach ($featured as $f) : ?>
                <div class="swiper-slide">
                  <a class="news--item px-5" href="<?php echo get_the_permalink($f) ?>">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="news--item--image mb-2">
                          <img src="<?php echo get_the_post_thumbnail_url($f) ?>" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="news--item--content px-lg-4">
                          <div class="news--item--day"><?php echo get_the_date('d', $f); ?></div>
                          <div class="news--item--month text-uppercase"><?php echo get_the_date('M', $f); ?></div>
                          <div class="news--item--title"><?php echo $f->post_title ?></div>
                          <div class="news--item--blurb"><?php echo $f->post_excerpt ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
              
              ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div><div class="container news-list">
  <?php foreach ($news as $k => $new) : ?>
    <div class="news-list--item wrapper">
      <div class="row">
        <!-- Columna de la imagen -->
        <div class="col-md-6 news-list--item--image">
          <div class="img-fluid lazyloaded" style="background-image: url(<?php echo get_the_post_thumbnail_url($new) ?>)">
            <div></div>
          </div>
        </div>

        <!-- Columna del contenido -->
        <div class="col-md-6 news-list--item--content">
          <div class="px-lg-4">
            <div class="news-list--item--day"><?php echo get_the_date('d', $new); ?></div>
            <div class="news-list--item--month text-uppercase"><?php echo get_the_date('M', $new); ?></div>
            <a class="news-list--item--title" href="<?php echo get_the_permalink($new) ?>"><?php echo $new->post_title ?></a>
            <div class="news-list--item--blurb"><?php echo $new->post_excerpt ?></div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  <nav class="wrapper py-5">
    <?php zamine_pagination(); ?>
  </nav>
</div>


  <div class="wrapper">
    <div class="categories text-center my-5">
      <a href="<?php echo $urlAll; ?>" class="<?php echo $classAll; ?>">Todas las noticias</a>
      <a href="<?php echo $urlNews; ?>" class="<?php echo $classNews; ?>">Noticias</a>
      <a href="<?php echo $urlEvents; ?>" class="<?php echo $classEvent; ?>">Eventos</a>
    </div>
  </div>

</div>

<?php get_footer(); ?>
