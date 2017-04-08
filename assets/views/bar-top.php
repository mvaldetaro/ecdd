<?php
/**
 * @package ECDD
 */
?>
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
<!-- TODO: Criar menu na administração -->
<!-- Barra do topo -->
    <div class="bar-top">
      <nav class="menu">
        <ul class="menu-list">
          <li class="menu-list__li_current">
            <a href="#">Admissão</a>
          </li>
          <li class="menu-list__li">
            <a href="#">Vida do Aluno</a>
          </li>
          <li class="menu-list__li">
            <a href="#">Alumni</a>
          </li>
          <li class="menu-list__li">
            <a href="#">Parcerias</a>
          </li>
          <li class="menu-list__li">
            <a href="#">Atendimento</a>
          </li>
        </ul>
      </nav>
      <div class="action-box">
        <div class="search">
          <form class="search__form" action="">
            <input class="search__form__input" type="text">
            <button class="search__form__button" type="submit">
              <span>Buscar</span>
            </button>
          </form>
        </div>
        <div class="moodle-box">
          <a href="btn btn-primary btn-xs">Área do Aluno</a>
        </div>
      </div>
    </div>
    <!-- /Barra do topo -->
