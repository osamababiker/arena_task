<?php
 

function theme_assets() {
  wp_enqueue_script('bootstrap.js', get_theme_file_uri('/assets/vendor/bootstrap/dist/js/bootstrap.min.js'), array('jquery'), '3.3.1', true);
  wp_enqueue_script('script.js', get_theme_file_uri('/assets/js/script.js'), array('jquery'), '3.3.1', true);
  wp_enqueue_style('gotham-font', get_theme_file_uri('/assets/fonts/GothamBook.ttf'));
  wp_enqueue_style('bootstrap.css', get_theme_file_uri('/assets/vendor/bootstrap/dist/css/bootstrap.min.css'));
  wp_enqueue_style('animate', get_theme_file_uri('/assets/vendor/animate/animate.min.css'));
  wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'));
  wp_enqueue_style('responsive', get_theme_file_uri('/assets/css/responsive.css'));
}
add_action('wp_enqueue_scripts', 'theme_assets');

function arena_features(){
  register_nav_menu('navMenu', 'Main Menu');
  add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme', 'arena_features');


/** ===================================================================*/
/**  to load more properties */
function load_more_posts(){
  $next_page = $_POST['current_page'] + 1;
  $query = new WP_Query([
    'post_type' => 'property',
    'posts_per_page' => 3,
    'paged' => $next_page
  ]);

  if($query->have_posts()) :
    ob_start();
    while($query->have_posts()) : $query->the_post();
      get_template_part('template-parts/posts');
    endwhile;
    wp_send_json_success(ob_get_clean());
  else : wp_send_json_error(
    "<div class=\"col-12 m-3 text-center alert alert-info\"> No more posts to load  </div>"
  );
  endif;

}
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_load_more_posts', 'load_more_posts');



/** ===================================================================*/
/**  contact form  */
include('contact-form.php');








