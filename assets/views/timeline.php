<?php if( have_rows('tecnologias') ): ?>
<section class="timeline">
  <div class="container">
    <header class="timeline__header wow animated slideInLeft">
    <h2 class="title">Tecnologias que o aluno <br>domina durante a graduação</h2>
    </header>
    <div class="timeline__content">
    <ul class="timeline__content__list">
      <?php while ( have_rows('tecnologias') ) : the_row(); ?>
      <li class="timeline__content__list__item wow animated fadeInUp">
        <h3 class="title"><?php the_sub_field('titulo'); ?></h3>
        <p><?php the_sub_field('descricao'); ?></p>
      </li>
      <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>
