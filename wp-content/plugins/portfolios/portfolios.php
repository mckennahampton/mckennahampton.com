<?php
/*
Plugin Name: Portfolios
Plugin URI:
Description:
Author:
Version:
Author URI:
*/

register_activation_hook(__FILE__, 'portfolios_activate');
register_deactivation_hook(__FILE__, 'portfolios_deactivate');

function portfolios_activate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/portfolios_loader.php';
    $loader = new PortfoliosLoader();
    $loader->activate();
    $wp_rewrite->flush_rules( true );
}

function portfolios_deactivate() {
    global $wp_rewrite;
    require_once dirname(__FILE__).'/portfolios_loader.php';
    $loader = new PortfoliosLoader();
    $loader->deactivate();
    $wp_rewrite->flush_rules( true );
}
