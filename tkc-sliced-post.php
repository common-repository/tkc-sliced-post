<?php
/*
Plugin Name: TKC Sliced Post Helper
Plugin URI: https://wordpress.org/plugins/tkc-sliced-post/
Description: Help user easy to split Wordpress post/page into multiple pages.
Author: Thinh Pham
Author URI: http://thinhknowscode.com/

Version: 1.0.0

Text Domain: tkc
Domain Path: /languages

License: GNU General Public License v2.0 (or later)
License URI: http://www.opensource.org/licenses/gpl-license.php
*/
add_action( 'init', 'tkc_buttons' );
function tkc_buttons() {
    add_filter( 'mce_external_plugins', 'tkc_add_buttons' );
    add_filter( 'mce_buttons', 'tkc_register_buttons' );
}

function tkc_add_buttons( $plugin_array ) {
    $plugin_array['tkc'] =  plugins_url( '/tkc-plugin.js', __FILE__ );
    return $plugin_array;
}
function tkc_register_buttons( $buttons ) {
    array_push( $buttons, 'separator', 'tkcsplitpost' );
	return $buttons;
}