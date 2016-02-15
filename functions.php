<?php
/**
 * TBCF Tester Functions
 */

/**
 * Includes the framework.
 */
require_once get_template_directory() . '/framework/framework.php';

/**
 * Includes front-end assets.
 */
function tbcft_assets() {

  wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array( 'tbcf' ) );
  wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'tbcft_assets' );

/**
 * Registers sidebars.
 */
function tbcft_sidebars() {

  register_sidebar( array(
    'name' => 'Sidebar',
    'id'   => 'sidebar'
  ) );

}
add_action( 'init', 'tbcft_sidebars' );

/**
 * Adds theme support for the features we're a wantin'.
 */
function tbcft_theme_support() {

  add_theme_support( 'title-tag' );

  add_theme_support( 'tcbf', array(
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
add_action( 'after_setup_theme', 'tbcft_theme_support' );
