<?php
/*
Plugin Name: Releases
Plugin URI:
Description:
Author:
Version:
Author URI:
*/

register_activation_hook(__FILE__, 'releases_activate');
register_deactivation_hook(__FILE__, 'releases_deactivate');

function releases_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/releases_loader.php';
    $loader = new ReleasesLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function releases_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/releases_loader.php';
    $loader = new ReleasesLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
