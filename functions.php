<?php

  /**
   * ECDD Theme functions and definitions
   *
   * @link https://developer.wordpress.org/themes/basics/theme-functions/
   *
   * @package WordPress
   * @subpackage ECDD
   * @since 1.0
   */

  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function ecdd_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Add custom logo
    add_theme_support('custom-logo');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
      'top'    => __('Top Menu', 'ecdd'),
      'header' => __('Header Menu', 'ecdd'),
      'footer' => __('Footer Menu', 'ecdd'),
      'mobile' => __('Mobile Menu', 'ecdd'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array('comment-form','comment-list','gallery','caption'));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array('aside','image','video','quote','link','gallery','audio'));
  }

  add_action( 'after_setup_theme', 'ecdd_setup' );

  // Remove Generator Version in the head.
  remove_action('wp_head', 'wp_generator');

  /**
   * Styles and scripts
   *
   * @since 1.0.0
   */
  if (file_exists(dirname(__FILE__).'/assets/functions/scripts_styles.php')) {
    require_once( dirname(__FILE__).'/assets/functions/scripts_styles.php');
  }

  /**
   * Add a pingback url auto-discovery header for singularly identifiable articles.
   */
  function ecdd_pingback_header() {
    if ( is_singular() && pings_open() ) {
      printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
  }
  add_action( 'wp_head', 'ecdd_pingback_header' );

  // remove wp version param from any enqueued scripts
  function ecdd_remove_wp_ver_css_js($src) {
      if ( strpos( $src, 'ver=' ) )
          $src = remove_query_arg( 'ver', $src );
          //$ver = "?ver=".date("odm");
      return $src.$ver;
  }
  add_filter( 'style_loader_src', 'ecdd_remove_wp_ver_css_js', 9999 );
  add_filter( 'script_loader_src', 'ecdd_remove_wp_ver_css_js', 9999 );

  /**
   * Replaces "[...]" (appended to automatically generated excerpts) with ... and
   * a 'Continue reading' link.
   *
   * @since ECDD 1.0
   *
   * @return string 'Continue reading' link prepended with an ellipsis.
   */
  function ecdd_excerpt_more( $link ) {
    if ( is_admin() ) {
      return $link;
    }

    $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
      esc_url( get_permalink( get_the_ID() ) ),
      /* translators: %s: Name of current post */
      sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecdd' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
  }
  add_filter( 'excerpt_more', 'ecdd_excerpt_more' );

  add_filter('show_admin_bar', '__return_false');

  /**
   * Register widget area.
   *
   * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
   */
  function ecdd_widgets_init() {}

?>


