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

    // Head sizes
    add_image_size('head-thumb-2x', 2048, 805, true );
    add_image_size('head-thumb-full', 1920, 805, true );
    add_image_size('head-thumb-large', 1185, 830, true );
    add_image_size('head-thumb-medium', 975, 726, true );
    add_image_size('head-thumb-small', 700, 453, true );
    add_image_size('head-thumb-internal', 1920, 217, true );

    // Trabalho Alunos sizes
    add_image_size('works-thumb-large', 570, 321, true );
    add_image_size('works-thumb-medium', 428, 196, true );
    add_image_size('works-thumb-small', 285, 196, true );
    add_image_size('works-thumb-portrait', 285, 321, true );
    add_image_size('works-thumb-square', 167, 167, true );

    // Category sizes
    add_image_size('category-thumb-large', 390, 162, true );
    add_image_size('category-thumb-medium', 375, 100, true );
    add_image_size('category-thumb-small', 100, 100, true );

    // Programas sizes
    add_image_size('category-thumb-large', 390, 162, true );
    add_image_size('category-thumb-medium', 375, 100, true );
    add_image_size('category-thumb-small', 100, 100, true );

    // Eventos sizes
    add_image_size('evento-thumb-large', 390, 162, true );
    add_image_size('evento-thumb-medium', 720, 300, true );
    add_image_size('evento-thumb-small', 290, 195, true );

    // Professores sizes
    add_image_size('professores-thumb-large', 262, 150, true );
    add_image_size('professores-thumb-medium', 213, 120, true );
    add_image_size('professores-thumb-small', 100, 100, true );

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
      'top'    => __('Top Location', 'ecdd'),
      'header' => __('Header Location', 'ecdd'),
      'footer' => __('Footer Location', 'ecdd'),
      'mobile' => __('Mobile Location', 'ecdd'),
      'student' => __('Vida do Aluno Location', 'ecdd'),
      'bolsa' => __('Bolsa de Estudo Location', 'ecdd'),
      'partnership' => __('Parcerias Location', 'ecdd')
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


  function my_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
  }

  add_action('init', 'my_add_excerpts_to_pages' );

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
      sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecdd' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
  }
  add_filter( 'excerpt_more', 'ecdd_excerpt_more' );

  /**
   * Remove Admin Bar.
   */
  add_filter('show_admin_bar', '__return_false');

  /**
   * Register widget area.
   *
   * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
   */
  function ecdd_widgets_init() {}

  /**
   * Lista de docentes.
   */
  function addClassDocente($i) {
    $classe = "item-".$i;
    if($i > 4) {
      $classe .= " item-invisible";
    }
    echo $classe;
  }

  function rowListDocente($i) {
    if($i == 4) {
      echo '</div><div class="row">';
    }
  }

  function programasList($category_name, $post_type) {
    global $post; // required
    $args = array(
      'category_name' => $category_name,
      'post_type' => $post_type,
      'post_status' => 'publish',
      'posts_per_page' => -1
    );
    $custom_posts = get_posts($args);
    foreach($custom_posts as $post) : setup_postdata($post);
      echo '<li class="footer__courses__list__item">';
      echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a>';
      echo '</li>';
    endforeach;
  }

  /**
   * Create Post Types
   * @since 1.0.0
   */
  if (file_exists(dirname(__FILE__).'/assets/functions/post-types.php')) {
    require_once( dirname(__FILE__).'/assets/functions/post-types.php');
  }

  /**
   * Breadcrumb
   * @since 1.0.0
   */
  if (file_exists(dirname(__FILE__).'/assets/functions/breadcrumb.php')) {
    require_once( dirname(__FILE__).'/assets/functions/breadcrumb.php');
  }

  /**
   * Trabalhos dos alunos
   * @since 1.0.0
   */
  if (file_exists(dirname(__FILE__).'/assets/functions/portfolio-programa.php')) {
    require_once( dirname(__FILE__).'/assets/functions/portfolio-programa.php');
  }

  /**
   * Custom excerpt
   * @since 1.0.0
   */
  function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 90);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'...';
    return $excerpt;
  }

  function get_sub_excerpt($content, $size){
    $excerpt = $content;
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $size);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'...';
    return $excerpt;
  }

  function custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>


