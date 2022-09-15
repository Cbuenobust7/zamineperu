<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>

            <!-- bbb_deals -->
            <div class="bbb_deals-tres">
            <?php 
    $titulo = the_title('<h4>', '</h4>');
    $ocultar_titulo  = get_field('ocultar_titulo', get_the_ID());
                                if($ocultar_titulo == false) {
                                  echo
                                  '<div class="bbb_deals_title"> 
                                    '.$titulo.' 
                                  </div> ';
                                }else{
                                  echo '';
                                }
                                ?>
                <?php 
                                $marcaImagen = get_field('marca_logo', get_the_ID());
                                if(isset($marcaImagen) && !empty($marcaImagen)){
                                    echo '<img src="'.$marcaImagen.'">';
                                }
                            ?>
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
                                $pdf = get_field('pdf', get_the_ID());
                                if(isset($pdf) && !empty($pdf)){

                                    echo '<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar</a>';
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
              

