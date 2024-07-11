<?php
/* Template Name: Componentes para Gran minería  */
get_header(); ?>    

<?php 
$lang = get_bloginfo("language"); 
$categories = get_terms( 
    array(
        'taxonomy'   => "soluci_perf_categ",
        'parent'     => 0, // <-- No Parent
        'orderby'    => 'term_id',
        'hide_empty' => false // <!-- change to false to also display empty ones
    )
);
//var_dump($categories);
//print_r ($categories);
if ($lang == 'en-US') { 
  $mainCategory = $categories[5]; 
}
if ($lang == 'es-PE') { 
  $mainCategory = $categories[0];
}

?>

<div class="page-services">

  <div class="banner banner-2">
    <?php get_template_part('components/banner-logo');?>

    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
        <?php
        if ($lang == 'en-US') { 
          echo do_shortcode('[smartslider3 slider="26"]'); }
        if ($lang == 'es-PE') { 
          echo do_shortcode('[smartslider3 slider="6"]'); }
        ?> 
    </div>
  </div>

  <div class="info">
    
  </div>


  <div class="products">
    <div>
          <div id="productos" class="wrapper d-flex mb-1">
          <ol class="breadcrumb">
          <?php
        if ($lang == 'en-US') {  ?>
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Components for Large-scale Mining</li>
          <?php } 
        if ($lang == 'es-PE') {  ?>
          <li class="breadcrumb-item"><a href="/">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Componentes para gran minería</li>
        <?php } ?> 
 
          </ol>


      </div>
      <div class="products--list container-fluid">
        <div class="row" style="background: #fff;">
        <table>
            <tbody><tr>
                  
              <th>
              <img  src="<?php echo get_template_directory_uri(); ?>/images/separador-l.png" alt="zamine" height="">

              </th>
              
              <th>
              <img  src="<?php echo get_template_directory_uri(); ?>/images/separador-r.png" alt="zamine" height="">

                </th>
            </tr>
            <tr style="background: #fff;">
               <td style ="background-color: #303030; vertical-align: baseline;">
          <div class="accordion-menu" style="overflow: hidden;">
            <h6 class="my-nav2 mb-0 font-weight-bold" style="background: #303030;">
            <div style="list-style:none">
            
                
                <?php if(count($mainCategory)>0): ?>
                        <?php 
                            $categories2 = get_terms( 
                                array(
                                    'taxonomy'   => "soluci_perf_categ",
                                    'parent'     => $mainCategory->term_id, // <-- No Parent
                                    'orderby'    => 'description',
                                    'hide_empty' => false // <!-- change to false to also display empty ones
                                )
                            );
                        ?>
                        <?php if(count($categories2)>0): ?>
                            <?php foreach ($categories2 as $category2): ?>
                                <li class="m-0"><a href="#productos" onclick="setActive(this, event)" class="d-block" title="" data-slug="<?=$category2->slug; ?>" data-catid="<?=$category2->term_id; ?>"><?php echo $category2->name ?></a>
                                    <?php 
                                        $categories3 = get_terms( 
                                            array(
                                                'taxonomy'   => "soluci_perf_categ",
                                                'parent'     => $category2->term_id, // <-- No Parent
                                                'orderby'    => 'description',
                                                'hide_empty' => false // <!-- change to false to also display empty ones
                                            )
                                        );
                                    ?>
                                    <?php if(count($categories3)>0): ?>
                                        <ul>
                                        <?php foreach ($categories3 as $category3): ?>
                                            <li><a href="javascript:void(0)" title="" data-slug="<?= $category3->slug; ?>" data-catid="<?= $category3->term_id; ?>"><?php echo $category3->name?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    <?php endif;?>
                                </li>
                            <?php endforeach; ?>
                            </div>
                        <?php endif;?>
                    </li>
                <?php endif; ?>
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
