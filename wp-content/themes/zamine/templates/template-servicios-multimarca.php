<?php
/* Template Name: Servicios Multimarca  */
get_header(); ?>

<?php
$categories = get_terms(array(
    'taxonomy' => "soluci_perf_categ",
    'parent' => 0, // <-- No Parent
    'orderby' => 'term_id',
    'hide_empty' => false
    // <!-- change to false to also display empty ones
    
));
//var_dump($categories);

$mainCategory = $categories[7];

?>
<?php if (count($mainCategory) > 0): ?>
                <?php
    $categories2 = get_terms(array(
        'taxonomy' => "soluci_perf_categ",
        'parent' => $mainCategory->term_id, // <-- No Parent
        'orderby' => 'term_id',
        'hide_empty' => false
        // <!-- change to false to also display empty ones
        
    ));

   // print_r($categories2);
?> 
<div  class="page-services">

  <div class="banner banner-2">
    <?php get_template_part('components/banner-logo');?>

    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
        <?php
        echo do_shortcode('[smartslider3 slider="17"]');
        ?> 
    </div>
  </div>

  </div>

  <div class="info">
    <div class="wrapper text-center py-5 top-icon no-p-b">
      <?php the_content(); ?>
    </div>
  </div>


  <div class="products py-2">
    <div class="container-fluid">
      <div id="productos" class="wrapper d-flex mb-1">
        <div class="mb-5">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
            <?php if ($mainCategory) : ?>
              <li class="breadcrumb-item active">Servicios Multimarca</li>
            <?php endif; ?>
          </ol>
        </div>
    </div>
    <div class="products--list container-fluid">
        <div class="row" style="background: #fff;">
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
          </div>
        
        <div class="col-md-8 pt-4" style="background: #fff; border-bottom: 1px solid #fff;">
            <div id="listaItems" class="row d-flex justify-content-center"></div>
        </div>
      </div>
    </div>
    </div>
  </div>


</div>
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

  $('.products--list li a').on('click', function() {
    var $this = $(this),
      $bc = $('<li class="breadcrumb-item active"></li>');
    if ($('.breadcrumb li').length < 3) {
      var title_page = $('.breadcrumb .active').text();
      $('.breadcrumb .active').html(`<a href='#'>${title_page}</a>`);
      $('.breadcrumb .active').removeClass("active");
    }
    $('.breadcrumb .active').remove();

    $this.parents('li').each(function(n, li) {
        var $a = $(li).children('a').clone();
        $bc.prepend($a.text());
    });
    $('.breadcrumb').append( $bc );
  })

  $(".products--list li a").first().click()

</script>
<?php get_footer(); ?>