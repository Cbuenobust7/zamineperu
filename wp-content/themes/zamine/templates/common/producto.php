
<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
  $img_url = $img_arr[0];
?>
<style>
  label {
    display: initial;
    margin-bottom: 0.5rem;
}
</style>
<?php
$estructura  = get_field('estructura', get_the_ID());
                                if($estructura == "modelos") {
                                  get_template_part('templates/common/varios-modelos');
                                }elseif($estructura == "columnas"){
                                  get_template_part('templates/common/dos-columnas');
                                }else{
                                  get_template_part('templates/common/una-columna');
                                }
                                ?>

<?php 

$formulario = get_field('formulario_de_contacto', get_the_ID());

?>


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
                        
                        <?php echo do_shortcode("$formulario");?>          
                        </div>
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


