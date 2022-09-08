<?php

add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'zamine_styles');
add_action('wp_enqueue_scripts', 'zamine_scripts');

function zamine_styles()
{
	$theme_version = wp_get_theme()->get('Version');
	wp_enqueue_style('zamine-style', get_template_directory_uri() . '/assets/css/main.css', null, $theme_version);
    wp_enqueue_style('mgaccordion-style', get_template_directory_uri() . '/assets/css/mgaccordion.css', null, $theme_version);
    //wp_enqueue_style('flexslider-style', get_template_directory_uri() . '/assets/css/flexslider.css', null, $theme_version);
}

function zamine_scripts()
{
	$theme_version = wp_get_theme()->get('Version');
	wp_enqueue_script('zamine-js', get_template_directory_uri() . '/assets/js/main.js', array(), $theme_version, true);
    wp_enqueue_script('mgaccordion-js', get_template_directory_uri() . '/assets/js/mgaccordion.js', array(), $theme_version, true);
   // wp_enqueue_script('flexslider-js', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), $theme_version, true);
}

function myplugin_settings()
{
	// Add tag metabox to page
	register_taxonomy_for_object_type('post_tag', 'page');
	// Add category metabox to page
	register_taxonomy_for_object_type('category', 'page');
}
// Add to the admin_init hook of your theme functions.php file 
add_action('init', 'myplugin_settings');
add_filter('redirect_canonical', 'zamine_disable_redirect_canonical');

function zamine_disable_redirect_canonical($redirect_url)
{
	if (is_singular()) $redirect_url = false;
	return $redirect_url;
}

function zamine_pagination()
{
	global $wp_query;

	$big = 999999;

	$pages = paginate_links([
		'format' => '?paged=%#%',
		'current' => max(1, get_query_var('paged')),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
	]);

	if (is_array($pages)) {
		$paged = (get_query_var('paged') == 0) ? 1 : get_query_var('paged');
		echo '<ul class="pagination justify-content-center">';
		foreach ($pages as $k => $page) {
			$current = (strpos($page, 'current') !== FALSE) ? 'disabled' : '';
			$page = str_replace('page-numbers', 'page-link', $page);
			echo "<li class=\"page-item $current\">$page</li>";
		}
		echo '</ul>';
	}
}

function getServicios()
{
	$tipos = get_field("tipos");
	$array = [];

	foreach ($tipos as $key => $idCategory) {
		$nombre = get_the_category_by_ID($idCategory);
		$servicios =  query_posts([
			'post_type' => 'servicios',
			'posts_per_page' => 10000,
			'tax_query' => array(
				array(
					'taxonomy' => 'tipos_servicios',
					'field' => 'id',
					'terms' => $idCategory,
				)
			),
		]);
		$data = [
			"nombre" => $nombre,
			'servicios' => $servicios,
			"idCategory" => $idCategory,
		];
		$array[] = $data;
		//echo json_encode($servicios);
	}
	
	return $array;
}

function filter_projects() {
    $catSlug = $_POST['category'];
    $post_type = $_POST['post_type'];
    $taxonomy = $_POST['taxonomy'];
    $cat_id = $_POST['category_id'];
   
    //$children = get_term_children($cat_id, $taxonomy);

    $children = get_terms( $taxonomy, array(
        'parent'    => $cat_id,
        'hide_empty' => false
    ) );
   
    //Si no tiene hijos significa que estamos en el nivel final
    if( empty( $children ) ) {
        $ajaxposts = new WP_Query([
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'tax_query' => [
                [                            
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'terms' => $catSlug
                ],
            ]
            ]);
        $laforma = $ajaxposts->tax_query;
        $response = '';
        //echo "<pre>";
        //print_r($catSlug);
        //echo "</pre>"; 
        

            if($ajaxposts->have_posts() && $catSlug == "camiones") {
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/serv');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "palas-y-excavadoras-hidraulicas"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/palas-y-camiones');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "componentes-para-gran-mineria2"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "entrenamiento"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "ensayo-no-destructivo"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "repuestos-y-componentes"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "soldadura-2"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "ensayo-no-destructivo-ndt"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "soporte-al-producto"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "soldadura"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "servicios-de-mantenimiento"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "reparacion-de-componentes"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "sistema-trolley-camiones"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "servicios-especializados-y-repuestos"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "camiones-a-bateria"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "componentes-para-gran-mineria2"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            } elseif($ajaxposts->have_posts() && $catSlug == "camiones-a-propulsion-electrica"){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/palas-y-camiones');
                    endwhile;
            } elseif($ajaxposts->have_posts()){
                    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
                    $response .= get_template_part('templates/common/gran-mineria-item');
                    endwhile;
            
            } else {
                $response = '<div class="col-md-12 p-4"><h4>No existen resultados para esta categoría.</h4></div>';
            }
       

    }else{
        //Si tiene hijos, mostramos subcategorias
        //var_dump($children);
        $response = "";
        foreach($children as $cat){
            //echo $cat->taxonomy;
            $image = get_term_meta($cat->term_id, 'cat_img', true);
            $imglink = wp_get_attachment_image_src($image, 'medium');
            $imagen_fin = $imglink[0];
            $subCateg = $cat->slug;

            

        if($subCateg == 'camiones-electricos-rigidos') {
            $response .= '<div class="col-md-6 col-lg-4">
            <a class="card-service" href="javascript:void(0)" onclick="loadData(this, event)" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                <div class="card-service__image" style="background-image: url('.$imagen_fin.')" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'"></div>
                <div class="card-service__info" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                    <div class="card-service__info__name" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                        '.$cat->name.'
                    </div>
                    <div class="card-service__info__icon" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                        <span data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                        Ver más
                        </span>
                    </div>
                </div>
            </a>
        </div>';
        } else {
       
            $response .= '
                
            <div class="col-md-6 col-lg-4">
                <a class="card-service" href="javascript:void(0);" onclick="loadData(this, event)" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                    <div class="card-service__image" style="background-image: url('.$imagen_fin.')" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'"></div>
                    <div class="card-service__info" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                        <div class="card-service__info__name" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                            '.$cat->name.'
                        </div>
                        <div class="card-service__info__icon" data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                            <span data-slug="'.$cat->slug.'" data-catid="'.$cat->term_id.'">
                            Ver más
                            </span>
                        </div>
                    </div>
                </a>
            </div>';}
        }
    }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


include 'core/helpers.php';