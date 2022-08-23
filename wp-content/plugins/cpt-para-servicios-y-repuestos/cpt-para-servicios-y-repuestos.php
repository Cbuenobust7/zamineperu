<?php
/*
Plugin Name: CPT para servicios y repuestos
Plugin URI: 
Description: 
Version: 
Author: 
Author URI: 
License: 
License URI: 
*/
// Register Custom Post Type
function zamine_servicios_repuestos() {

	$labels = array(
		'name'                  => _x( 'Servicios y repuestos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Servicio o Repuesto', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Servicios y Repuestos', 'text_domain' ),
		'name_admin_bar'        => __( 'Servicios y Repuestos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Crear nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo', 'text_domain' ),
		'edit_item'             => __( 'Edit servicio o producto', 'text_domain' ),
		'update_item'           => __( 'Actualizar item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'view_items'            => __( 'Ver Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Servicio o Repuesto', 'text_domain' ),
		'description'           => __( 'Son servicios y repuestos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-post',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'serv_y_repuestos', $args );

}
add_action( 'init', 'zamine_servicios_repuestos', 0 );