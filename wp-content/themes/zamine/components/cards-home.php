<?php
global $cards;
$count = count($cards);
if ($count == 1) {
  $class = "col-12";
} else if ($count == 2) {
  $class = "col-sm-6 col-12";
} else if ($count == 3) {
  $class = "col-md-4 col-sm-12";
} else {
  $class = "col-md-3 col-sm-6";
}
?>
<div class="container-fluid">
  <div class="row">
    <?php
    foreach ($cards as $key => $card) {
      $titulo = isset($card['titulo']) ? $card['titulo'] : '';
      $mensaje = isset($card['mensaje']) ? $card['mensaje'] : '';
      $enlace = isset($card['enlace']) ? $card['enlace'] : '';
      $icono = isset($card['icono']) ? $card['icono'] : '';
      $fondo = isset($card['fondo']) ? $card['fondo'] : '';
      $nombre_boton = isset($card['nombre_boton']) ? $card['nombre_boton'] : '';
      $dbutton = $nombre_boton == '' ? 'd-none' : 'd-block';
      $dIcon = $icono == '' ? 'd-none' : 'd-block';
      $logo_hitachi = isset($card['logo_hitachi']) ? $card['logo_hitachi'] : false;

      $logoHitachi = $logo_hitachi ? "<img class='logo-hitachi-cards' src='https://zamineperu.com/wp-content/themes/zamine/images/logo-hitachi-banner.webp'>" : '';

      echo "<div class='$class p-0' style='background-size: cover; background-position: center; background-image:url($fondo)'>
        $logoHitachi
        <div class='card-info'>
          <div class='card-info__content'>
            <div class='$dIcon text-center mb-4'>
              <img src='$icono'/>
            </div>
            <h3 class='card-info__title'>$titulo</h3>
            <p class='card-info__message text-justify'>$mensaje</p>
            <div class='mt-4 $dbutton'>
              <a  href='$enlace' class='btn btn-plomo px-5'>$nombre_boton</a>
            </div>
          </div>
        </div>
      </div>";
    }
    ?>
  </div>
</div>
