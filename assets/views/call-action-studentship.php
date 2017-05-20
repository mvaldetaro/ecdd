<!-- Bolsas de Estudo -->
<section class="call-action call-action--small">
  <div class="container">
    <div class="row">

      <?php
      $args = array(
        'post_status' => 'publish',
        'pagename' => 'bolsas-de-estudo-e-financiamento'
        );
      $query = new WP_Query($args);
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      ?>

      <div class="col-md-6">
        <header class="call-action__header">
          <h2 class="call-action__title call-action__title--small"><?php the_title(); ?></h2>
        </header>
        <div class="call-action__content call-action__content--small">
          <?php the_excerpt(); ?>
        </div>
      </div>
      <div class="col-md-6 text-align-right">
        <a href="<?php the_permalink(); ?>" class="btn btn-primary call-action__btn--small" title="<?php the_title_attribute(); ?>">Saiba Mais</a>
      </div>

      <?php
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e('Nada encontrado.'); ?></p>
    <?php endif; ?>
  </div>
</div>
</section>
<!-- /Bolsas de Estudo -->
