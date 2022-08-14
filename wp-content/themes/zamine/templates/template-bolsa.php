<?php
/* Template Name: Bolsa  */
get_header(); ?>
<div class="page-bolsa">
  <?php include get_template_directory() . '/components/header-page.php'; ?>
  <div class="container my-5">
    <div class="row">
      <div class="offset-lg-2 col-lg-8 text-center">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
  <div class="mb-5">
    <?php
    global $cards;
    $cards = get_field("tarjetas-informativas");
    include get_template_directory() . '/components/cards.php';
    //include locate_template(get_template_directory().'/components/cards.php', false, false); 
    ?>
  </div>
</div>
<?php get_footer(); ?>