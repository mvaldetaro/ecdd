<?php if( have_rows('galeria_videos') ): ?>
<div class="programa__videos">
  <div class="container">
    <div class="programa__content no-top-margin wow animated fadeIn">
      <p><?php the_field('frase_contexto'); ?></p>
      <div class="row">
        <?php while ( have_rows('galeria_videos') ) : the_row(); ?>
        <div class="col-sm-4">
          <div class="embed-frame bottom-sm-margin">
            <?php the_sub_field('video'); ?>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
