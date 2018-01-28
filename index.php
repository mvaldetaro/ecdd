<?php
/**
 * @package ECDD
 */
?>

<?php get_header(); ?>
<header class="header">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!--<div class="selo">
            <a data-toggle="popover" data-container="body" data-placement="bottom" data-html="true" href="#" id="selo">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/selo-publicidade.png" class="img-responsive" alt="MEC - Nota 5">
            </a>
          </div>
          <div id="popover-content-selo" class="hide">
            <p>Conceito máximo (5) no MEC em <a href="<?php bloginfo('url'); ?>/graduacao/comunicacao-social-publicidade-e-propaganda/">Comunicação Social: Publicidade e Propaganda</a>. Melhor Enade do Rio de Janeiro em <a href="<?php bloginfo('url'); ?>/graduacao/design-grafico-design-digital/">Design Gráfico e Digital</a>. Conceito geral 4.3 pelo MEC para toda a Instituição. Dados de 2017.</p>
          </div>-->
          <?php get_template_part('assets/views/bar-top', 'bar-top'); ?>
          <?php get_template_part('assets/views/head', 'head'); ?>
          <?php get_template_part('assets/views/banner-index', 'banner-index'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="header-background" aria-hidden="true"></div>
</header>

<main class="main">
  <?php get_template_part('assets/views/content-index', 'content-index'); ?>
</main>

<?php get_footer(); ?>

