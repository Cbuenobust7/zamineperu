<?php

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

  <title>Zamine<?php echo wp_title();?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="Author" content="Carlos Eduardo Bueno Bustíos, CIEM PRODUCTOS Y SERVICIOS DIGITALES E.I.R.L.">
  <meta name="Subject" content="WEBSITE ZAMINE PERÚ">
  <meta name="Description" content="ZAMINE PERÚ distribuidor oficial de Equipos HITACHI para la Gran Minería.">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>" async>
  <?php endif; ?>
  <!-- Bootstrap CSS -->
  <link rel="profile" href="http://gmpg.org/xfn/11">

   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/css/bootstrap.min.css" media="screen"> 
  <!--<link rel="stylesheet" href="https://www.ciem-demo5.com/wp-content/themes/zamine/libs/css/bootstrap.min.css"> -->
   <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp&display=swap" rel="stylesheet" media="screen">

  <!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" media="screen">-->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="wrapper wrapper-header">
      <div class="d-flex">
   <!-- CIEM HEADER MENU-->
   <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg navbar-ciem">
      
        <div class="container d-flex justify-content align-items-center">
          <div class="row">
            <div class="col">
              <div class="menu-item-movil">
                <a href="#" class="open-menu">
                  <span class="material-icons">
                    menu
                  </span>
                </a>
              </div>
            </div>
            <div class="col">
                <a class="navbar-brand" href="https://ciem-demo5.com/">
                <img class="navbar-brand nuevo-logo-movil" src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="zamine" height="58">
              </a>
            </div>
          </div>

    <!-- la clase sticky desaparecer al iniciar el logo y aparece al hacer scroll para abajo -->
        <a class="navbar-brand" href="https://ciem-demo5.com/">
            <img class="navbar-brand nuevo-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-nuevo-black.webp" alt="zamine" height="58">
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
        <div class="menu-item menu-lang" style="display:none">
          <ul class="header__list-languages"><?php pll_the_languages(); ?></ul>
        </div>
        <div id="header-responsive" class="buscador-responsive menu-item ciem-responsive__buscador float--right--palm">
            <form class="ciem-responsive__buscador__form js-responsive__buscador-form js-buscador-form" role="search" method="get" id="searchform" class="searchform" action="https://ciem-demo5.com/">
                <div class="buscador-container">
                  <label class="screen-reader-text" for="s">Buscar por:</label>
                  <input class="ciem-responsive__buscador__form__input buscador__input js-buscador-form" type="text" value="" name="s" id="s">
                  <input class="ciem-responsive__buscador__form__submit buscador__submit material-icons" type="submit" id="searchsubmit" value="search">
                </div>
            </form>
      
            </div>
          
        </div>
<div>
        </nav> 
   
       </div>
    </div>
  </header>
  <div class="header-menu ">
    <div class="wrapper" style="background: black";>
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
              <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              PRODUCTOS
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  <?php
                                    foreach ($menuProductos as $key => $value) {
                                      $title = $value->title;
                                      $url = $value->url;
                                      $current = $value->current;
                                      echo "<a type='button' href='$url' class='btn btn-orange btn-lg btn-block'>
                                      $title</a><br> "
                                      ;
                                    }
                                    ?>
                            </div>
                        </li>
        
              
               <li class="nav-item dropdown">
               <a class="dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 SERVICIOS
               </a>
               
               <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                     <?php
                       foreach ($menuServicios as $key => $value) {
                         $title = $value->title;
                         $url = $value->url;
                         $current = $value->current;
                         echo "<a type='button' href='$url' class='btn btn-orange btn-lg btn-block'>
                         $title</a><br>"
                         ;
                        }
                       ?>
               </div>
           </li>
           </ul>
           <div id="header-responsive" class="menu-item ciem-responsive__buscador float--right--palm">
            <form class="ciem-responsive__buscador__form js-responsive__buscador-form js-buscador-form" role="search" method="get" id="searchform" class="searchform" action="https://ciem-demo5.com/">
                <div class="buscador-container">
                  <label class="screen-reader-text" for="s">Buscar por:</label>
                  <input class="ciem-responsive__buscador__form__input buscador__input js-buscador-form" type="text" value="" name="s" id="s">
                  <input class="ciem-responsive__buscador__form__submit buscador__submit material-icons" type="submit" id="searchsubmit" value="search">
                </div>
            </form>
      
            </div>
          
        </div>
           </div>

                </div> 
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