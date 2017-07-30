<?php
/**
 * @package ECDD
 */
?>

<?php get_header(); ?>
<header class="header header--internal">
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
  <div aria-hidden="true" class="header-background">
    <?php
    $url = get_template_directory_uri();
    $alt = 'ecdd';
    echo '<img src="'.$url.'/assets/img/bg-category-head.jpg" alt="'.$alt.'">';
    ?>
  </div>
</header>

<main class="main">
  <?php get_template_part('assets/views/atendimento-banner', 'atendimento-banner'); ?>
  <?php get_template_part('assets/views/breadcrumb', 'breadcrumb'); ?>
  <?php
  if (is_category('agenda')):
    get_template_part('assets/views/content-agenda', 'content-agenda');
  elseif (is_category('eventos')):
    get_template_part('assets/views/content-eventos', 'content-eventos');
  elseif (is_category('docentes')):
    get_template_part('assets/views/content-docentes', 'content-docentes');
  elseif (is_category('trabalhos-alunos')):
    get_template_part('assets/views/content-category-portfolio', 'content-category-portfolio');
  else:
    get_template_part('assets/views/content-category-programas', 'content-category-programas');
  endif
  ?>
  <?php //get_template_part('assets/views/como-chegar', 'como-chegar'); ?>
</main>

<?php get_footer(); ?>
