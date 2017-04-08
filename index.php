<?php
/**
 * @package ECDD
 */
?>

<?php get_header(); ?>

<header class="header">
  <?php get_template_part('assets/views/bar-top', 'bar-top'); ?>
  <?php get_template_part('assets/views/head', 'head'); ?>
  <?php get_template_part('assets/views/banner-index', 'banner-index'); ?>
</header>

<main class="main">
  <?php get_template_part('assets/views/content-index', 'content-index'); ?>
</main>

<?php get_footer(); ?>

