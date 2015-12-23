<?php
/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

/* ------------------------------ WEBSITE / APP GLOBAL SETTINGS - MUST BE REVIEWED ------------------------------ */
// current protocol
$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "https") $protocol = "https://";
define('PROTOCOL', $protocol);
define('DOMAIN',$_SERVER['HTTP_HOST']);

// environment urls WITHOUT protocol
$localurl = 'local.mj-elteknik.dk';
$stagingurl = 'mj-elteknik.plantplant.dk';
$productionurl = '';

// TESTING - bugherd project key - comment in #63 and optionally #49
// $bugherdProjectKey = "[project_key]";

/* ------------------------------ WEBSITE / APP GLOBAL SETTINGS - MUST BE REVIEWED ------------------------------ */

if(PROTOCOL == "https://"){
    define('FORCE_SSL_ADMIN', true);
    $_SERVER['HTTPS']='on';
}

switch($_SERVER['HTTP_HOST']) {
    case $localurl == $_SERVER['HTTP_HOST']:
    // local environment
        $url = PROTOCOL . $localurl;
        define('WP_HOME', $url);
        define('WP_SITEURL', $url.'/wordpress');
        define('DB_NAME', 'mj-elteknik');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_HOST', 'localhost');
        define('ENVIRONMENT', 'local');
        define('WP_DEBUG', true);

        define('WP_CONTENT_URL', $url.'/content');
        define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
        //define('BUGHERD_PROJECT_KEY', $bugherdProjectKey);
    break;
    case $stagingurl == $_SERVER['HTTP_HOST']:
    // staging environment
        $url = PROTOCOL . $stagingurl;
        define('WP_HOME', $url);
        define('WP_SITEURL', $url.'/wordpress');
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'db.plnt.dk');
        define('ENVIRONMENT', 'staging');
        define('WP_DEBUG', false);

        define('WP_CONTENT_URL', $url.'/content');
        define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
        //define('BUGHERD_PROJECT_KEY', $bugherdProjectKey);
    break;
    case "www.".$productionurl == $_SERVER['HTTP_HOST']:
    case $productionurl == $_SERVER['HTTP_HOST']:
        // production environment
        $url = PROTOCOL . $_SERVER['HTTP_HOST'];
        define('WP_HOME', PROTOCOL . $_SERVER['HTTP_HOST']);
        define('WP_SITEURL', PROTOCOL . $_SERVER['HTTP_HOST'].'/wordpress');
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'db.plnt.dk');
        define('ENVIRONMENT', 'production');
        define('WP_DEBUG', false);

        define('WP_CONTENT_URL', $url.'/content');
        define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content' );
    break;
    default :
        die("Missing configuration for this host.");
    break;
}
/* Default */

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define( 'WP_AUTO_UPDATE_CORE', true );
define( 'DISALLOW_FILE_EDIT', true );
define('FS_METHOD','direct');
define('WP_DEFAULT_THEME', 'plant_boilerplate');

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'KQ_W;y?S -&|JY0atMJdi&T_mP ?>op0-a(u9C}7i7,!rP<9g>]WNo(`S]Zg#T%2');
define('SECURE_AUTH_KEY',  'i|-kBK7GRL*[[0Q(`#{m4*i`M[4_D-w<$<[vt `3vDY%s9]WdGKW^q+JJQ;Sv1 Q');
define('LOGGED_IN_KEY',    '3SkGG<Jo0IG!`24!|`M+.Vcn f*}y#h0S *<-D0I2kH,JLh*08B>*k5Me%o~yGb-');
define('NONCE_KEY',        '/]-<YZw6Jgj8_7>?tp1hEDV:_#Eoc5XVcQYg-:MPJHERYG$fI-}AMXi,O`9[GAhk');
define('AUTH_SALT',        '{?wp8ZaoS~&];w8l2u-5,cw)V<gxL3/EkRwqo2#zCK0~x3~p =4][@OKon7B=%~/');
define('SECURE_AUTH_SALT', 'hF.WK{xtaoFadxD$d[~M}7}L 4jBqu sl&tX-)<cDiUSk7uWj<]BM`H0,8*V.|IQ');
define('LOGGED_IN_SALT',   '^7@HO2TCIpvD|zt31L|y+i++-GVT/)2#qpQz_A^37};m.HM23?_[]eWf5Mk!1y1B');
define('NONCE_SALT',       '3S`ww8FP#0R1bs!B`!u8#uK)a_[e|uX3%j^ T[9#Q]ff/U[#tM{t?Jg-H^Vs[gD)');


$table_prefix = 'wp_';

if (!defined('ABSPATH'))
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once (ABSPATH . 'wp-settings.php');