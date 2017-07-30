<!-- Trabalho dos alunos -->
<section class="students-works">
  <header class="students-works__header clearfix">
    <h2 class="students-works__title">Trabalhos dos alunos</h2>
    <nav class="students-works__menu">
      <ul class="students-works__menu__list">
        <li class="students-works__menu__item-current">
          <a href="javascript:;" data-filter=".recente">Recentes</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".mba">MBA</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".pos-graduacao"><span class="visible-xs-inline-block">Pós</span> <span class="hidden-xs">Pós-Graduação</span></a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".graduacao">Graduação</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".formacao">Formação</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="students-works__content"> <!-- grid -->
    <!-- recentes -->
    <?php porfolio(); ?>
    <!-- graduacao -->
    <?php porfolio('graduacao'); ?>
    <!-- pos-graduacao -->
    <?php porfolio('pos-graduacao'); ?>
    <!-- mba -->
    <?php porfolio('mba'); ?>
    <!-- formacao -->
    <?php porfolio('formacao'); ?>
</div>
</section>
<!-- /Trabalho dos alunos -->
