<?php
/**
 * @package ECDD
 * Template Name: Graduação Template
 * Template Post Type: post, graduacao, ead
 */
?>

<?php get_header(); ?>
<header class="header">
  <div class="header-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('assets/views/bar-top', 'bar-top'); ?>
          <?php get_template_part('assets/views/head', 'head'); ?>
          <?php get_template_part('assets/views/banner-index', 'banner-index'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header-background">
    <img src="<?php bloginfo('template_directory')?>/assets/img/bg-1-desktop.png" alt="">
  </div>
</header>

<main class="main">
  <?php get_template_part('assets/views/content-graduacao', 'content-graduacao'); ?>
</main>

<?php get_footer(); ?>

