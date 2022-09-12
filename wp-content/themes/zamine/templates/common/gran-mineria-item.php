<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
  $img_url = $img_arr[0];
?>
<div class="d-flex justify-content-center">
  <div class="bbb_deals-ancho">
    <div class="bbb_deals_title"> <?php the_title('
			<h4>', '</h4>'); ?>
  
    </div>
    <div class="row mb-3">
      <div class="col-xl-6 col-md-5 col-sm-4">
      <?php 
                                $marcaImagen = get_field('marca_logo', get_the_ID());
                                if(isset($marcaImagen) && !empty($marcaImagen)){
                                    echo '<img src="'.$marcaImagen.'">';
                                }
                            ?>
        <?php 
                                $imagen = get_field('imagen_componentes');?> <div class="bbb_deals_image">
          <img src="
						<?php echo ($imagen[url])?>">
         
        </div>
      </div>
      <div class="col-xl-6 col-md-5 col-sm-4">
      <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){
                                    echo "
						<p>
							<b style='font-size: 22px;'>Marca:</b>
							<span style='font-size: 22px;'>".$marca."</span>
						</p>";
                                }
                            ?> 
                           
      
      <?php the_content(); ?> <div class="bbb_deals_info_line d-flex flex-row justify-content-start"> 
                          </div>
        <div class="bbb_deals_info_line d-flex flex-row justify-content-start"> <?php 
                                $pdf = get_field('pdf', get_the_ID());
                                if(isset($pdf) && !empty($pdf)){

                                    echo '
						<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>';
                                }
                                $textoCotizar=get_field('texto_del_boton_cotizar', get_the_ID());
                                echo '
						<a href="#exampleModalCenter" data-toggle="modal" class="btn btn-orange ml-4" style="font-size: 14px!important;">'.$textoCotizar.'</a>';
                            ?> </div>
      </div>
    </div>
  </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="wrapper py-5">
    <div class="container-fluid">
    
      <div class="row col-md-10 mx-auto">
      <h2 class="subtitle-orange">Escríbenos</h2>
          <p>Déjenos sus consultas y nos pondrémos en contacto contigo</p>
                    <div class="bar bar--orange my-4"></div>

        <div class="container">
        
          <div>
                              </div>
          <?php
    echo do_shortcode('[wpforms id="1329"]');
?>          </div>
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