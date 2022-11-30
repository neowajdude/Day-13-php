<?php

wp_enqueue_style( 'style-1', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri(). './doc/css/bootstrap.min.css' );
wp_enqueue_script( 'script-name', get_template_directory_uri() . './doc/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support('custom-logo');

register_nav_menus([
    'TM'=>'Primary',
    'FM'=>'Footer'
]);