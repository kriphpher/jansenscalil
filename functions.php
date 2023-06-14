<?php 
function jans_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-icon');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'jans_support');

function jans_menus(){
    $locations=array('primary'=>"Header Menu", 'secondary'=>"Footer Menu");
    register_nav_menus($locations);
}
add_action('init', 'jans_menus');

function jans_styles(){
    $version=wp_get_theme()->get('Version');
    wp_enqueue_style('jans-custom', "/wp-content/themes/jansenscalil/assets/css/custom.css", array('jans-bootstrap'), $version, 'all');
    wp_enqueue_style('jans-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css", array(), '5.3.0', 'all');
    wp_enqueue_style('jans-owl', "/wp-content/themes/jansenscalil/assets/vendor/Owl/css/owl-carousel.css", array(), '2.3.4', 'all');
    wp_enqueue_style('jans-owl-theme', "/wp-content/themes/jansenscalil/assets/vendor/Owl/css/owl-carousel-theme.css", array(), '2.3.4', 'all');
    wp_enqueue_style('jans-style', "style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'jans_styles');

function jans_scripts(){
    $version=wp_get_theme()->get('version');
    wp_enqueue_script('jans-scripts', "/wp-content/themes/jansenscalil/assets/js/scripts.js", array(), $version, 'all', true);
    wp_enqueue_script('jans-jquery', "https://code.jquery.com/jquery-3.7.0.js", array(), '3.7.0', 'all', true);
    wp_enqueue_script('jans-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js", array(), '5.3.0', 'all', true);
    wp_enqueue_script('jans-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js", array(), '2.11.8', 'all', true);
    wp_enqueue_script('jans-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js", array(), '5.3.0', 'all', true);
    wp_enqueue_script('jans-owl', "/wp-content/themes/jansenscalil/assets/vendor/Owl/js/owl-carousel.js", array(), '2.3.4', 'all', true);
}
add_action('wp_enqueue_scripts', 'jans_scripts');
?>