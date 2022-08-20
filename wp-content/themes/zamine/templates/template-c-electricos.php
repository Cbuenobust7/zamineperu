<?php
/* Template Name: c-electricos  */

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
      <?php
      echo do_shortcode('[smartslider3 slider="5"]');
      ?>
    </div>
  </div>

  <?php $categories = get_terms('tipos_servicios', ['hide_empty' => false, 'order' => 'DESC']); ?>

  <div class="products py-5">
    <div class="container">
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
      
      </div>
    </div>
  </div>
  <div class="container">
  
  <section class="bg-white py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="<?php echo get_template_directory_uri(); ?>/images/hitachi-product.png" /></div>

                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <div id="accordion">
                                    
  <?php
            foreach ($servicios as $key => $servicio) {
              
              $lisServices = $servicio['servicios'];
              
              $list  = [];
              foreach ($lisServices as $k => $ser) {
                $name = $ser->post_title;
                $idSer = $ser->ID;
                $link = get_the_permalink($idSer);
                $list[] = "<li> <a href='$link'>$name</a> </li>";  
                
                echo '<div class="card">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    '. $name .'         
                </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                <li>POTENCIA: im pariatur cliche reprehenderit.</li>
                <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                <li><a href="" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></li>
                     <!-- Button trigger modal -->
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                Solicitar Cotización
                </button>                                      
            </div>
                </div>
            </div>
            
            </div>
            </div> ';

          }
             
            }   ?>

 
                                      
                                       
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

  

  </div>
 

</div>
<?php get_footer(); ?>