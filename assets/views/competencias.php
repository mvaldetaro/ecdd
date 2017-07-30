<section class="timeline">
  <div class="container">
    <header class="timeline__header wow animated slideInLeft">
    <h2 class="title">Carreira e Competências</h2>
    <?php the_field('descricao_competencias'); ?>
    </header>
    <?php if( have_rows('competencias') ): ?>
    <div class="timeline__content">
      <ul class="timeline__content__list">
        <?php while ( have_rows('competencias') ) : the_row(); ?>
        <li class="timeline__content__list__item wow animated fadeInUp">
          <h3 class="title"><?php the_sub_field('titulo'); ?></h3>
          <p><?php the_sub_field('competencia'); ?></p>
        </li>
        <?php endwhile; ?>
      </ul>
    </div>
    <?php endif; ?>
  </div>
</section>
