<?php
/* Template Name: Terminos  */
get_header(); ?>
<div class="page-terms">

  <?php 
  global $notTitle;
  $notTitle = true;
  include get_template_directory() . '/components/header-page.php'; ?>

  <div class="wrapper py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mx-auto justify">
          <?php the_title('<h2 class="subtitle-orange text-center pb-5"">', '</h2>'); ?>
          <div class="px-md-5"><?php the_content(); ?></div>
          <div id="accordion" class="accordion mt-5 px-md-5">

            <?php
            $items = query_posts([
              'post_type' => 'terminos',
              'posts_per_page' => -1,
              'order' => 'ASC'
            ]);
            ?>

            <?php foreach ($items as $k => $item): ?>
              <div class="accordion--item">
                <h5 class="mb-0">
                  <a class="d-flex collapsed" data-toggle="collapse" data-target="#term-<?php echo ($k+1)?>" aria-expanded="true" aria-controls="term-<?php echo ($k+1)?>">
                    <?php echo ($k+1)?>. <?php echo $item->post_title?>
                    <i class="ml-auto fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                </h5>
                <div id="term-<?php echo ($k+1)?>" class="collapse py-3" aria-labelledby="headingOne" data-parent="#accordion">
                  <?php echo $item->post_content?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>