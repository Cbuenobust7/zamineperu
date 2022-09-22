<?php get_header(); ?>
<div class="page-news">
  <div class="banner banner-2">
    <div class="container">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
      </a>
    </div>
    <img src="<?php echo get_the_post_thumbnail_url()?>">
    <div class="overlay">
      <h1>Novedades</h1>
    </div>
  </div>

  <div class="wrapper featured py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="bar bar--orange my-4 mx-auto"></div>
          <h2 class="subtitle-orange text-center pb-5">NOTICIAS DESTACADAS</h2>

          <div class="swiper-container swiper-news pb-5">
            <div class="swiper-wrapper py-5">
              <?php 
                $featured = query_posts( [
                  'post_type'=> 'news',
                  'posts_per_page' => 4,
                  'meta_key' => 'featured',
                  'meta_value' => 1,
                  'orderby'   => 'date',
                  'order'     => 'DESC',
                ]);
              ?>
              <?php foreach ($featured as $f): ?>
                <div class="swiper-slide">
                  <a class="news--item px-5" href="<?php echo get_the_permalink($f) ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="news--item--image px-4">
                          <img src="<?php echo get_the_post_thumbnail_url($f)?>" class="img-fluid">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="news--item--content px-4">
                          <div class="news--item--day"><?php echo get_the_date('d', $f);?></div>
                          <div class="news--item--month text-uppercase"><?php echo get_the_date('M', $f);?></div>
                          <div class="news--item--title"><?php echo $f->post_title ?></div>
                          <div class="news--item--blurb"><?php echo $f->post_excerpt ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
  $total = (new WP_Query( ['post_type' => 'news'] ))->found_posts;

  $news = query_posts( [
    'post_type'=> 'news',
    'posts_per_page' => 4,
    'orderby'   => 'date',
    'order'     => 'DESC',
    'paged' => $_GET['paged']?: 1
  ]);
?>

  <div class="wrapper">
    <div class="categories text-center my-5">
      <a href="#" class="active">Todas las noticias</a>
      <a href="#">Noticias</a>
      <a href="#">Eventos</a>
    </div>
    <div class="totals text-center my-5"><?php echo $total?> Entradas</div>
  </div>
  <div class="container-fluid news-list">
    <?php foreach ($news as $k => $new): ?>
      <div class="news-list--item wrapper">
        <div class="row">
          <?php if($k%2 == 0): ?>
            <div class="col-md-6 news-list--item--image" style="background-image: url(<?php echo get_the_post_thumbnail_url($new)?>)">
              <div></div>
            </div>
          <?php endif;?>
          <div class="col-md-6 news-list--item--content">
            <div class="px-4">
              <div class="news-list--item--category">
                <?php if (get_post_meta($new->ID, 'news_type', true) == 'event') : ?>
                  <img src="<?php echo get_template_directory_uri()?>/icons/important.png" class="img-fluid">
                  <span>Eventos</span>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri()?>/icons/news.png" class="img-fluid">
                  <span>Noticias</span>
                <?php endif; ?>
              </div>
              <div class="news-list--item--day"><?php echo get_the_date('d', $new);?></div>
              <div class="news-list--item--month text-uppercase"><?php echo get_the_date('M', $new);?></div>
              <a class="news-list--item--title" href="<?php echo get_the_permalink($new) ?>"><?php echo $new->post_title ?></a>
              <div class="news-list--item--blurb"><?php echo $new->post_excerpt ?></div>
            </div>
          </div>
          <?php if($k%2 == 1): ?>
            <div class="col-md-6 news-list--item--image" style="background-image: url(<?php echo get_the_post_thumbnail_url($new)?>)">
              <div></div>
            </div>
          <?php endif;?>
        </div>
      </div>
    <?php endforeach; ?>
    <nav class="wrapper py-5">
      <?php zamine_pagination() ?>
    </nav>
  </div>
</div>
<?php get_footer(); ?>
