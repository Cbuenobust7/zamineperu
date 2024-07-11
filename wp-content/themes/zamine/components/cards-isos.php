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
      $titulo = $card['titulo'];
      $mensaje = $card['mensaje'];
      $enlace = $card['pdf'];
      $enlace2 = $card['pdf2'];
      $enlace3 = $card['pdf3'];
      $icono = isset($card['icono']) ? $card['icono'] : '';
      $fondo = $card['fondo'];
      $nombre_boton = $card['nombre_boton'];
      $nombre_boton2 = $card['nombre_boton2'];
      $nombre_boton3 = $card['nombre_boton3'];
      $dbutton = $nombre_boton == ''? 'd-none': 'd-block';
      $dbutton2 = $nombre_boton2 == '' ? 'd-none' : 'd-block';
      $dbutton3 = $nombre_boton3 == '' ? 'd-none' : 'd-block';
      $dIcon = $icono == ''? 'd-none': 'd-block';

      if ($nombre_boton2) {
        $boton2 = "<div class='mt-4 $dbutton2'>
                      <a  href='$enlace2' class='btn btn-orange px-5'>$nombre_boton2</a>
                   </div>";
      }
      if ($nombre_boton3) {
        $boton3 = "<div class='mt-4 $dbutton3'>
                      <a  href='$enlace3' class='btn btn-orange px-5'>$nombre_boton3</a>
                   </div>";
      }

      echo "
      <div class='$class p-0' style='background-size: cover; background-position: center; background-image:url($fondo)'>
          <div class='card-info' >
              <div class='card-info__content'>
                  <div class='$dIcon text-center mb-4'>
                      <img src='$icono'/>
                  </div>
                  <h3 class='card-info__title'>$titulo</h3>
                  <p class='card-info__message text-justify'>
                      $mensaje
                  </p>
                  <div class='mt-4 $dbutton'>
                      <a  href='$enlace' class='btn btn-orange px-5'>$nombre_boton</a>
                  </div>"
                      .(isset($boton2) ? $boton2 : "").(isset($boton3) ? $boton3 : "")."
              </div>
          </div>
      </div>
      ";
    }
    ?>
  </div>
</div>
