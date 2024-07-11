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
    </style>

<?php endif; ?>

<div class="d-flex justify-content-center">
  <div class="bbb_deals-ancho">
    <?php 
    $lang = get_bloginfo("language"); 
    $ocultar_titulo  = get_field('ocultar_titulo', get_the_ID());
                                if($ocultar_titulo == false) {
                                  $titulo = the_title('<h4>', '</h4>');

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
    <div class=" bbb_deals_item">

    <div class="row mb-3">
      <div class="col-xl-6 col-md-5 col-sm-4">
      
        <?php 
                                $imagen = get_field('imagen_componentes');?> 

                                <div class="bbb_deals_image">
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
                                if(isset($pdf) && !empty($pdf)&& $lang == 'en-US'){

                                    echo '
						<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Download Brochure</a>';
                                }
                                if(isset($pdf) && !empty($pdf)&& $lang == 'es-PE'){

                                  echo '
          <a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar Brochure</a>';
                              }



                                $textoCotizar=get_field('texto_del_boton_cotizar', get_the_ID());
                                echo '
						<a href="#exampleModalCenter" data-toggle="modal" class="btn btn-orange" style="font-size: 14px!important;">'.$textoCotizar.'</a>';
                            ?> </div>
      </div>
    </div>
      </div>

  </div>
</div>