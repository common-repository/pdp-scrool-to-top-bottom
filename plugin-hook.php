<?php
/*
Plugin Name:pdp Scrool to top & bottom
Plugin URI:http://xossarif.boxhost.me/xoss/
Author:Md.Arif Uddin
Author URI:http://arif11015.wordpress.com/
Version:1.1
Description:This is a simple plugin for Scrool to top & bottom.
*/


/* Adding Latest jQuery from Wordpress */
function pdp_scrool_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'pdp_scrool_latest_jquery');


add_filter( 'wp_footer' , 'pdp_scrool_up_to_down' );
function pdp_scrool_up_to_down() {
echo '<div id="totopscroller"></div>';
}


/*Some Set-up*/
define('PDP_SCROOL_UP_TO_DOWN_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );



/* Adding Plugin javascript file */
wp_enqueue_script('pdp-scrool-up-to-down-plugin-script', PDP_SCROOL_UP_TO_DOWN_PLUGIN_PATH.'js/jquery.totop.js', array('jquery'));
/* Adding plugin javascript active file */
wp_enqueue_script('pdp-scrool-up-to-down-plugin-active', PDP_SCROOL_UP_TO_DOWN_PLUGIN_PATH.'js/active.js', array('jquery'));

/* Adding Plugin custm CSS file */
wp_enqueue_style('pdp-scrool-up-to-down-plugin-style', PDP_SCROOL_UP_TO_DOWN_PLUGIN_PATH.'css/totop.css');
wp_enqueue_style('pdp-scrool-up-to-down-plugin-main-style', PDP_SCROOL_UP_TO_DOWN_PLUGIN_PATH.'css/main.css');

?>