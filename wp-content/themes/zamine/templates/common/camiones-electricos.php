<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>

            <!-- bbb_deals -->
            <div class="bbb_deals-tres">
                <div class="bbb_deals_title"><?php the_title('<h4>', '</h4>'); ?></div>
                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                            <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){
                                    echo "<p><span style='font-size: 22px;'>".$marca."</span></p>";
                                }
                            ?>
                            </div>
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image">  <?php the_content(); ?></div>
                        <div class="bbb_deals_content">
                          
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                            <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){

                                    echo '<a href="'.get_field('pdf_marca').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>';
                                }

                                echo '<a href="#exampleModalCenter" data-toggle="modal" class="btn btn-orange ml-4" style="font-size: 14px!important;">Consulta Aquí</a>';
                            ?>
                            </div>
                            <div class="available" style="display:none">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">algo: <span>6</span></div>
                                    <div class="sold_stars ml-auto"><div class="bar bar--yellow my-4"></div></div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div>
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
            </div>
        

<script>
    jQuery(document).ready(function () {
        jQuery('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>