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
?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">

    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
    <div class="overlay">
      <h1>Hitachi</h1>
    </div>
  </div>
  <div class="title-orange">
    <h2>Mining</h2>
  </div>
  <!-- 
  <div class="info">
    <div class="wrapper text-center py-5 top-icon no-p-b">
      < ?php the_content(); ?>
    </div>
  </div> -->

  <?php $categories = get_terms('tipos_servicios', ['hide_empty' => false, 'order' => 'DESC']); ?>

  <div class="products py-5">
    <div class="container-fluid">
      <div class="wrapper d-flex mb-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            <?php the_title(); ?>
          </li>
        </ol>
        <div class="ml-auto search">
          <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
          <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div id="accordionServices" class="card-navigation">


            <?php
            /*
$args = array(
  'taxonomy'     => 'tipos_servicios',
  'hierarchical' => true,
  'title_li'     => '',
  'hide_empty'   => true
);
*/
            ?>

            <?php
            foreach ($servicios as $key => $servicio) {
              $idCard = "page$key";
              $idSection = "section$key";
              $idInfo = "info$key";
              $nombre = $servicio['nombre'];
              $lisServices = $servicio['servicios'];
              if (count($servicios) == 0) {
                continue;
              }
              $list  = [];
              foreach ($lisServices as $k => $ser) {
                $name = $ser->post_title;
                $idSer = $ser->ID;
                $link = get_the_permalink($idSer);
                $list[] = "<li> <a href='$link'>$name</a> </li>";
              }
              $elements = "<ul>" . implode("", $list) . "</ul>";
              $classSection = $key == 0 ? "collapse show" : 'collapse';
              $classSectionIcon = $key == 0 ? "" : 'collapsed';
              //echo json_encode($lisServices);
              echo <<<EOT
                  <div class="card">
                    <div class="card-header" id="$idCard">
                      <h5 class="mb-0">
                        <button class="btn" data-toggle="collapse" data-target="#$idSection" 
                        aria-expanded="true" aria-controls="$idSection">
                          $nombre
                        </button>
                      </h5>
                     
                    </div>
                    <div id="$idSection" class="$classSection" aria-labelledby="$idCard" data-parent="#accordionServices" data-info="$idInfo" data-header="$idCard">
                      <div class="card-body">
                        $elements
                      </div>
                    </div>
                  </div>
                EOT;
            }


            ?>

          </div>
        </div>
        <div class="col-md-8">
          <div class="">
            <?php
            foreach ($servicios as $key => $servicio) {
              $idInfo = "info$key";
              $nombre = $servicio['nombre'];
              $lisServices = $servicio['servicios'];
              echo "<div id='$idInfo' class='section-services'> <div class='row'>";
              foreach ($lisServices as $k => $ser) {
                $name = $ser->post_title;
                $idSer = $ser->ID;
                $link = get_the_permalink($idSer);
                $image = get_the_post_thumbnail_url($idSer);
                echo <<<EOT
                  <div class='col-md-6 col-lg-4'>
                    <a class='card-service' href='$link'>
                      <div class='card-service__image' style="background-image: url($image)">
                      
                      </div>
                      <div class='card-service__info'>
                        <div class='card-service__info__name'>
                          $name
                        </div>
                        <div class='card-service__info__icon'>
                          <span class="material-icons">
                          add
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>
                  EOT;
              }
              echo "</div></div>";
            }
            ?>

            <div class="container">

              <div class="col-md-8 pt-4" style="background: #fff; border-bottom: 1px solid #fff;">
                <div id="listaItems" class="row"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="brands">
        <div class="wrapper py-5">
          <div class="container-fluid">
            <h2 class="subtitle-orange text-center">NUESTRAS MARCAS</h2>

            <?php
            $brands = query_posts([
              'post_type' => 'marcas',
              'posts_per_page' => -1,
              'orderby'   => 'date',
              'order'     => 'ASC',
            ]);
            ?>
            <div class="row align-items-center">
              <?php foreach ($brands as $k => $brand) : ?>
                <div class="col-md-3"><img src="<?php echo get_the_post_thumbnail_url($brand) ?>" class="d-block img-fluid" style="max-width: 220px;"></div>
              <?php endforeach; ?>
            </div>

          </div>
        </div>
      </div>

    </div>


    </script>
    <?php get_footer(); ?>