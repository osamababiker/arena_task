<?php 


function arena_post_types(){
    register_post_type('property', array(
        'supports' => array('title', 'excerpt'),
        'public' => true,
        'labels' => array(
            'name' => 'Properties',
            'add_new_item' => 'Add New Property',
            'edit_item' => 'Edit Property',
            'all_items' => 'All Properties',
            'singular_name' => 'Property'
        ),
        'menu_icon' => 'dashicons-admin-home'
    ));
  }
  
  add_action('init', 'arena_post_types');