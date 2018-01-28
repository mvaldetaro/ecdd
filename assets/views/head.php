<?php
/**
 * @package ECDD
 */
?>
<!-- Cabecalho -->
  <div class="head">
    <div class="logo">
      <?php //the_custom_logo(); ?>
      <a href="<?php bloginfo('url'); ?>" class="custom-logo-link" rel="home" itemprop="url">
        <img src="<?php bloginfo('template_url') ?>/assets/img/ecdd-logo.svg" class="custom-logo" alt="Escola de comunicação e Design Digital - ECDD" itemprop="logo">
      </a>
    </div>
    <?php
      /*wp_nav_menu( array(
        'theme_location' => 'header',
        'container' => 'nav',
        'container_class' => 'main-menu hidden-md-down',
        'menu_class' => 'main-menu__list',
      ));*/
    ?>
    <div class="main-menu hidden-lg-up" aria-hidden="true">
      <button id="menu-icon-toggle"><span>Menu</span></button>
    </div>
  </div>
<!-- /Cabecalho -->
