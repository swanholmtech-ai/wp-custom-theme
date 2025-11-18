<?php
function my_theme_enqueue_styles() {
    wp_enqueue_script('slider-images', get_theme_file_uri('/build/index.js'), array('jquery'), false, true);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('my-first-style', get_template_directory_uri() . '/build/style-index.css');
    wp_enqueue_style('my-second-style', get_template_directory_uri() . '/build/index.css');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function swanholmtech_features() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'swanholmtech_features');
?>
 