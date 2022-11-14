<?php

/**
 * Register and Enqueue Styles
 */
function ricorico_register_styles() {
    wp_enqueue_style( 'ricorico-styles', get_theme_file_uri('assets/build/css/main.css'), array() );
}
add_action( 'wp_enqueue_scripts', 'ricorico_register_styles' );

/**
 * Register and Enqueue Scripts
 */

function twpp_enqueue_scripts() {
    wp_enqueue_script(
      'main-script',
      get_template_directory_uri() . '/assets/build/js/main.js',
      array(),
      false,
      true
    );
  }
  add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );

/**
 * output social_bookmarking_light
 */
function output_wp_social_btns() {
  if ( function_exists( "wp_social_bookmarking_light_output_e" ) ) {
    wp_social_bookmarking_light_output_e();
  }
}
add_shortcode('socialBtns', 'output_wp_social_btns');

function get_category_name() {
  $categories = get_the_category();
  return $categories[0]->name;
}

