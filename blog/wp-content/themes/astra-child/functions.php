<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );







add_action('astra_masthead', 'astra_logo_change_url');
add_action('astra_mobile_header_bar_top', 'astra_logo_change_url');
function astra_logo_change_url(){
	remove_action( 'astra_masthead_content', 'astra_site_branding_markup', 8 );
	add_filter( 'home_url', 'astra_logo_custom_url' );
	add_action( 'astra_masthead_content', 'astra_site_branding_markup', 8 );
}
function astra_logo_custom_url( $url ) {
	return 'https://creditoscardona.com/';
}
add_filter('astra_logo','astra_remove_logo_custom_url');
function astra_remove_logo_custom_url( $html ){
	remove_filter( 'home_url', 'astra_logo_custom_url' );
	return $html;
}


add_action('wp_head','my_analytics', 20);
function my_analytics() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-P0RJD0Q70P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-P0RJD0Q70P');
  </script>
<?php
}