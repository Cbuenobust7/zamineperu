<?php
/* Template Name: Todos los servicios y productos  */
get_header(); ?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">

    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
      <h1>Servicios y</h1>
    </div>
  </div>
  <div class="title-orange">
    <h2>Productos</h2>
  </div>

  <div class="info">
    <div class="wrapper text-center py-5 top-icon no-p-b">
      <?php the_content(); ?>
    </div>
  </div>


  <div class="products py-5">
    <div class="container-fluid">
          <div class="wrapper d-flex mb-5">
      
      <div class="ml-auto search">
        <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
        <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
      </div>
    </div>
    <div class="products--list container-fluid">
      <div class="row">
        <div class="col-md-4 pl-md-0 accordion-menu" style="background: #f47b20!important;">
            <ul class="my-nav2 pt-4 pb-4" onclick="setActive(this, event)">
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
                ?>
                <?php foreach ($categories as $category): ?>
                    <li><a href="javascript:void(0)" title="" data-slug="<?= $category->slug; ?>" data-catid="<?= $category->term_id; ?>"><?php echo $category->name?></a>
                        <?php 
                            $categories2 = get_terms( 
                                array(
                                    'taxonomy'   => "soluci_perf_categ",
                                    'parent'     => $category->term_id, // <-- No Parent
                                    'orderby'    => 'term_id',
                                    'hide_empty' => false // <!-- change to false to also display empty ones
                                )
                            );
                        ?>
                        <?php if(count($categories2)>0): ?>
                            <ul style="list-style:none">
                            <?php foreach ($categories2 as $category2): ?>
                                <li><a href="javascript:void(0)" title="" data-slug="<?= $category2->slug; ?>" data-catid="<?= $category2->term_id; ?>"><?php echo $category2->name?></a>
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
                                        <ul>
                                        <?php foreach ($categories3 as $category3): ?>
                                            <li><a href="javascript:void(0)" title="" data-slug="<?= $category3->slug; ?>" data-catid="<?= $category3->term_id; ?>"><?php echo $category3->name?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    <?php endif;?>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        <?php endif;?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-md-8 pt-4" style="background: #fff; border-bottom: 1px solid #fff;">
            <div id="listaItems" class="row-products"></div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <div class="brands">
    <div class="wrapper py-5">
      <div class="container-fluid">
        <h2 class="subtitle-orange text-center">NUESTRAS MARCAS</h2>

        <?php 
          $brands = query_posts( [
            'post_type'=> 'marcas',
            'posts_per_page' => -1,
            'orderby'   => 'date',
            'order'     => 'ASC',
          ]);
        ?>
        <div class="row align-items-center">
        <?php foreach ($brands as $k => $brand): ?>
          <div class="col-md-3"><img src="<?php echo get_the_post_thumbnail_url($brand)?>" class="d-block img-fluid" style="max-width: 220px;"></div>
        <?php endforeach; ?>
        </div>

      </div>
    </div>
  </div>

</div>
<style>
  .video-button {
    margin-left: 0;
    margin-right: 0;
    width: 100%;
    font-size: 14px;
  }
</style>
<script>
  jQuery(document).ready(function() {
    jQuery('.my-nav2').mgaccordion({
      theme: 'tree',
      leaveOpen: false
    });


  });

  function buildVideoList() {
    const $modals = document.querySelectorAll(".modal-video");
    const $video_list = document.querySelector(".video-list");
    const $video_container = document.getElementById("videos-list-container");

    $video_list.innerHTML = "";
    $video_container.classList.add("d-none");

    if ($modals.length <= 0) {
      return;
    }

    const $li_items = document.createDocumentFragment();

    $modals.forEach((element) => {
      const $button = document.createElement("button");
      const $li = document.createElement("li");

      let name = element.getAttribute("data-name");

      $button.setAttribute("data-target", "#" + element.id);
      $button.setAttribute("data-toggle", "modal");
      $button.classList.add("btn", "btn-orange", "video-button");
      $button.textContent = name;

      $li.classList.add("video-item");
      $li.appendChild($button);

      $li_items.appendChild($li);
    });

    $video_list.appendChild($li_items);
    $video_container.classList.remove('d-none');
  }

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
        buildVideoList();
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
        buildVideoList();
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