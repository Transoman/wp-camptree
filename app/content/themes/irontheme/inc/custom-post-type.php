<?php
function reviews_post_type() {

  $labels = array(
    'name'                  => _x( 'Reviews', 'Post Type General Name', 'ith' ),
    'singular_name'         => _x( 'Reviews', 'Post Type Singular Name', 'ith' ),
    'menu_name'             => __( 'Reviews', 'ith' ),
    'name_admin_bar'        => __( 'Reviews', 'ith' ),
    'archives'              => __( 'Reviews', 'ith' )
  );
  $args = array(
    'label'                 => __( 'Reviews', 'ith' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail' ),
    'hierarchical'          => false,
    'public'                => false,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-testimonial',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => false,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'reviews', $args );

}
add_action( 'init', 'reviews_post_type', 0 );