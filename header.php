<?php
/**
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ECDD
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="pt-BR" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class();?> >
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=118810578196289";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <?php get_search_form() ?>
  <div class="wrap">
    <span aria-hidden="true">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'mobile',
      'container' => 'nav',
      'container_class' => 'main-menu-mobile',
      'menu_class' => 'main-menu-mobile__list',
    ));
    ?>
    </span>
