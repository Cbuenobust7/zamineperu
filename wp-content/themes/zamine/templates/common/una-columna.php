<?php
$colores = get_field('color_botones_para_volquetes_y_otr');
if( $colores ): ?>

    <style type="text/css">
        .btn-orange {
            background: <?php echo esc_attr( $colores['color_principal'] ); ?>;
            color: <?php echo esc_attr( $colores['color_de_texto_principal'] ); ?>;
            border: 2px solid <?php echo esc_attr( $colores['color_de_borde_principal'] ); ?>;
            margin-left: 5px;
            margin-right: 5px;
            }
        .btn-orange:hover{
            background: <?php echo esc_attr( $colores['color_de_boton_alterno'] ); ?>;
            color: <?php echo esc_attr( $colores['color_de_texto_alterno'] ); ?>;
            border: 2px solid <?php echo esc_attr( $colores['color_de_borde_alterno'] ); ?>;
            margin-left: 5px;
            margin-right: 5px;
            }
        .color-h-ficha{
            background-color:<?php echo esc_attr( $colores['color_principal'] ); ?>;
            padding: 0;"
            }
        .btn-orange-alt {
            background: <?php echo esc_attr( $colores['color_principal'] ); ?>;
            color: <?php echo esc_attr( $colores['color_de_texto_principal'] ); ?>;
            border: 2px solid <?php echo esc_attr( $colores['color_principal'] ); ?>;
            }
            @media all and (max-width:599px) {
                .bbb_deals_item {
                  width: 42% !important;
                }
            }
    </style>

<?php endif; ?>

<?php
$img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
$lang = get_bloginfo("language"); 

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
                                if(isset($pdf) && !empty($pdf) && $lang == 'en-US'){

                                    echo '<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Download Brochure</a>';
                                }
                                if(isset($pdf) && !empty($pdf) && $lang == 'es-PE'){

                                    echo '<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar Brochure</a>';
                                }
                                
                                  //print_r ($mainCategory);
                            

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
              

