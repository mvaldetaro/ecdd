<?php
/**
 * @package ECDD
 * Template Name: Bolsa de Estudo
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
  </div>
</header>

<main class="main">
  <?php get_template_part('assets/views/atendimento-banner', 'atendimento-banner'); ?>
  <?php get_template_part('assets/views/breadcrumb', 'breadcrumb'); ?>
  <?php get_template_part('assets/views/content-bolsa', 'content-bolsa'); ?>
  <?php //get_template_part('assets/views/como-chegar', 'como-chegar'); ?>
</main>

<?php get_footer(); ?>

