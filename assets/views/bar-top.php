<?php
/**
 * @package ECDD
 */
?>
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!-- Barra do topo -->
  <div class="bar-top clearfix">
    <?php
      wp_nav_menu( array(
        'theme_location' => 'top',
        'container' => 'nav',
        'container_class' => 'menu',
        'menu_class' => 'menu-list',
      ));
    ?>
    <!--
    <div class="action-box">
      <button class="btn-show-searchform" data-toggle="modal" data-target="#searchform">
        <span>Busca</span>
      </button>
      <div class="moodle-box">
        <a class="btn btn-primary btn-xs btn-user" href="https://lms.infnet.edu.br/moodle/login/index.php">Área do Aluno</a>
      </div>
    </div>
    -->
  </div>
<!-- /Barra do topo -->
