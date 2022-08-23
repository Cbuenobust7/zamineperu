<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>

            <!-- bbb_deals -->
            <div class="bbb_deals">
                <div class="ribbon ribbon-top-right"><span><small class="cross">x </small>4</span></div>
                <div class="bbb_deals_title"><?php the_title('<h4>', '</h4>'); ?></div>
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image">  <?php the_content(); ?></div>
                        <div class="bbb_deals_content">
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                            <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){
                                    echo "<p><b style='font-size: 22px;'>Marca:</b> <span style='font-size: 22px;'>".$marca."</span></p>";
                                }
                            ?>
                            <p><a href="<?php echo get_field('ficha_tecnica'); ?>" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></p>

                            </div>
                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                            <?php 
                                $marca = get_field('marca', get_the_ID());
                                if(isset($marca) && !empty($marca)){

                                    echo '<a href="'.get_field('pdf_marca').'" target="_blank" class="btn btn-orange" style="font-size: 14px!important;">Descargar PDF</a>';
                                }

                                echo '<a href="'.home_url('contactanos').'" target="_blank" class="btn btn-orange ml-4" style="font-size: 14px!important;">Consulta Aquí</a>';
                            ?>
                            </div>
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">algo: <span>6</span></div>
                                    <div class="sold_stars ml-auto"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
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