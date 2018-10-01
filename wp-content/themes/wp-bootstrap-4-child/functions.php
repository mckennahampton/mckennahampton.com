<?php

//remove the default theme stuff
remove_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );

//remove the default emoji crap

function grd_remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'grd_remove_tinymce_emoji' );
}
add_action( 'init', 'grd_remove_emoji' );
/**
 * Filter out the tinymce emoji plugin.
 */
function grd_remove_tinymce_emoji( $plugins ) {
	if ( ! is_array( $plugins ) ) {
		return array();
	}
	return array_diff( $plugins, array( 'wpemoji' ) );
}

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');

wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css');

wp_deregister_script('jquery');

wp_register_script( 'bs-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
wp_register_script('greensock', get_stylesheet_directory_uri() . '/js/greensock.js');
wp_register_script('ls-kreaturamedia', get_stylesheet_directory_uri() . '/js/layerslider.kreaturamedia.jquery.js');
wp_register_script('ls-transitions', get_stylesheet_directory_uri() . '/js/layerslider.transitions.js');
wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');


wp_enqueue_script('jquery');
wp_enqueue_script('greensock','','','',true);
wp_enqueue_script('ls-transitions','','','',true);
wp_enqueue_script('ls-kreaturamedia','','','',true);
wp_enqueue_script('bs-script','','','',true);
wp_enqueue_script('scripts','','','',true);

?>