
<?php 
/* Template Name: Contactanos  */
get_header(); ?>

<div class="page-contact">
<?php get_template_part('components/banner-logo');?>

<div class="banner banner-2">
   <!-- <div class="container">
    <a href="< ?php echo home_url(); ?>">
      <img src="< ?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
    </a> 
  </div> -->
  <img src="<?php echo get_the_post_thumbnail_url() ?>">
  <div class="overlay">
      <?php
          echo do_shortcode('[smartslider3 slider="18"]');
      ?>    
    </div>
</div>
 
   <div class="wrapper py-5">
    <div class="container-fluid">
      <div class="row col-md-10 mx-auto">
        <div class="col-lg-5">
          <div class="bar bar--orange my-4"></div>
          <p>Déjenos sus consultas y nos pondrémos en<br>contacto contigo</p>
          <div>
          <--!get_template_part('templates/common/test');

          <?php
     echo do_shortcode('[wpforms id="1607"]' ); 
          

?>          </div>
        </div>
        <div class="col-lg-7 pt-5 pr-lg-0">
          <img src="<?php echo get_field('imagen'); ?>" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="locals d-none">
    <div class="wrapper py-5">
      <div class="container-fluid">
        <div class="bar bar--orange my-4"></div>
        <h2 class="subtitle-orange">Locales</h2>

        <div class="row">
          <div class="col-lg-4">
            <p class="color-orange ml-md-3">+ OFICINA ADMINISTRATIVA<br>Y COMERCIAL</p>
          </div>
          <div class="col-lg-4">
            <h6 class="color-orange">Dirección:</h6>
            <div class="contact-details">Av. La Encalada Nro. 1420 Edifico Polo Hunt II<br>Oficina 801 - Surco, Lima – Perú</div>
            <h6 class="color-orange">Teléfono:</h6>
            <div class="contact-details">+51 (01) 4365442 – Anexo 105</div>
            <h6 class="color-orange">E-mail:</h6>
            <div class="contact-details">ventas@zamineperu.com<br>cotizaciones@zamineperu.com</div>
            <h6 class="color-orange">Horario:</h6>
            <div class="contact-details">Lun – Vie: 8:00 – 18:00</div>
          </div>
          <div class="col-lg-4">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>


