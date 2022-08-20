<?php
/* Template Name:   */
get_header(); ?>
<div class="page-services">

  <div class="banner banner-2">
    <div class="container">

    </div>
    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>">
    <div class="overlay">
        <?php
            echo do_shortcode('[smartslider3 slider="5"]');
        ?> 
    </div>
  </div>

  <div class="info">
    
  </div>


  <div class="products py-5">
    <div class="container-fluid">
          <div class="wrapper d-flex mb-1">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="www.ciem-demo5.com">Inicio</a></li>
        <li class="breadcrumb-item"><a href="www.ciem-demo5.com">Hitachi Mining</a></li>
        <li class="breadcrumb-item active" aria-current="page">Camiones eléctricos rígidos</li>
      </ol>
      <div class="ml-auto search">
        <input type="text" name="buscar" placeholder="Buscar" autocomplete="off">
        <input type="image" name="search" src="<?php echo get_template_directory_uri(); ?>/icons/search2.png">
      </div>
    </div>


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
              $mainCategory = $categories[0];
              //print_r ($hitachiMining);
              ?>
              <?php if (count($mainCategory) > 0) : ?>
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
                <?php if (count($categories2) > 0) : ?>
                  <div style="list-style:none">
                    <?php foreach ($categories2 as $category2) : ?>
                      <li class="m-0"><a href="#principal" onclick="setActive(this, event)" class="d-block" title="" data-slug="<?= $category2->slug; ?>" data-catid="<?= $category2->term_id; ?>"><?php echo $category2->name ?></a>
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
                                       
                                        <?php foreach ($categories3 as $category3):
                                          $pepe = $category3->name?>
                                            <?php if($pepe == 'Camiones eléctricos rígidos'): ?>
                                            <?php $pipipi == $category3->name ?>

                                            <?php
                        $products = get_terms(
                          array(
                            'taxonomy'   => "soluci_perf_categ",
                           
                          )
                        );

                                      print_r ($products);

                        ?>

                                            <?php foreach ($products as $product):
                                            echo "HOla"; ?>
                                            <?php endforeach; ?>










                                          <?php endif; ?> 
                                        <?php endforeach; ?>
                              <?php endif; ?>            


                            
                      </li>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                </li>
              <?php endif; ?>

              

              <ul class="navbar-nav">
                 <?php
                  foreach ($menu as $key => $value) {
                  $title = $value->title;
                  $url = $value->url;
                  $current = $value->current;
                  echo "<li class='nav-item'>
                          <a class='nav-link' href='$url'>$title</a>
                        </li>";
                }
                ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Servicios y Productos
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <?php
                                    foreach ($menuServicios as $key => $value) {
                                      $title = $value->title;
                                      $url = $value->url;
                                      $current = $value->current;
                                      echo "<a class='dropdown-item' href='$url'>$title</a> ";
                                    }
                                    ?>
                            </div>
                        </li>
                  </ul>

    <section class="bg-white py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="<?php echo get_template_directory_uri(); ?>/images/hitachi-product.png" /></div>

                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">

                                            <button class="my-nav2 btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h6> EH4000 – 3 </h6>
                                            </button>
                                        </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                        <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                        <li>POTENCIA: im pariatur cliche reprehenderit.</li>
                                        <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                        <li><a href="" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></li>
                                            
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                                            Solicitar Cotización
                                            </button>

                                    
                                    </div>
                                                                                </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                EH3500 – 3         
                                            </button>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                            <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                            <li>POTENCIA: im pariatur cliche reprehenderit.</li>
                                            <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                            <li><a href="" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></li>
                                                 <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                                            Solicitar Cotización
                                            </button>                                      
                                        </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                PRODUCTO #3
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                            <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                            <li>POTENCIA: im pariatur cliche reprehenderit.</li>
                                            <li>POTENCIA: nim pariatur cliche reprehenderit.</li>
                                            <li><a href="" target="_blank" style="font-size: 1.5em; color: #3e4854; text-decoration: none;"><span class="material-icons">download</span> Ficha Técnica</a></li>
                                                   <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#exampleModalCenter">
                                            Solicitar Cotización
                                            </button>                                          </div>
                                            </div>
                                        </div>
                                        </div>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</section>

    <div style="display:none" class="products--list container-fluid">
      <div class="row" style="background: #fff;">
        <div class="accordion-menu" style="background: #f47b20!important;">
            <h6 class="my-nav2 mb-0 font-weight-bold">
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
                $mainCategory = $categories[0];
                //print_r ($hitachiMining);
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


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Contáctanos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="wrapper py-5">
    <div class="container-fluid">
      <div class="row col-md-10 mx-auto">
        <div>
          <div class="bar bar--orange my-4"></div>
          <h2 class="subtitle-orange">Escríbenos</h2>
          <p>Déjenos sus consultas y nos pondrémos en<br>contacto contigo</p>
          <form class="pr-md-5 contact-form" autocomplete="off">
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/user.png">
              </div>
              <input type="text" name="name" placeholder="Nombres y Apellidos" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/email.png">
              </div>
              <input type="email" name="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/phone-2.png">
              </div>
              <input type="text" name="phone" placeholder="Teléfono" class="form-control">
            </div>
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/quill.png">
              </div>
              <input type="text" name="title" placeholder="Asunto" class="form-control">
            </div> 
            <div class="form-group">
              <div class="form-icon">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/paper-plane.png">
              </div>
              <textarea class="form-control" name="mensaje" placeholder="Mensaje"></textarea>
            </div> 
            <div class="form-checkbox">
              
              <input type="checkbox" name="terms" id="terms">
              <label for="terms">
                Acepto los <a href="terminos">términos y condiciones</a>
              </label>
            </div>
          </form>
        </div>
        <div class="col-lg-7 pt-5 pr-lg-0">
          <img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-orange px-5 py-2 mt-4">Enviar</button>

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
    jQuery(document).ready(function () {
        jQuery('.my-nav2').mgaccordion({
            theme: 'tree',
            leaveOpen: false
        });

        
    });
    function setActive(e,ev) {
        var elms = document.querySelectorAll('.my-nav2 li a');
        // reset all you menu items
        for (var i = 0, len = elms.length; i < len; i++) {
            elms[i].classList.remove('active');
        }
        //console.log(ev.target);
        if(ev.target.localName == "a")
            ev.target.className = "active";

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

    function loadData(e,ev) {
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