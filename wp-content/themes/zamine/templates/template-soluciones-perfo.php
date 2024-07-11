<?php
/* Template Name: Soluciones_Perforacion  */
get_header(); 
$lang = get_bloginfo("language"); 
?>

<?php
$lang = get_bloginfo("language"); 
$categories = get_terms(array(
    'taxonomy' => "soluci_perf_categ",
    'parent' => 0, // <-- No Parent
    'orderby' => 'term_id',
    'hide_empty' => false
    // <!-- change to false to also display empty ones
    
));
//var_dump($categories);

if ($lang == 'en-US') { 
  $mainCategory = $categories[4]; 
}
if ($lang == 'es-PE') { 
  $mainCategory = $categories[6];
}

?>
<?php if (count($mainCategory) > 0): ?>
                <?php
    $categories2 = get_terms(array(
        'taxonomy' => "soluci_perf_categ",
        'parent' => $mainCategory->term_id, // <-- No Parent
        'orderby' => 'description',
        'hide_empty' => false
        // <!-- change to false to also display empty ones
        
    ));

    //print_r($categories);
?> 
<div  class="page-services">

  <div class="banner banner-2">

    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
        <?php

        if ($lang == 'en-US') { 
          echo do_shortcode('[smartslider3 slider="27"]'); }
        if ($lang == 'es-PE') { 
          echo do_shortcode('[smartslider3 slider="11"]'); }
        ?> 
    </div>
  </div>

  </div>

  <div class="info">
   
  </div>


  <div class="products">
    <div>
      <div id="productos" class="wrapper d-flex mb-1">
          <ol class="breadcrumb">
          <?php
        if ($lang == 'en-US') { 
          echo '<li class="breadcrumb-item"><a href="/">Home</a></li>'; }
        if ($lang == 'es-PE') { 
          echo   '<li class="breadcrumb-item"><a href="/">Inicio</a></li>'; }
        ?> 
             <?php if ($mainCategory) : ?>
              <li class="breadcrumb-item active"><?php the_title() ?></li>
            <?php endif; ?>       
           </ol>
        </div>
    <div class="products--list container-fluid">
        <div class="row" style="background: #fff;">
        <table>
            <tbody><tr>
                  
              <th>
              <img src="<?php echo get_template_directory_uri(); ?>/images/separador-l.png" alt="zamine" height="">

              </th>
              
              <th>
              <img src="<?php echo get_template_directory_uri(); ?>/images/separador-r.png" alt="zamine" height="">

                </th>
            </tr>
            <tr style="background: #fff;">
               <td style ="background-color: #303030; vertical-align: baseline;">
          <div class="accordion-menu" style="overflow: hidden;">
            <h6 class="my-nav2 mb-0 font-weight-bold" style="background: #303030;">
            <div style="list-style:none">

                <?php if (count($categories2) > 0): ?>
                    <?php foreach ($categories2 as $category2): ?>
                      <li class="m-0"><a href="#productos" onclick="setActive(this, event)" class="d-block" title="" data-slug="<?=$category2->slug; ?>" data-catid="<?=$category2->term_id; ?>"><?php echo $category2->name ?></a>
                        <?php
                        $categories3 = get_terms(array(
                            'taxonomy' => "soluci_perf_categ",
                            'parent' => $category2->term_id, // <-- No Parent
                            'orderby' => 'description',
                            'hide_empty' => false
                            // <!-- change to false to also display empty ones        
                        ));?>
                              <?php if (count($categories3) > 0):
                                  foreach ($categories3 as $category3):
                                  $pepe = $category3->name;
                                  if ($pepe == 'Camiones eléctricos rígidos'):
                                  endif;
                                  endforeach;

                                    endif;

                                endforeach;

                            endif;

                        endif;
                        ?>   
                        
 </div>
            </h6>

            
<div id="videos-list-container" class="d-none">
              
              <li class="btn-secondary dropdown-toggle text-white videos-productos" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#000";>                
              <i class="fas fa-play-circle"></i> <a> &nbsp;&nbsp;Videos </a>              </li>
                  <div id="irarriba" class="dropdown-menu videos-show" style="background-color: #303030; border: none;">
                  <ul class="video-list p-0"></ul>
              
              </div>
              </div>
                      


</td>
                      <td>
                      <?php get_template_part('components/sidebar');?>


</td>
               
               </tr>
     
           </tbody></table>

 
     
<?php get_footer(); ?>
