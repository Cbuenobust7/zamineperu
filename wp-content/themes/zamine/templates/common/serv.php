<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>

<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

<div class=" text-center text-xl-start">
  <div id="accordion">
    <div class="card" style="border-color:#f47b20">
                        
      <div class="card-header btn-orange" id="headingTwo">
          <h5 class="mb-0">
                <?php '<button class="btn-orange collapsed" data-toggle="collapse" data-target="#collapse' . the_title() . '" aria-expanded="false" aria-controls="collapseTwo">'?>    
                </button>
                </h5>
                </div>
                <?php '<div id="collapse' . the_title() . '" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">' ?>
                <div class="card-body" style="list-style:none">
                <li><h5><?php the_title() ?></h5></li>
                <li><p> <?php the_content() ?></p></li>
                     <!-- Button trigger modal -->
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                Solicitar Cotización
                </button>                                      
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
        
<script>
    jQuery(document).ready(function () {
        jQuery('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>