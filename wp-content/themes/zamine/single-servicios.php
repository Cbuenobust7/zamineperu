<?php get_header();
$servicio = get_field("servicio");
$informacion = get_field("informacion");
//echo json_encode($informacion);
?>
<div class="page-product">
  <div class="info py-5">
    <div class="wrapper px-5">
    </div>
  </div>

  <?php
  $category = reset(wp_get_post_terms(get_the_ID(), 'tipos_servicios'));
  ?>

  <?php if ($category) : ?>
    <div class="wrapper">
      <div class="bar bar--gray my-4 mx-auto"></div>
      <h2 class="subtitle-gray text-center pb-5"><?php echo $category->name ?></h2>
    </div>
  <?php endif; ?>

  <div class="product-info py-5">
    <div class="wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="mb-5">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <?php if ($servicio) : ?>
                  <li class="breadcrumb-item"><a href="<?php echo get_the_permalink($servicio->ID); ?>"><?php echo $servicio->post_title ?></a></li>
                <?php endif; ?>
                <?php the_title('<li class="breadcrumb-item active" aria-current="page">', '</li>'); ?>
              </ol>
            </div>
            <div class="row">


<!--CUASI MAQUETA -->

                <?php 
                $categories = get_terms( 
                    
            array(
              'taxonomy'     => 'tipos_servicios',
            )
                );
                //var_dump($categories);
            
           echo '
            <div class="col-md-4">
          <div id="accordionServices" class="card-navigation">
  <div class="card">
    <div class="card-header" id="page0">
      <h5 class="mb-0">
        <button class="btn" data-toggle="collapse" data-target="#section0" aria-expanded="true" aria-controls="section0">
        ' . $categories[0]->name .'
        </button>
      </h5>
     
    </div>
    <div id="section0" class="collapse show" aria-labelledby="page0" data-parent="#accordionServices" data-info="info0" data-header="page0">
      <div class="card-body">
        <ul><li> <a href="http://zamineperu.com/servicios/camiones-autonomos/">Camiones autónomos</a> </li></ul>
      </div>
    </div>
  </div>  <div class="card">
    <div class="card-header" id="page1">
      <h5 class="mb-0">
        <button class="btn" data-toggle="collapse" data-target="#section1" aria-expanded="true" aria-controls="section1">
        ' . $categories[3]->name .'        </button>
      </h5>
     
    </div>
    <div id="section1" class="collapse" aria-labelledby="page1" data-parent="#accordionServices" data-info="info1" data-header="page1">
      <div class="card-body">
        <ul><li> <a href="http://zamineperu.com/servicios/test/">Palas y escavadoras</a> </li><li> <a href="http://zamineperu.com/servicios/camiones-para-gran-altitud/">Camiones para gran altitud</a> </li></ul>
      </div>
    </div>
  </div>  <div class="card">
    <div class="card-header" id="page2">
      <h5 class="mb-0">
        <button class="btn" data-toggle="collapse" data-target="#section2" aria-expanded="true" aria-controls="section2">
        ' . $categories[4]->name .'
        </button>
      </h5>
     
    </div>
    <div id="section2" class="collapse" aria-labelledby="page2" data-parent="#accordionServices" data-info="info2" data-header="page2">
      <div class="card-body">
        <ul><li> <a href="http://zamineperu.com/servicios/691/">test</a> </li></ul>
      </div>
    </div>
  </div>
          </div>
        </div>'?>

<!--TERMINA MAQUETA -->

          <!--    <div class="col-md-6 mb-4">  -->
          <div>
                <?php 
                    $images = get_field('galeria_servicios', $servicio->ID);
                   
                ?>
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo esc_url($image['serv_img']); ?>" alt="<?php echo esc_attr($image['serv_img']); ?>" />
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product--info--details pl-md-4">
                  <div class="mb-4">
                    <?php the_title('<h2>', '</h2>'); ?>
                  </div>
                
                <div class="accordion descripcionacc" id="acordeonDescripcion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="d-flex align-items-center justify-content-between btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="material-icons" style="font-size: 0.6em;">
                                        add
                                    </span>
                                    Descripción
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#acordeonDescripcion">
                        <div class="card-body">
                            <?php the_content(); ?>
                        </div>
                        </div>
                    </div>
                    <div>
                      <?php 
                        if($informacion) {
                          foreach ($informacion as $key => $info) {
                            $titleInfo = $info["titulo"];
                            $detailInfo = $info["detalle"];
                            $idSection = "information$key";
                            echo <<<EOT
                            <div class="accordion--item mb-4">
                              <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#$idSection" class="collapsed">
                                  <span class="material-icons">
                                    add
                                  </span>
                                  <span>$titleInfo</span>
                                </a>
                              </h5>
                              <div id="$idSection" class="pt-3 pl-md-4  collapse" data-parent="#accordionSingleService">
                                $detailInfo
                              </div>
                            </div>
                            EOT;
                          }
                        }

                        ?>
                    </div>
                    <div class="accordion--item mb-4">
                      <h5 class="mb-0">
                        <a href="#" data-toggle="collapse" data-target="#ficha" class="collapsed">
                          <span class="material-icons">
                            add
                          </span>
                          <span>Ficha técnica</span>
                        </a>
                      </h5>
                      <div id="ficha" class="pt-3 pl-md-4  collapse" data-parent="#accordionSingleService">
                        <a href="<?php echo get_field('ficha_tecnica'); ?>" class="btn btn-link btn-download" download="Ficha técnica">
                          <span class="material-icons">
                            library_books
                          </span>
                          Descargar Ficha Técnica <?php echo get_field('ficha_tecnica'); ?>
                        </a>
                      </div>
                    </div>
                  </div>-->
                  <a class="btn btn-orange" href="<?php echo home_url('contactanos') ?>">
                    SOLICITA TU COTIZACIÓN
                  </a>
                  

                </div>
              </div>
            </div>
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
<script>
    jQuery(window).load(function() {
        jQuery('.flexslider').flexslider({
            animation: "slide"
        });
    });
</script>