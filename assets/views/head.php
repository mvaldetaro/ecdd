<?php
/**
 * @package ECDD
 */
?>
<!-- Cabecalho -->
  <div class="head">
    <div class="logo">
      <?php the_custom_logo(); ?>
    </div>
    <?php
      wp_nav_menu( array(
        'theme_location' => 'header',
        'container' => 'nav',
        'container_class' => 'main-menu hidden-sm-down',
        'menu_class' => 'main-menu__list',
      ));
    ?>

    <div class="main-menu hidden-md-up">
      <button id="menu-icon-toggle"><span>Menu</span></button>
    </div>
  </div>
<!-- /Cabecalho -->
