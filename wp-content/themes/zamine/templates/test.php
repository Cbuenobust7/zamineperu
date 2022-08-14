<?php
/* Template Name: Services  */
get_header();
$idIcono = get_field("icono_page");
$servicios = get_field('servicios');
if (!$servicios) {
  $servicios = [];
}
$servicios = getServicios();
//echo json_encode($servicios);
//exit();
//wp_get_attachment_image


var_dump($servicios); ?>
<?php get_footer(); ?>