<section class="calendar">
  <header class="calendar__header wow animated fadeIn">
    <h2 class="title">Agenda</h2>
    <!--<a class="go-to-link" href="<?php bloginfo('url'); ?>/category/agenda/" title="">Agenda Completa</a>-->
  </header>
  <div class="calendar__content">
    <ul class="calendar__content__list">
      <?php
      $args = array(
        'category_name' => 'agenda',
        'post_status' => 'publish',
        'posts_per_page' => 4
        );
      $query = new WP_Query($args);
      $delay = 0.0;
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      ?>
      <li class="calendar__content__list__item wow animated fadeInUp" data-wow-delay="<?php echo $delay.'s' ?>">
        <div class="calendar__content__list__item__data">
          <p>
          <?php echo get_post_meta($post->ID, 'data', true); ?>
          <span><?php echo get_post_meta($post->ID, 'ano', true); ?></span>
          </p>
        </div>
        <div class="calendar__content__list__item__event">
          <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
        </div>
      </li>
      <?php
      $delay = $delay + 0.5;
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e('Nada encontrado.'); ?></p>
    <?php endif; ?>
  </ul>
</div>
</section>
