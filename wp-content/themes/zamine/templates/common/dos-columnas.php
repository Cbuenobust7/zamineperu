


<div class="d-flex justify-content-center">
  <div class="bbb_deals-ancho">
    <?php 
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
    <div class="row mb-3">
      <div class="col-xl-6 col-md-5 col-sm-4">
      
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
						<a href="'.get_field('pdf').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar</a>';
                                }
                                $textoCotizar=get_field('texto_del_boton_cotizar', get_the_ID());
                                echo '
						<a href="#exampleModalCenter" data-toggle="modal" class="btn btn-orange ml-4" style="font-size: 14px!important;">'.$textoCotizar.'</a>';
                            ?> </div>
      </div>
    </div>
  </div>
</div>

