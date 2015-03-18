<?php
/**
 * TBF Tester Functions
 */

/**
 * Includes the framework.
 */
require_once( get_template_directory() . '/framework/framework.php' );

/**
 * Includes front-end assets.
 */
function tbft_assets() {

  wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', array( 'tbf' ) );
  wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'tbft_assets' );

/**
 * Registers sidebars.
 */
function tbft_sidebars() {

  register_sidebar();

}
add_action( 'init', 'tbft_sidebars' );

/**
 * Adds theme support for the features we're a wantin'.
 */
function tbft_theme_support() {

  add_theme_support( 'title-tag' );

  add_theme_support( 'tbf', array(
    'widgets' => array(
      'events' => array(
        'fields' => array( 'title', 'number', 'thumbnail', 'excerpt', 'date', 'time', 'venue', 'address', 'map' )
      ),
      'locations' => array(
        'fields' => array( 'title', 'thumbnail', 'excerpt', 'address', 'phone', 'times', 'map' )
      ),
      'people' => array(
        'fields' => array( 'title', 'group', 'number', 'thumbnail', 'excerpt', 'position', 'phone', 'email', 'urls' )
      ),
      'sermons' => array(
        'fields' => array( 'title', 'number', 'thumbnail', 'excerpt', 'date', 'media' )
      )
    )
  ) );

}
add_action( 'after_setup_theme', 'tbft_theme_support' );
