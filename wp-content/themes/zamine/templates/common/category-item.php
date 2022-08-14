<?php
  $img_arr = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium_large'); 
$img_url = $img_arr[0];
?>
<div class='col-md-6 col-lg-4'>
                    <a class='card-service' href='<?=get_the_permalink();?>'>
                      <div class='card-service__image' style="background-image: url(<?=$img_url;?>)">
                      
                      </div>
                      <div class='card-service__info'>
                        <div class='card-service__info__name'>
                          <?=the_title();?>
                        </div>
                        <div class='card-service__info__icon'>
                          <span class="material-icons">
                          add
                          </span>
                        </div>
                      </div>
                    </a>
                  </div>