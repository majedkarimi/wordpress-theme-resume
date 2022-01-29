<?php

function add_theme_scripts(){
    // add bootstrap
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri(  ). '/assets/vendors/bootstrap/css/bootstrap.min.css', array(), false, 'all' );
    // add css
    wp_enqueue_style( 'style', get_stylesheet_uri(  ), array(), false, 'all' );

    // add script
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri(  ) . "/assets/vendors/bootstrap/js/bootstrap.min.js", array(), false, true );
    wp_enqueue_script( 'typejs', get_template_directory_uri(  ) . "/assets/vendors/typed.js/typed.min.js", array(), false, true );
    wp_enqueue_script( 'mainjs', get_template_directory_uri(  ) . "/assets/js/main.js", array(), false, true );


}


add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// dynamic title tab :

function farsdev_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme','farsdev_setup_theme');
