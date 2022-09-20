
<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
  $img_url = $img_arr[0];
?>
<style>
  label {
    display: initial;
    margin-bottom: 0.5rem;
}

.div.wpforms-container-full .wpforms-form input.wpforms-field-small, div.wpforms-container-full .wpforms-form select.wpforms-field-small, div.wpforms-container-full .wpforms-form .wpforms-field-row.wpforms-field-small {
    /* max-width: 25%; */
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
      <h2 class="subtitle-orange">CONTÁCTANOS</h2>
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

<script type='text/javascript' src='https://ciem-demo5.com/wp-content/plugins/wpforms-lite/assets/lib/jquery.validate.min.js?ver=1.19.5' id='wpforms-validation-js'></script>
<script type='text/javascript' src='https://ciem-demo5.com/wp-content/plugins/wpforms-lite/assets/lib/mailcheck.min.js?ver=1.1.2' id='wpforms-mailcheck-js'></script>
<script type='text/javascript' src='https://ciem-demo5.com/wp-content/plugins/wpforms-lite/assets/lib/punycode.min.js?ver=1.0.0' id='wpforms-punycode-js'></script>
<script type='text/javascript' src='https://ciem-demo5.com/wp-content/plugins/wpforms-lite/assets/js/utils.min.js?ver=1.7.6' id='wpforms-generic-utils-js'></script>
<script type='text/javascript' src='https://ciem-demo5.com/wp-content/plugins/wpforms-lite/assets/js/wpforms.min.js?ver=1.7.6' id='wpforms-js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpforms_settings = {"val_required":"This field is required.","val_email":"Please enter a valid email address.","val_email_suggestion":"Did you mean {suggestion}?","val_email_suggestion_title":"Click to accept this suggestion.","val_email_restricted":"This email address is not allowed.","val_number":"Please enter a valid number.","val_number_positive":"Please enter a valid positive number.","val_confirm":"Field values do not match.","val_checklimit":"You have exceeded the number of allowed selections: {#}.","val_limit_characters":"{count} of {limit} max characters.","val_limit_words":"{count} of {limit} max words.","val_recaptcha_fail_msg":"Google reCAPTCHA verification failed, please try again later.","val_inputmask_incomplete":"Please fill out the field in required format.","uuid_cookie":"","locale":"es","wpforms_plugin_url":"https:\/\/ciem-demo5.com\/wp-content\/plugins\/wpforms-lite\/","gdpr":"","ajaxurl":"https:\/\/ciem-demo5.com\/wp-admin\/admin-ajax.php","mailcheck_enabled":"1","mailcheck_domains":[],"mailcheck_toplevel_domains":["dev"],"is_ssl":"1","page_title":"Cont\u00e1ctanos","page_id":"81"}
/* ]]> */
</script>