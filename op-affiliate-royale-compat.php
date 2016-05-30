<?php

/*
Plugin Name: OptimizePress 2 Affiliate Royale compatilibity plugin
Plugin URI: http://optimizepress.com
Description: Fixes incompatibility issues caused by both plugins using FLOT JS library for charting. Deregisters OP Stats dashboard widget.
Author: info@optimizepress.com
Version: 1.0
Author URI: http://optimizepress.com
*/

function op2af_deregister_opstats_widget()
{
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['op_optin_stats_widget']);

    wp_dequeue_script('flot');
    wp_dequeue_script('excanvas');
    wp_dequeue_script('op-flot-init');
}
add_action('wp_dashboard_setup', 'op2af_deregister_opstats_widget', 11);