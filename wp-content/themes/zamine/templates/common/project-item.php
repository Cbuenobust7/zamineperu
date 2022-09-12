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
                             <?php 
                                $marcaImagen = get_field('marca_logo', get_the_ID());
                                if(isset($marcaImagen) && !empty($marcaImagen)){
                                    echo '<img src="'.$marcaImagen.'">';
                                }
                            ?>
                            </div>
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image">  <?php the_content(); ?></div>
                        <div class="bbb_deals_content">
                          
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                            <?php 
                                $pdf = get_field('pdf', get_the_ID());
                                if(isset($pdf) && !empty($pdf)){

                                    echo '<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>';
                                }

                                $textoCotizar = get_field('texto_del_boton_cotizar', get_the_ID());
                                if(isset($textoCotizar) && !empty($textoCotizar)){
                                
                                  echo '<a href="#exampleModalCenter" data-toggle="modal" class="btn btn-orange ml-4" style="font-size: 14px!important;">'.$textoCotizar.'
                                  </a>';}?>

                            </div>
                            <div class="available" style="display:none">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">algo: <span>6</span></div>
                                    <div class="sold_stars ml-auto"><div class="bar bar--yellow my-4"></div>
                                </div>
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
                      <div class="container-fluid">
                        <div class="row col-md-10 mx-auto">
                          <div class="col-lg-5">
                            <div class="bar bar--orange my-4"></div>
                            <h2 class="subtitle-orange">Escríbenos</h2>
                            <p>Déjenos sus consultas y nos pondrémos en<br>contacto contigo</p>
                            <div>
                       
                    </div>
                          </div>
                          <div class="col-lg-7 pt-5 pr-lg-0">
                            <img src="<?php echo get_field('imagen'); ?>" class="img-fluid">
                          </div>
                        </div>
                      </div>
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