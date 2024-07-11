
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
        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: <?php echo esc_attr( $colores['color_principal'] ); ?>;
            border-bottom: 2px solid <?php echo esc_attr( $colores['color_principal'] ); ?>;
            }
    </style>

<?php endif; ?>

<div class="d-flex justify-content-center">
  <div class="bbb_deals-ancho">
  <?php 
    $lang = get_bloginfo("language"); 
    if ($lang == 'es-PE') {
      $textoBrochure = "Descargar Brochure";}
    else{
      $textoBrochure = "Download Brochure";
      }
   
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
    <div class=" bbb_deals_item">

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
                            ?>
                            
                          </div>
        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
          <div class="text-xl-start">
          <?php the_content(); ?> 

          <?php $textoCotizar=get_field('texto_del_boton_cotizar', get_the_ID());
          if(isset($textoCotizar) && !empty($textoCotizar)){

                           echo '<button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top:5px; font-size: 15px">
                                                '.$textoCotizar.'
                                                </button';}

          ?>
    </div>
  </div>
  </div> 
</div>
</div>

<div class="row" style="padding-top:10px">
  <div class="col-6 col-md-4">
<?php
  $modelo1 = get_field('modelo_1_nombre', get_the_ID());
                                if(isset($modelo1) && !empty($modelo1)){
                                  $ficha1 = get_field('modelo_1_ficha', get_the_ID());
                                  $brochure1 = get_field('modelo_1_brochure', get_the_ID());


                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="headingOne">
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
                                        <a href="'.$brochure1.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                                                    </div>
                                            </div>';
      
						
                                } 
                                ?>
  </div>
  <div class="col-6 col-md-4">
    <?php
      $modelo2 = get_field('modelo_2_nombre', get_the_ID());
      if(isset($modelo2) && !empty($modelo2)){
        $ficha2 = get_field('modelo_2_ficha', get_the_ID());
        $brochure2 = get_field('modelo_2_brochure', get_the_ID());

          echo '
              <div class="card">
                  <div class="card-header color-h-ficha" style="padding: 0;" id="heading2">
                  <h5 class="mb-0">

                      <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                      <h6>'.$modelo2.'</h6>
                      </button>
                  </h5>
                  </div>

                  <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordion">
                  <div class="card-body">
                  <div class="bbb_deals_image">
                  <img src="'.$ficha2.'"> </div>

              </div>                         
              <a href="'.$brochure2.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                          </div>
                  </div>';
              
    

      } 
      ?>

  </div>
  <div class="col-6 col-md-4">
    <?php
          $modelo3 = get_field('modelo_3_nombre', get_the_ID());
                                if(isset($modelo3) && !empty($modelo3)){
                                  $ficha3 = get_field('modelo_3_ficha', get_the_ID());
                                  $brochure3 = get_field('modelo_3_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="heading3">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                                <h6>'.$modelo3.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse3" class="collapse show" aria-labelledby="heading3" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                               <img src="'.$ficha3.'"> </div>  
                                        
                                        </div>
                                        <a href="'.$brochure3.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>
                                        </div>
                                            </div>';
                                         
                               
						
                                } 
                                ?>
  </div>
</div>

<div class="row" style="padding-top:5px">
  <div class="col-6 col-md-4"><?php
  $modelo4 = get_field('modelo_4_nombre', get_the_ID());
                                if(isset($modelo4) && !empty($modelo4)){
                                  $ficha4 = get_field('modelo_4_ficha', get_the_ID());
                                  $brochure4 = get_field('modelo_4_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="heading4">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                <h6>'.$modelo4.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse4" class="collapse show" aria-labelledby="heading4" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha4.'"> </div>
  
                                                
                                          
                                        
                                        </div>
                                        <a href="'.$brochure4.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>
                                        </div>
                                            </div>';
                                         
                               
						
                                } 
  ?></div>

  <div class="col-6 col-md-4"> <?php
    $modelo5 = get_field('modelo_5_nombre', get_the_ID());
                                if(isset($modelo5) && !empty($modelo5)){
                                  $ficha5 = get_field('modelo_5_ficha', get_the_ID());
                                  $brochure5 = get_field('modelo_5_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="heading5">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                <h6>'.$modelo5.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse5" class="collapse show" aria-labelledby="heading5" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha5.'"> </div>
                                        </div>                                        
                                        <a href="'.$brochure5.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
  ?></div>

  <div class="col-6 col-md-4"> <?php
    $modelo6 = get_field('modelo_6_nombre', get_the_ID());
                                if(isset($modelo6) && !empty($modelo6)){
                                  $ficha6 = get_field('modelo_6_ficha', get_the_ID());
                                  $brochure6 = get_field('modelo_6_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="heading6">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                                <h6>'.$modelo6.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse6" class="collapse show" aria-labelledby="heading6" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                               <img src="'.$ficha6.'"> </div>
  
                                        </div>
                                        <a href="'.$brochure6.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
  ?></div>
</div>

<div class="row">
  <div class="col-6 col-md-4"> <?php
    $modelo7 = get_field('modelo_7_nombre', get_the_ID());
                                if(isset($modelo7) && !empty($modelo7)){
                                  $ficha7 = get_field('modelo_7_ficha', get_the_ID());
                                  $brochure7 = get_field('modelo_7_brochure', get_the_ID());

                                    echo '
                                        <div class="card">
                                            <div class="card-header color-h-ficha" style="padding: 0;" id="heading2">
                                            <h5 class="mb-0">
    
                                                <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                                <h6>'.$modelo7.'</h6>
                                                </button>
                                            </h5>
                                            </div>
    
                                            <div id="collapse7" class="collapse show" aria-labelledby="heading7" data-parent="#accordion">
                                            <div class="card-body">
                                              <div class="bbb_deals_image">
                                                <img src="'.$ficha7.'"> </div>
  
                                            
                                        </div>
                                        <a href="'.$brochure7.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                                                    </div>
                                            </div>';
                                         
                               
						
                                } 
  ?></div>

  <div class="col-6 col-md-4"><?php
    $modelo8 = get_field('modelo_8_nombre', get_the_ID());
    if(isset($modelo8) && !empty($modelo8)){
      $ficha8 = get_field('modelo_8_ficha', get_the_ID());
      $brochure8 = get_field('modelo_8_brochure', get_the_ID());

        echo '
            <div class="card">
                <div class="card-header color-h-ficha" style="padding: 0;" id="heading2">
                <h5 class="mb-0">

                    <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    <h6>'.$modelo8.'</h6>
                    </button>
                </h5>
                </div>

                <div id="collapse8" class="collapse show" aria-labelledby="heading8" data-parent="#accordion">
                <div class="card-body">
                  <div class="bbb_deals_image">
                    <img src="'.$ficha8.'"> </div>

                 

            
            </div> 
             <a href="'.$brochure8.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>


                                                        </div>
                </div>';
             
   

    } 
    
  ?></div>
  <div class="col-6 col-md-4"><?php
   $modelo9 = get_field('modelo_9_nombre', get_the_ID());
   if(isset($modelo9) && !empty($modelo9)){
     $ficha9 = get_field('modelo_9_ficha', get_the_ID());
     $brochure9 = get_field('modelo_9_brochure', get_the_ID());

       echo '
           <div class="card">
               <div class="card-header color-h-ficha" style="padding: 0;" id="heading2">
               <h5 class="mb-0">

                   <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                   <h6>'.$modelo9.'</h6>
                   </button>
               </h5>
               </div>

               <div id="collapse9" class="collapse show" aria-labelledby="heading9" data-parent="#accordion">
               <div class="card-body">
                 <div class="bbb_deals_image">
                   <img src="'.$ficha9.'"> </div>

       

           
           </div>
           <a href="'.$brochure9.'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">'.$textoBrochure.'</a>

                                                       </div>
               </div>';
            
  

   } ?></div>
</div>

                             
  
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                        
                              
                                </div>
                                      <!-- Button trigger modal -->
                               
                            </div>
                          
                             </div>
      </div>

 