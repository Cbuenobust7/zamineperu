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


<style>
.bbb_deals-ancho {
  width: 100%;
  margin-right: -10%;
  padding: 10px 25px 34px;
  border-radius: 5px;
  margin-top: 10px;
}

.bbb_deals_image,
.bbb_deals_image img {
    width: 100%;
    height: 100%; /* Agregado para que ocupe toda la altura */
    object-fit: cover; /* Ajusta la imagen para cubrir todo el contenedor */
}
</style>


<div class="d-flex justify-content-center">
    <div class="bbb_deals-ancho">
        <?php
        $lang = get_bloginfo("language");
        $textoBrochure = ($lang == 'es-PE') ? "Descargar Brochure" : "Download Brochure";

        $titulo = the_title('<h4>', '</h4>');
        $ocultar_titulo = get_field('ocultar_titulo', get_the_ID());

        if (!$ocultar_titulo) {
            echo '<div class="bbb_deals_title">' . $titulo . '</div>';
        }
        ?>
        <?php
        $marcaImagen = get_field('marca_logo', get_the_ID());
        if (isset($marcaImagen) && !empty($marcaImagen)) {
            echo '<img src="' . $marcaImagen . '">';
        }
        ?>
        <div class=" bbb_deals_item">
        <div class="row mb-3">
            <div class="col-xl-6 col-md-5 col-sm-4">
                <?php
                $imagen = get_field('imagen_componentes');
                echo '<div class="bbb_deals_image"><img src="' . $imagen['url'] . '"></div>';
                ?>
            </div>
            <div class="col-xl-6 col-md-5 col-sm-4">
                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                    <?php
                    $marca = get_field('marca', get_the_ID());
                    if (isset($marca) && !empty($marca)) {
                        echo "<p><b style='font-size: 22px;'>Marca:</b><span style='font-size: 22px;'>" . $marca . "</span></p>";
                    }
                    ?>
                </div>
                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                    <div class="text-xl-start">
                        <?php the_content(); ?>

                        <?php
                        $textoCotizar = get_field('texto_del_boton_cotizar', get_the_ID());
                        if (isset($textoCotizar) && !empty($textoCotizar)) {
                            echo '<button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top:5px; font-size: 15px">' . $textoCotizar . '</button';
                        }
                        ?>
                    </div>
                </div>
             </div>

            </div>
        </div>

        <div class="row" style="padding-top:10px">
            <?php
            for ($i = 1; $i <= 9; $i++) {
                $modeloNombre = get_field("modelo_${i}_nombre", get_the_ID());
                if (isset($modeloNombre) && !empty($modeloNombre)) {
                    $ficha = get_field("modelo_${i}_ficha", get_the_ID());
                    $brochure = get_field("modelo_${i}_brochure", get_the_ID());
                    ?>
                    
                        <div class="card">
                            <div class="card-header color-h-ficha" id="heading<?php echo $i; ?>">
                                <h5 class="mb-0">
                                    <button class="my-nav2 btn-orange-alt btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                        <h6><?php echo $modeloNombre; ?></h6>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapse<?php echo $i; ?>" class="collapse show" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="bbb_deals_image">
                                        <img src="<?php echo $ficha; ?>">
                                    </div>
                                </div>
                                <a href="<?php echo $brochure; ?>" target="_blank" class="btn btn-orange" style="font-size: 14px!important;"><?php echo $textoBrochure; ?></a>
                            </div>
                        </div>
                    
                <?php
                }
            }
            ?>
        </div>
    </div>
</div>

