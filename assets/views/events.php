<section class="events">
  <header class="events__header">
    <h2 class="title">Eventos</h2>
    <a class="go-to-link" href="<?php bloginfo('url'); ?>/category/eventos" title="Eventos passados">Outros eventos</a>
  </header>
  <div class="events__content">

    <?php
    $args = array(
      'category_name' => 'eventos',
      'post_status' => 'publish',
      'posts_per_page' => 1
      );
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
      <figure class="events__content__figure">
        <?php the_post_thumbnail('large'); ?>
      </figure>
      <figcaption class="events__content__caption">
        <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <p><?php the_excerpt(); ?></p>
      </figcaption>
    <?php
    endwhile;
    wp_reset_postdata();
    else : ?>
    <p><?php _e('Nada encontrado.'); ?></p>
  <?php endif; ?>
</div>
</section>
