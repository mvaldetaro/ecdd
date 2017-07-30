<?php
/**
 * @package ECDD
 * Template Name: Depoimento
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
<header class="header header--internal">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('assets/views/bar-top', 'bar-top'); ?>
          <?php get_template_part('assets/views/head', 'head'); ?>
        </div>
      </div>
    </div>
  </div>
  <div aria-hidden="true" class="header-background">
    <?php
    $url = get_template_directory_uri();
    $alt = 'ecdd';
    if ( has_post_thumbnail() ) {
      the_post_thumbnail();
    } else {
      echo '<img src="'.$url.'/assets/img/bg-category-head.jpg" alt="'.$alt.'">';
    }
    ?>
  </div>
</header>

<main class="main">
  <div class="container">
  <?php get_template_part('assets/views/breadcrumb', 'breadcrumb'); ?>
  <?php get_template_part('assets/views/content-depoimento', 'depoimento'); ?>
  </div>
</main>
<div class="row"></div>
<div class="col-md-2"></div>
<div class="col-md-2"></div>

<?php get_footer(); ?>

