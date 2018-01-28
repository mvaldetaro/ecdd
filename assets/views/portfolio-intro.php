<div class="programa__intro">
  <div class="container">
    <header class="programa__header">
      <h1 class="title">
        <span class="type">Trabalho do aluno(a)</span>
        <span><?php the_title(); ?><span>
      </h1>
    </header><!-- /header -->
    <div class="programa__content">
      <?php the_field('proposta'); ?>
      <div class="text-center">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</div>
