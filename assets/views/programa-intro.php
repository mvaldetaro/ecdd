<div class="programa__intro">
  <div class="container">
    <header class="programa__header">
      <h1 class="title">
        <span class="type"><?php get_post_type_singular_name($post->post_type) ?></span>
        <span><?php the_title(); ?><span>
      </h1>
    </header><!-- /header -->
    <div class="programa__content wow animated zoomIn">
      <div class="row">
        <?php if (get_field('nota_mec')): ?>
          <div class="col-md-10">
            <?php the_content(); ?>
          </div>
          <div class="col-md-2">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/selomec.png" alt="Nota 5 pelo MEC - <?php the_title(); ?>">
          </div>
        <?php else: ?>
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>
