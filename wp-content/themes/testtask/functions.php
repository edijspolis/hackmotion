<?php

function add_flexboxgrid_CSS() {
    wp_enqueue_style( 'flexboxgrid-styles', get_template_directory_uri() . "/assets/css/flexboxgrid.min.css?ver=6.7.1");
}

add_action('wp_enqueue_scripts', 'add_flexboxgrid_CSS');

function add_enter_view_SCRIPT() {
    wp_enqueue_script( 'enter-view-script', get_template_directory_uri() . "/assets/scripts/enter-view.min.js?ver=2.0.1");
}

add_action('wp_enqueue_scripts', 'add_enter_view_SCRIPT');

function add_main_SCRIPT() {
    wp_enqueue_script( 'main-script', get_template_directory_uri() . "/assets/scripts/main.js");
}

add_action('wp_enqueue_scripts', 'add_main_SCRIPT');

function add_custom_query_var($vars) {
    $vars[] = "c";
    return $vars;
}

add_filter( 'query_vars', 'add_custom_query_var' );