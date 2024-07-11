
<?php get_header();

echo '<div style="display: none;">' . do_shortcode('[smartslider3 slider="41"]') . '</div>';

$news_type = get_field('news_type');
if ($news_type == "news") {
  $title = "Noticia";
  $icon = "today";
} else {
  $title = "Evento";
  $icon = "article";
}
?>

<div class="page-news-single">
  <div class="info py-5">
    <div class="wrapper px-5">
    </div>
  </div>
  <div class="wrapper">
    <div class="news-single--category">
      <span class="material-icons material-icons-outlined">
        <?php echo $icon; ?>
      </span>

      <h5>
        <?php echo $title; ?>
      </h5>
    </div>
    <?php the_title('<h2 class="news-single--title">', '</h2>'); ?>
  </div>
  <div class="news-single--item py-5 mb-3">
    <div class="wrapper">
      <div class="container">
        <div class="row flex-column-reverse flex-md-row">
          <div class="col-md-6 mb-3">
            <div class="news-single--details pt-2">
              <div class="news-single--body pr-md-4">
                <div class="date"><?php echo get_the_date('d \d\e F Y'); ?></div><br>
                <?php the_content(); ?>
              </div>
              <div class="text-right">
                <a href="<?php echo home_url('novedades'); ?>" class="news-single--back mr-5">
                  <i class="fa fa-angle-left"></i>
                  <span>Regresar</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 px-md-0">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(null, ['class' => 'img-fluid']); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  $pid = get_the_ID();
  $others = query_posts([
    'post_type' => 'news',
    'posts_per_page' => 4,
    'post__not_in' => [$pid],
    'orderby'   => 'date',
    'order'     => 'DESC',
  ]);
  ?>

  <?php if (!empty($others)) : ?>
    <div class="news--others py-5">
      <div class="wrapper">
        <div class="bar bar--orange my-4 mx-auto"></div>
        <h2 class="subtitle-orange text-center pb-5">ÚLTIMAS NOVEDADES</h2>
        <div class="container-fluid">
          <div class="row">
            <?php foreach ($others as $other) : ?>
              <div class="col-md-3">
                <a class="news--others--bg" style="background-image: url(<?php echo get_the_post_thumbnail_url($other) ?>)" href="<?php echo get_the_permalink($other) ?>">
                  <div class="news--others--date">
                    <div class="news--others--day"><?php echo get_the_date('d', $other); ?></div>
                    <div class="news--others--month text--uppercase"><?php echo get_the_date('M y', $other); ?></div>
                  </div>
                  <div class="news--others--details">
                    <div class="news--others--details-container">
                      <div>
                        <span class="material-icons material-icons-outlined">
                          article
                        </span>
                      </div>
                      <div class="news--others--text"><?php echo $other->post_title ?></div>
                      <span>
                        <i class="fa fa-plus-square"></i>
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    </div>
    <?php get_footer(); ?>