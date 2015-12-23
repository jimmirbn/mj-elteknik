<?php
// function custom_post_type() {
// 	$name = "Læringsmoduler";
// 	$singular_name = "Læringsmodul";
// 	$slug = "laeringsmodul";

// 	$labels = array(
// 		'name'               => $name,
// 		'singular_name'      => $singular_name,
// 		'add_new'            => 'Add New',
// 		'add_new_item'       => 'Add New '.$singular_name,
// 		'edit_item'          => 'Edit '.$singular_name,
// 		'new_item'           => 'New '.$singular_name,
// 		'all_items'          => 'All '.$name,
// 		'view_item'          => 'View '.$singular_name,
// 		'search_items'       => 'Search '.$name,
// 		'not_found'          => 'No '.strtolower($name).' found',
// 		'not_found_in_trash' => 'No '.strtolower($name).' found in Trash',
// 		'parent_item_colon'  => '',
// 		'menu_name'          => $name
// 		);
// 	$args = array(
//     // http://mannieschumpert.com/blog/using-wordpress-3-8-icons-custom-post-types-admin-menu/
//     // http://melchoyce.github.io/dashicons/
// 		'menu_icon' => 'dashicons-portfolio',
// 		'labels'             => $labels,
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => array( 'slug' => $slug ),
// 		'capability_type'    => 'page',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array('revisions', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
// 		);
// 	register_post_type( $slug, $args );
// }
// add_action( 'init', 'custom_post_type' );