<?php

function theme_assets() {
  wp_enqueue_script('bootstrap.js', get_theme_file_uri('/assets/vendor/bootstrap/dist/js/bootstrap.min.js'), array('jquery'), '3.3.1', true);
  wp_enqueue_script('smooth-scroll', get_theme_file_uri('/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('script.js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', false);   
  wp_enqueue_style('gotham-font', get_theme_file_uri('/assets/fonts/gotham_book_regular.otf'));
  wp_enqueue_style('bootstrap.css', get_theme_file_uri('/assets/vendor/bootstrap/dist/css/bootstrap.min.css'));
  wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'));
} 

add_action('wp_enqueue_scripts', 'theme_assets');





