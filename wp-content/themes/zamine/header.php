<?php

header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage zamine
 * @since Zamine 1.0
 */
$menu = getMenuArray('main');
$menuProductos = getMenuArray('Productos');
$menuServicios = getMenuArray('Servicios');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>


<meta http-equiv="Expires" content="0">
 
<meta http-equiv="Last-Modified" content="0">
 
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
 
<meta http-equiv="Pragma" content="no-cache">



  <title>Zamine<?php echo wp_title();?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
  <?php endif; ?>
  <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/bootstrap.min.css"> 
  <!--<link rel="stylesheet" href="https://www.ciem-demo5.com/wp-content/themes/zamine/libs/css/bootstrap.min.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="wrapper">
      <div class="d-flex">
   <!-- CIEM HEADER MENU-->
        <nav class="navbar navbar-expand-lg navbar-dark bg">
        <div class="menu-item">
          <a href="#" class="open-menu">
            <span class="material-icons">
              menu
            </span>
          </a>
        </div>
        <a class="navbar-brand sticky" href="http://ciem-demo5.com/">
            <img class="navbar-brand" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="zamine" height="58">
          </a>
        
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                 <ul class="navbar-nav">
                 <?php
                  $value = $menu[0];
                  $title = $value->title;
                  $url = $value->url;
                  $current = $value->current;
                  echo "<li class='nav-item'>
                          <a class='nav-link' href='$url'>$title</a>
                        </li>";
                
                ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              PRODUCTOS
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <?php
                                    foreach ($menuProductos as $key => $value) {
                                      $title = $value->title;
                                      $url = $value->url;
                                      $current = $value->current;
                                      echo "<a class='dropdown-item' href='$url'>$title</a> ";
                                    }
                                    ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              SERVICIOS
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
                        <?php
                          $value = $menu[1];
                          $title = $value->title;
                          $url = $value->url;
                          $current = $value->current;
                          echo "<li class='nav-item'>
                                  <a class='nav-link' href='$url'>$title</a>
                                </li>";
                        ?>
                  </ul>
              </div>
        <div class="menu-item menu-lang">
          <ul class="header__list-languages"><?php pll_the_languages(); ?></ul>
        </div>
        <div id="header-responsive" class="menu-item ciem-responsive__buscador float--right--palm">
            <form class="ciem-responsive__buscador__form js-responsive__buscador-form js-buscador-form" role="search" method="get" id="searchform" class="searchform" action="http://ciem-demo5.com/">
                <div class="buscador-container">
                  <label class="screen-reader-text" for="s">Buscar por:</label>
                  <input class="ciem-responsive__buscador__form__input buscador__input js-buscador-form" type="text" value="" name="s" id="s">
                  <input class="ciem-responsive__buscador__form__submit buscador__submit material-icons" type="submit" id="searchsubmit" value="search">
                </div>
            </form>
      
            </div>
        </div>
        </nav>                                    
      </div>
    </div>
  </header>
  <div class="header-menu ">
    <div class="wrapper">
      <div class="container">
        <div class="row py-5">
          <div class="col-md-3 pr-md-0">
            <div class="menu py-0 py-sm-4">
              <ul class="">
                <?php

                foreach ($menu as $key => $value) {
                  $title = $value->title;
                  $url = $value->url;
                  $current = $value->current;
                  echo "<li>
                          <a href='$url'>$title</a>
                        </li>";
                }

                ?>
              </ul>
            </div>
          </div>
          <div class="col-md-12 offset-lg-1 col-lg-8">
            <div class="row">
              <div class="col-md-6">
                <?php
                $menu1 = getMenuArray(22);
                foreach ($menu1 as $key => $value) {
                  $title = $value->title;
                  $ID = $value->ID;
                  $url = $value->url;
                  $icono_menu = get_field('icono_menu', $ID);
                  echo <<<EOT
                    <div class="menu-link">
                      <a href="$url">
                        <img src="$icono_menu" class="img-fluid">
                        <span>$title</span>
                      </a>
                    </div>
                    EOT;
                }

                ?>
              </div>
              <div class="col-md-6">
                <?php
                $menu1 = getMenuArray(23);
                foreach ($menu1 as $key => $value) {
                  $title = $value->title;
                  $ID = $value->ID;
                  $url = $value->url;
                  $icono_menu = get_field('icono_menu', $ID);
                  echo <<<EOT
                    <div class="menu-link">
                      <a href="$url">
                        <img src="$icono_menu" class="img-fluid">
                        <span>$title</span>
                      </a>
                    </div>
                    EOT;
                }

                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
function myFunction(element, display) {
  element.style.display = display;
}
</script>