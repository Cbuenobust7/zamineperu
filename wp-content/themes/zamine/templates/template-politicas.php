<?php 
/* Template Name: Políticas  */

get_header();
$lang = get_bloginfo("language"); ?>

<div class="page-politics">

  <div class="banner banner-2">
    <div class="container">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-fluid logo-banner">
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/aboutus.png">
    <div class="overlay"></div>
  </div>
  <?php 
    $items = query_posts( [
      'post_type'=> 'politicas',
      'posts_per_page' => -1,
      'order' => 'ASC'
    ]);
  ?>

  <div class="wrapper py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 mx-auto">
            
<!-- DESDE AQUÍ  PARA ABAJO  PUEDES EDITAR LA VERSIÓN EN ESPAÑOL´-->

    <?php if ($lang == 'es-PE') { ?>        
          <h2 class="subtitle-orange text-center pb-5">POLÍTICAS DE PRIVACIDAD</h2>
			<div class="info container">
    <div class="wrapper text-center">
      
<p class="has-text-align-center">Zamine Service Peru S.A.C. (en adelante, ZAP), asegura la reserva y protección de los datos personales proporcionados voluntariamente al momento de establecer un vínculo con la empresa, a través del respeto a la privacidad y protección de la confidencialidad de los datos personales.
</p>

  <?php } ?>


<!--  DESDE AQUÍ  PARA ABAJO  PUEDES EDITAR LA VERSIÓN EN INGLÉS -->

<?php if ($lang == 'en-US') { ?>
    <h2 class="subtitle-orange text-center pb-5">POLÍTICAS DE PRIVACIDAD</h2>
			<div class="info container">
    <div class="wrapper text-center">
      
<p class="has-text-align-center">Zamine Service Peru S.A.C. (en adelante, ZAP), asegura la reserva y protección de los datos personales proporcionados voluntariamente al momento de establecer un vínculo con la empresa, a través del respeto a la privacidad y protección de la confidencialidad de los datos personales.
</p>

  <?php } ?>




    </div>
  </div>
          <div class="row mb-4">
            <?php foreach ($items as $k => $item): ?>
              <div class="col-md-6 col-lg-4 items--icon">
                <a href="#content-<?php echo $k?>">
                  <div class="items--icon--image">
                    <img src="<?php echo get_the_post_thumbnail_url($item)?>" class="img-fluid">
                  </div>
                  <div><?php echo ($k+1)?>. <?php echo $item->post_title?></div>
                </a>
              </div>
            <?php endforeach;?>
          </div>

          <div class="items mt-5">
            <?php foreach ($items as $k => $item): ?>
              <div class="items--item" id="content-<?php echo $k?>">
                <h3><?php echo ($k+1)?>. <?php echo $item->post_title?></h3>
                <div class="py-3 p-md-5">
                  <?php echo $item->post_content?>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php get_footer(); ?>