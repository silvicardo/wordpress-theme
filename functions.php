<?php

/* minimal Theme functions and definitions */

if ( !function_exists( 'minimal_theme_setup' ) && !function_exists('minimal_theme_style_plus_scripts')) {

  # Sets up theme defaults and registers support for various WordPress features.
  # Note that this function is hooked into the after_setup_theme hook, which
  # runs before the init hook. The init hook is too late for some features, such
  # as indicating support for post thumbnails.

  function minimal_theme_setup() {

    # **** WP Bootstrap Navwalker **** #

    # Register Custom Navigation Walker

    if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	      # file does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
        } else {
      	# file exists... require it.
      	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

        register_nav_menus(['primary' => __( 'Primary Menu', 'minimal' )]);
      }

    #Let WordPress manage the document title
    add_theme_support('title-tag');

    #Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    #Switch default core markup for search form, comment form, and comments
    #to output valid HTML5.

    add_theme_support( 'html5', array('comment-form',
    'comment-list',
    'caption'));

  }

  add_action( 'after_setup_theme', 'minimal_theme_setup' );

  #Manage the_excerpt defaul length
  function wpdocs_custom_excerpt_length($length) {
    return 45;
  }

  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

  #the excerpt ender string
  function wpdocs_excerpt_more( $more ) {
    return '....';
  }

  add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

  # custom class to the excerpt
  function add_class_to_excerpt( $excerpt ) {
      return str_replace('<p', '<p class="excerpt"', $excerpt);
  }

  add_filter( 'the_excerpt', 'add_class_to_excerpt' );


  # adding styles and scripts
  function minimal_theme_style_plus_scripts() {

    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js');

  }

  add_action('wp_enqueue_scripts','minimal_theme_style_plus_scripts');

}

?>
