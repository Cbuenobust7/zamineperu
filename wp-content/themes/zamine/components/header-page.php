<?php
  global $notTitle;

?>
<div class="banner banner-2">
  <div class="container">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
    </a>
  </div>
  <img src="<?php echo get_the_post_thumbnail_url() ?>">
  <div class="overlay">
    <h1>
      <?php $notTitle == true? '': the_title(); ?>
    </h1>
  </div>
</div>