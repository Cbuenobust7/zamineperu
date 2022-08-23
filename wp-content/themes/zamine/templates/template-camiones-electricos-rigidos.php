<?php
/* Template Name: Camiones eléctricos y rígidos  */
get_header();

$idIcono = get_field("icono_page");
$servicios = get_field('servicios');
$informacion = get_field("informacion");
$fichasTecnicas = get_field("ficha_tecnica");

if (!$servicios)
{
    $servicios = [];
}
$servicios = getServicios();

//echo json_encode($servicios);
//exit();
//wp_get_attachment_image

?>
<div class="page-services">

<div class="banner banner-2">

    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
    <div class="overlay">
        <?php
echo do_shortcode('[smartslider3 slider="14"]');
?> 
    </div>
  </div>

  <?php $categories = get_terms('tipos_servicios', ['hide_empty' => false, 'order' => 'DESC']); ?>

  <div class="products py-1">
    <div class="container-fluid">
      <div id="productos" class="wrapper d-flex mb-1">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Camiones eléctricos rígidos</li>
        </ol>
        <div class="ml-auto search">
          <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
          <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
        </div>
      </div>


  <div class="bg-white">
                <div class="container">
                    <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="<?php echo get_template_directory_uri(); ?>/images/hitachi-product.png" /></div>

                        <div class="col-lg-8 col-xl-7 col-xxl-6">


  <?php
foreach ($servicios as $key => $servicio)
{

    $lisServices = $servicio['servicios'];

    $list = [];
    foreach ($lisServices as $k => $ser)
    {
        $name = $ser->post_title;
        $content = $ser->post_content;
        $idSer = $ser->ID;
        $link = get_the_permalink($idSer);
        $list[] = "<li> <a href='$link'>$name</a> </li>";

        echo ' 
                          <div class=" text-center text-xl-start">
                            <div id="accordion">
                              <div class="card" style="border-color:#f47b20">
                        
                <div class="card-header btn-orange" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn-orange collapsed" data-toggle="collapse" data-target="#collapse' . $idSer . '" aria-expanded="false" aria-controls="collapseTwo">
                    ' . $name . '         
                </button>
                </h5>
                </div>
                <div id="collapse' . $idSer . '" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body" style="list-style:none">
                <li><h5>' . $name . '</h5></li>
                <li><p>' . $content . '</p></li>
                     <!-- Button trigger modal -->
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                Solicitar Cotización
                </button>                                      
            </div>
                </div>
            </div>
            
            </div>
            </div> 




            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Contáctanos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div class="wrapper py-5">
                <div class="container-fluid">
                  <div class="row col-md-10 mx-auto">
                    <div>
                      <div class="bar bar--orange my-4"></div>
                      <h2 class="subtitle-orange">Escríbenos</h2>
                      <p>Déjenos sus consultas y nos pondrémos en<br>contacto contigo</p>
                      <form class="pr-md-5 contact-form" autocomplete="off">
                        <div class="form-group">
                          <div class="form-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/user.png">
                          </div>
                          <input type="text" name="name" placeholder="Nombres y Apellidos" class="form-control">
                        </div>
                        <div class="form-group">
                          <div class="form-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/email.png">
                          </div>
                          <input type="email" name="email" placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group">
                          <div class="form-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/phone-2.png">
                          </div>
                          <input type="text" name="phone" placeholder="Teléfono" class="form-control">
                        </div>
                        <div class="form-group">
                          <div class="form-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/quill.png" alt="">
                          </div>
                          <input type="text" name="title" placeholder="Asunto" class="form-control">
                        </div> 
                        <div class="form-group">
                          <div class="form-icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/icons/paper-plane.png">
                          </div>
                          <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
                        </div> 
                        <div class="form-checkbox">
                          
                          <input type="checkbox" name="terms" id="terms">
                          <label for="terms">
                            Acepto los <a href="terminos">términos y condiciones</a>
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="col-lg-7 pt-5 pr-lg-0">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-orange px-5 py-2 mt-4">Enviar</button>
            
                  </div>
                </div>
              </div>
            </div>';

    }

} ?>
                               <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                
    </div>
</div>
<?php get_footer(); ?>
