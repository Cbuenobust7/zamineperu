<?php
/* Template Name: Filtración  */
get_header(); ?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">

    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
        <?php
        echo do_shortcode('[smartslider3 slider="10"]');
        ?> 
    </div>
  </div>

  <div class="info">
    
  </div>


  <div class="products py-5">
    <div class="container-fluid">
          <div class="wrapper d-flex mb-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Filtración</li>
      </ol>
      <div class="ml-auto search">
        <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
        <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
      </div>
    </div>
    <div class="products--list container-fluid">
      <div class="row">
        <div class="col-md-4 pl-md-0 accordion-menu" style="background: #f47b20!important;">
            <h6 class="my-nav2 mb-0 text-uppercase font-weight-bold">
                <?php 
                $categories = get_terms( 
                    array(
                        'taxonomy'   => "soluci_perf_categ",
                        'parent'     => 0, // <-- No Parent
                        'orderby'    => 'term_id',
                        'hide_empty' => false // <!-- change to false to also display empty ones
                    )
                );
                //var_dump($categories);
                $mainCategory = $categories[6];
                //print_r ($mainCategory);
                ?>
                <?php if(count($mainCategory)>0): ?>
                        <?php 
                            $categories2 = get_terms( 
                                array(
                                    'taxonomy'   => "soluci_perf_categ",
                                    'parent'     => $mainCategory->term_id, // <-- No Parent
                                    'orderby'    => 'term_id',
                                    'hide_empty' => false // <!-- change to false to also display empty ones
                                )
                            );
                        ?>
                        <?php if(count($categories2)>0): ?>
                            <div style="list-style:none">
                            <?php foreach ($categories2 as $category2): ?>
                                <li><a onclick="setActive(this, event)" href="javascript:void(0)" title="" data-slug="<?= $category2->slug; ?>" data-catid="<?= $category2->term_id; ?>"><?php echo $category2->name?></a>
                                    <?php 
                                        $categories3 = get_terms( 
                                            array(
                                                'taxonomy'   => "soluci_perf_categ",
                                                'parent'     => $category2->term_id, // <-- No Parent
                                                'orderby'    => 'term_id',
                                                'hide_empty' => false // <!-- change to false to also display empty ones
                                            )
                                        );
                                    ?>
                                    <?php if(count($categories3)>0): ?>
                                        <?php foreach ($categories3 as $category3): ?>
                                            <a href="javascript:void(0)" title="" data-slug="<?= $category3->slug; ?>" data-catid="<?= $category3->term_id; ?>"></a>
                                        <?php endforeach; ?>
                                    <?php endif;?>
                                </li>
                            <?php endforeach; ?>
                        </div>
                        <?php endif;?>
                    </li>
                <?php endif; ?>
            </h6>
        </div>
        <div class="col-md-8 pt-4" style="background: #fff; border-bottom: 1px solid #fff;">
            <div id="listaItems" class="row"></div>
        </div>
      </div>
    </div>
    </div>
  </div>


</div>
<style>
    .my-nav2 li a{
        padding: 10px;
        text-decoration: none;
    }
    .my-nav2 li a:hover{
        background: #6d2f00;
    }
    .my-nav2 li a.active{
        background: #6d2f00;
    }
    .my-nav2 li{
        margin: 15px 0;
    }
    .toggler{
        font-size: 14px;
        margin-left: 8px;
    }
    .my-nav2 li a{
        color: #fff;
    }
</style>
<script>
  jQuery(document).ready(function() {
    jQuery('.my-nav2').mgaccordion({
      theme: 'tree',
      leaveOpen: false
    });


  });

  function setActive(e, ev) {
    var elms = document.querySelectorAll('.my-nav2 li a');
    // reset all you menu items
    for (var i = 0, len = elms.length; i < len; i++) {
      elms[i].classList.remove('active');
    }
    //console.log(ev.target);
    if (ev.target.localName == "a")
      ev.target.classList.add("active");

    var categoy_slug = ev.target.getAttribute('data-slug');
    var category_id = ev.target.getAttribute('data-catid');

    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_projects',
        category: categoy_slug,
        category_id: category_id,
        post_type: 'soluciones-perfo',
        taxonomy: 'soluci_perf_categ',
      },
      success: function(res) {
        $('#listaItems').html(res);
      }
    })
  }

  function loadData(e, ev) {
    console.log(ev.target);
    var categoy_slug = ev.target.getAttribute('data-slug');
    var category_id = ev.target.getAttribute('data-catid');

    $.ajax({
      type: 'POST',
      url: '/wp-admin/admin-ajax.php',
      dataType: 'html',
      data: {
        action: 'filter_projects',
        category: categoy_slug,
        category_id: category_id,
        post_type: 'soluciones-perfo',
        taxonomy: 'soluci_perf_categ',
      },
      success: function(res) {
        $('#listaItems').html(res);
        jQuery('.flexslider').flexslider({
          animation: "slide"
        });
      }
    })
  }
</script>
<?php get_footer(); ?>