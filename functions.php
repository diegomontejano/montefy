<?php 
function montefy_enqueue(){
    // enqueue style.css
    wp_enqueue_style('montefy-style', get_stylesheet_uri());
    
    // enqueue scripts.js
    wp_enqueue_script('montefy-head-scripts', get_template_directory_uri() . '/assets/js/head-scripts.js', array(), null, false);

    wp_enqueue_script('montefy-body-scripts', get_template_directory_uri() . '/assets/js/body-scripts.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'montefy_enqueue');

function montefy_gutenberg_enqueue(){
    // enqueue style.css
    wp_enqueue_style('montefy-gutenberg-style', get_stylesheet_uri());
    
    // enqueue scripts.js
    wp_enqueue_script('montefy-gutenberg-head-scripts', get_theme_file_uri('/assets/js/head-scripts.js'), array('wp-blocks', 'wp-dom'), false);

    wp_enqueue_script('montefy-gutenberg-body-scripts', get_theme_file_uri('/assets/js/body-scripts.js'), array('wp-blocks', 'wp-dom'), true);
}
add_action('enqueue_block_editor_assets', 'montefy_gutenberg_enqueue');

function montefy_config(){
    // add nav menus
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu'
        )
     );

     // add gutenberg support
     add_theme_support('wp-block-styles');
     add_theme_support('align-wide');

     // add woocommerce support
     add_theme_support('woocommerce');
     add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'montefy_config', 0);
