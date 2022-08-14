<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>
    <div class="row mb-5">
        <div class="col-md-6 mb-4">
        <?php 
            $images = get_field('galeria_servicios', get_the_ID());
            
        ?>
        <div id="slider" class="flexslider">
            <ul class="slides">
                <?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?php echo esc_url($image['serv_img']); ?>" alt="<?php echo esc_attr($image['serv_img']); ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="product--info--details pl-md-4">
            <div class="mb-4">
                <?php the_title('<h2>', '</h2>'); ?>
            </div>
            <?php 
                $marca = get_field('marca', get_the_ID());
                if(isset($marca) && !empty($marca)){
                    echo "<p><b style='font-size: 22px;'>Marca:</b> <span style='font-size: 22px;'>".$marca."</span></p>";
                }
            ?>
            <div>
                <?php the_content(); ?>
            </div>
            <p><a href="<?php echo get_field('ficha_tecnica'); ?>" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></p>


            <?php 
                $marca = get_field('marca', get_the_ID());
                if(isset($marca) && !empty($marca)){

                    echo '<a href="'.get_field('pdf_marca').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>';
                }

                echo '<a href="'.home_url('contactanos').'" target="_blank" class="btn btn-orange ml-4" style="font-size: 14px!important;">Consulta Aquí</a>';
            ?>

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