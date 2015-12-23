<?php

include_once('includes/theme.include.php');
// include_once('includes/navigations.include.php');
include_once ('includes/ajax.include.php');
// include_once('includes/custom-post-type.include.php');
// include_once('includes/ACF-register-modules.php');
include_once('includes/WP-admin-settings.include.php');

/* PhpFastCache *
require_once("vendors/phpFastCache/phpfastcache.php");
phpFastCache::setup("storage","files");
phpFastCache::setup("path",$_SERVER['DOCUMENT_ROOT']."/content/fastcache/"); // make sure folder is created and that the server can write to the folder, preferably place the folder outside document root
/* EOF - PhpFastCache */
function isEven($number) {
    $isEven = false;
    if (is_numeric ($number)) {
        if ( $number % 2 == 0) $isEven = true;
    }
    return $isEven;
}
function add_bugherd() {
    print "
        <script type='text/javascript'>
            (function (d, t) {
              var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
              bh.type = 'text/javascript';
              bh.src = '//www.bugherd.com/sidebarv2.js?apikey=" . BUGHERD_PROJECT_KEY . "';
              s.parentNode.insertBefore(bh, s);
              })(document, 'script');
        </script>
    ";
}
function add_jsconstants() {
    print "
        <script type='text/javascript'>
            var baseUrl     = '".get_bloginfo('url')."';
            var themeUrl     = '".get_stylesheet_directory_uri()."';
            var domain      = '".DOMAIN."';
            var ajaxUrl     = '".admin_url('admin-ajax.php')."';
        </script>
    "; 
}
function theme_init() {  
    global $pagenow;

    // Assets version - on deploy we'll bump the version number
    if ( get_option( 'asset_version' ) !== false ) {

        // Update version using URL param (post deploy)
        if(isset($_GET['post_deploy_hook']) && $_GET['post_deploy_hook'] == "j2r39fwj"){
            update_option( 'asset_version', get_option('asset_version') + .1 );
            plant_clearCache();
        }

        $asset_version = get_option('asset_version');
    } else {
        add_option('asset_version', 0.1, 'yes');
        $asset_version = get_option('asset_version');
    }
    // EOF - Assets version - on deploy we'll bump the version number

    if ( ! is_admin() && 'wp-login.php' !== $pagenow ) {
        
        $themeUrl = get_stylesheet_directory_uri();
        wp_register_script('modernizr', $themeUrl . (ENVIRONMENT !== 'local' ? '/js/modernizr-custom.min.js' : '/js/modernizr-custom.js') , false, $asset_version, false);
        wp_enqueue_script('modernizr');
        wp_deregister_script('jquery');
        wp_register_script('jquery', $themeUrl . (ENVIRONMENT !== 'local' ? '/js/vendors.min.js' : '/js/vendors.js'), false, $asset_version, true);  
        wp_enqueue_script('jquery');
        wp_register_script('site', $themeUrl . (ENVIRONMENT !== 'local' ? '/js/site.min.js' : '/js/site.js'), array('jquery'), $asset_version, true);
        wp_enqueue_script('site');
        wp_register_style('style', $themeUrl . (ENVIRONMENT === 'local' ? '/style.min.css' : '/style.css'), array(), $asset_version);
        wp_enqueue_style('style');
        if (defined('BUGHERD_PROJECT_KEY')) {
            add_action('wp_head', 'add_bugherd');
        }
        add_action('wp_head', 'add_jsconstants');
    }  
}
add_action('init', 'theme_init');

// Remove RSS feeds for comments for each page/post
function remove_comments_rss( $for_comments ) {
    return;
}
add_filter('post_comments_feed_link','remove_comments_rss');

/* Custom Plant message on the login page - for local and staging */
function smallenvelop_login_message( $message ) {
    if ( empty($message) ){
        return "<h1 style='color:#00be9b; line-height:120%;'>This is the test/staging version of the project.</h1><h2 style='color:#00be9b; padding-top:20px; line-height:120%; text-align:center;'>Did you intend to access the production version?</h2><br />&nbsp;";
    } else {
        return $message;
    }
}
if(ENVIRONMENT != "production") add_filter( 'login_message', 'smallenvelop_login_message' );


/**
 * This function clear opcache if opcache is present
 *
 * @return void
 * @author Jens Sogaard
 **/
function plant_clearCache(){
  if(function_exists("opcache_reset")) opcache_reset();
}
add_action( 'save_post', 'plant_clearCache' );
add_action( 'post_updated', 'plant_clearCache', 10, 3 ); //don't forget the last argument to allow all three arguments of the functio
