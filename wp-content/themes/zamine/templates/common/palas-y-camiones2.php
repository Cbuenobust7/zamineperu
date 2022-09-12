<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
  $img_url = $img_arr[0];
?>
<div class="d-flex justify-content-center">
  <div class="bbb_deals-ancho">
    <div class="bbb_deals_title"> <?php the_title('
			<h4>', '</h4>'); ?> </div>
    <div class="row mb-3">
      <div class="col-xl-6 col-md-5 col-sm-4"> <?php 
                                $imagen = get_field('imagen_componentes');?> <div class="bbb_deals_image">
          <img src="
						<?php echo ($imagen[url])?>">
        </div>
      </div>
      <div class="col-xl-6 col-md-5 col-sm-4"> <div class="bbb_deals_info_line d-flex flex-row justify-content-start"> <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){
                                    echo "
						<p>
							<b style='font-size: 22px;'>Marca:</b>
							<span style='font-size: 22px;'>".$marca."</span>
						</p>";
                                }
                            ?> </div>
        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
          <div class="text-center text-xl-start">
          <?php the_content(); ?> 

            <div id="accordion"> <?php 
                                $modelo1 = get_field('modelo_1_nombre', get_the_ID());
                                if(isset($modelo1) && !empty($modelo1)){
                                  $ficha1 = get_field('modelo_1_ficha', get_the_ID());
                                  $brochure1 = get_field('modelo_1_brochure', get_the_ID());


                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="headingOne">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <h6>'.$modelo1.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                            <div class="bbb_deals_image">
                                             <img src="'.$ficha1.'"> </div>
  
                                        
                                        </div>
                                        <a href="'.$brochure1.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                
                                $modelo2 = get_field('modelo_2_nombre', get_the_ID());
                                if(isset($modelo2) && !empty($modelo2)){
                                  $ficha2 = get_field('modelo_2_ficha', get_the_ID());
                                  $brochure2 = get_field('modelo_2_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                <h6>'.$modelo2.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                            <div class="card-body">
                                            <div class="bbb_deals_image">
                                             <img src="'.$ficha2.'"> </div>

                                        </div>                         
                                        <a href="'.$brochure2.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                
                                $modelo3 = get_field('modelo_3_nombre', get_the_ID());
                                if(isset($modelo3) && !empty($modelo3)){
                                  $ficha3 = get_field('modelo_3_ficha', get_the_ID());
                                  $brochure3 = get_field('modelo_3_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading3">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                <h6>'.$modelo3.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                               <img src="'.$ficha3.'"> </div>  
                                        
                                        </div>
                                        <a href="'.$brochure3.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>
                                        </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo4 = get_field('modelo_4_nombre', get_the_ID());
                                if(isset($modelo4) && !empty($modelo4)){
                                  $ficha4 = get_field('modelo_4_ficha', get_the_ID());
                                  $brochure4 = get_field('modelo_4_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading4">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                <h6>'.$modelo4.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha4.'"> </div>
  
                                                
                                          
                                        
                                        </div>
                                        <a href="'.$brochure4.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>
                                        </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo5 = get_field('modelo_5_nombre', get_the_ID());
                                if(isset($modelo5) && !empty($modelo5)){
                                  $ficha5 = get_field('modelo_5_ficha', get_the_ID());
                                  $brochure5 = get_field('modelo_5_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading5">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                <h6>'.$modelo5.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha5.'"> </div>
                                        </div>                                        
                                        <a href="'.$brochure5.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo6 = get_field('modelo_6_nombre', get_the_ID());
                                if(isset($modelo6) && !empty($modelo6)){
                                  $ficha6 = get_field('modelo_6_ficha', get_the_ID());
                                  $brochure6 = get_field('modelo_6_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading6">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                <h6>'.$modelo6.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                               <img src="'.$ficha6.'"> </div>
  
                                        </div>
                                        <a href="'.$brochure6.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo7 = get_field('modelo_7_nombre', get_the_ID());
                                if(isset($modelo7) && !empty($modelo7)){
                                  $ficha7 = get_field('modelo_7_ficha', get_the_ID());
                                  $brochure7 = get_field('modelo_7_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                <h6>'.$modelo7.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha7.'"> </div>
  
                                            
                                        </div>
                                        <a href="'.$brochure7.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo8 = get_field('modelo_8_nombre', get_the_ID());
                                if(isset($modelo8) && !empty($modelo8)){
                                  $ficha8 = get_field('modelo_8_ficha', get_the_ID());
                                  $brochure8 = get_field('modelo_8_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                <h6>'.$modelo8.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha8.'"> </div>
  
                                             
    
                                        
                                        </div> 
                                         <a href="'.$brochure8.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>


                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo9 = get_field('modelo_9_nombre', get_the_ID());
                                if(isset($modelo9) && !empty($modelo9)){
                                  $ficha9 = get_field('modelo_9_ficha', get_the_ID());
                                  $brochure9 = get_field('modelo_9_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                <h6>'.$modelo9.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha9.'"> </div>
  
                                    
    
                                        
                                        </div>
                                        <a href="'.$brochure9.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
                                $modelo10 = get_field('modelo_10_nombre', get_the_ID());
                                if(isset($modelo10) && !empty($modelo10)){
                                  $ficha10 = get_field('modelo_10_ficha', get_the_ID());
                                  $brochure10 = get_field('modelo_10_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header" style="background-color:#f47b20;padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                                <h6>'.$modelo10.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha10.'"> </div>
                                        </div>
                                        <a href="'.$brochure10.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } ?>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                        
                              
                                </div>
                                      <!-- Button trigger modal -->
                               
                            </div>
                            <?php $textoCotizar=get_field('texto_del_boton_cotizar', get_the_ID());?>
                            <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top:5px; font-size: 15px">
                                                <?php echo $textoCotizar ?>
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
            </div>
        

<script>
    jQuery(document).ready(function () {
        jQuery('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>


<?php
                            $formulario = get_field('formulario', get_the_ID());
                            if(isset($formulario) && !empty($formulario) && $formulario=="1"){
                              echo do_shortcode('[wpforms id="1329"]');
                            } 
                            elseif(isset($formulario) && !empty($formulario) && $formulario=="2"){
                              echo do_shortcode('[wpforms id="1329"]');
                            } 
                            else{
                              echo do_shortcode('[wpforms id="1329"]');
                            }?> 