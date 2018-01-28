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
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106792089-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-106792089-1');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700" rel="stylesheet">

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){
    if(f.fbq)return;
    n=f.fbq=function(){
      n.callMethod ? n.callMethod.apply(n,arguments): n.queue.push(arguments)
    };
    if(!f._fbq)f._fbq=n;
    n.push=n;
    n.loaded=!0;
    n.version='2.0';
    n.queue=[];
    t=b.createElement(e);
    t.async=!0;
    t.src=v;
    s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)
  }(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1449019218717775'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1449019218717775&ev=PageView&noscript=1"/></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->
  <?php wp_head(); ?>
</head>

<body <?php body_class();?> >
  <?php get_template_part('assets/views/bar-super', 'bar-super'); ?>
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
