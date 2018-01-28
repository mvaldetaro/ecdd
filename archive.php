<?php
/**
 * @package ECDD
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
    //$url = get_template_directory_uri();
    //$alt = 'ecdd';
    //echo '<img src="'.$url.'/assets/img/bg-category-head.jpg" alt="'.$alt.'">';
    ?>
  </div>
</header>

<main class="main">
    <?php get_template_part('assets/views/atendimento-banner', 'atendimento-banner'); ?>
    <?php get_template_part('assets/views/breadcrumb', 'breadcrumb'); ?>
    <?php get_template_part('assets/views/content-archive-programas', 'content-archive-programas'); ?>
    <?php //get_template_part('assets/views/como-chegar', 'como-chegar'); ?>
</main>

<?php get_footer(); ?>
