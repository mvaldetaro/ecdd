<!-- Saiba mais cursos -->
<section class="call-action extra-bottom-padding bg-orange">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php
        $args = array(
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'name' => 'quer-saber-mais'
          );
        $query = new WP_Query($args);
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        ?>
        <header class="call-action__header wow animated zoomIn">
          <h2 class="call-action__title"><?php the_title(); ?></h2>
          <h3 class="call-action__subtitle"><?php echo(get_the_excerpt()); ?></h3>
        </header>
        <div class="call-action__content wow animated zoomIn">
          <?php the_content(); ?>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
        else : ?>
        <p><?php _e('Nada encontrado.'); ?></p>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
      <!-- TODO: animação do foguete no hover-->
      <span class="rocket-position hidden-lg-down wow animated zoomIn">
        <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/rocket.png" alt="rocket" aria-hidden="true">
      </span>
    </div>
  </div>
</div>
</section>
<!-- /Saiba mais cursos -->
