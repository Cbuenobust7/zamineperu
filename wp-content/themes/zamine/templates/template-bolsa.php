<?php
/* Template Name: Bolsa  */
get_header(); ?>
<div class="page-bolsa">
<div class="banner banner-2">
   <!-- <div class="container">
    <a href="< ?php echo home_url(); ?>">
      <img src="< ?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
    </a> 
  </div> -->
  <img src="<?php echo get_the_post_thumbnail_url() ?>">
  <div class="overlay">
  <?php
        echo do_shortcode('[smartslider3 slider="19"]');
        ?> 
  </div>
</div>  <div class="container my-5">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 text-center">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
    <?php
    global $cards;
    $cards = get_field("tarjetas-informativas");
    include get_template_directory() . '/components/cards.php';
    //include locate_template(get_template_directory().'/components/cards.php', false, false); 
    ?>
</div>
<?php get_footer(); ?>