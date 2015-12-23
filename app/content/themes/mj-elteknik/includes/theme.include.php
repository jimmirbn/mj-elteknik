<?php
/* Enable thumbnails to post & page */
add_theme_support('post-thumbnails', array('post', 'page'));
add_filter( 'show_admin_bar', '__return_false' );

/* Register menu */
// register_nav_menus( array(
//     'primary' => __( 'Primary Menu', 'Main navigation' ),
// ) );
/* Remove auto added p-tags */
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );
// 
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    acf_set_options_page_title( __('Footer indhold') );
    
}
add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'page', 'editor' );
}