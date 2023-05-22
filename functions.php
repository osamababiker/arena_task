<?php

function theme_assets() {
  wp_enqueue_script('bootstrap.js', get_theme_file_uri('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('smooth-scroll', get_theme_file_uri('/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('swiper.js', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.js'), array('jquery'), '1.0', true); 
  wp_enqueue_script('script.js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '1.0', false);   
  wp_enqueue_style('preconnect1', '//fonts.googleapis.com');
  wp_enqueue_style('preconnect2', '//fonts.gstatic.com');
  wp_enqueue_style('cairo-google-fonts', '//fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('swiper', get_theme_file_uri('/assets/vendor/swiper/swiper-bundle.min.css'));
  wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'));
} 

add_action('wp_enqueue_scripts', 'theme_assets');

function theme_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'theme_features');

