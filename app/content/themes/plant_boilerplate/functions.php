<?php

/* Remove auto added p-tags */
add_filter('jpeg_quality', function($arg){ return (int)100; });
add_filter( 'wp_editor_set_quality', function($arg){ return (int)100; });
add_filter( 'automatic_updates_is_vcs_checkout', '__return_false' );

/* Responsive times. Images should always be max-width:100% */
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

/* Object to array */
function object_to_array($data)
{
    if (is_array($data) || is_object($data)) {
        $result = array();
        foreach ($data as $key => $value) {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $data;
}

/* Sanitize filenames */
add_filter('sanitize_file_name', function($string) {
    $string = str_replace("æ", "ea", $string);
    $string = str_replace("ø", "oe", $string);
    $string = str_replace("å", "aa", $string);
    $string = str_replace("Æ", "ea", $string);
    $string = str_replace("Ø", "oe", $string);
    $string = str_replace("Å", "aa", $string);
    
    $string = str_replace(" ", "_", $string);
    $string = str_replace("..", ".", $string);
    $string = strtolower($string);

    preg_match_all("/[^0-9^a-z^_^.]/", $string, $matches);
    foreach ($matches[0] as $value) {
            $string = str_replace($value, "", $string);
    }
    return $string;
}, 10);

/* Make sure that we replace current site_url from postcontent on save - avoid links and images pointing to staging/dev server */
add_filter('content_save_pre','pre_save_fixes','99');
function pre_save_fixes($content) {
    $content = str_ireplace('src=\"'.get_bloginfo('url'), 'src=\"', $content );
    return str_ireplace('href=\"'.get_bloginfo('url'), 'href=\"', $content );
}

/** ALLOW SVG **/
add_filter('upload_mimes', 'fix_mimes');
function fix_mimes($mimes){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}