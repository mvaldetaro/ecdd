<?php
/**
 * @package ECDD
 * Template Name: Search Page
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
        </div>
      </div>
    </div>
  </div>
  <div class="header-background">
    <!-- TODO: Inserir Background -->
  </div>
</header>

<main class="main">
  <?php get_template_part('assets/views/content-search', 'content-search'); ?>
</main>

<?php get_footer(); ?>

