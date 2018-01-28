<section class="calendar">
  <header class="calendar__header wow animated fadeIn">
    <h2 class="title">Agenda</h2>
    <!--<a class="go-to-link" href="<?php bloginfo('url'); ?>/category/agenda/" title="">Agenda Completa</a>-->
  </header>

  <div class="calendar__content">
    <nav class="calendar__nav"></nav>
    <ul class="calendar__content__list">
      <?php
      $date_now = date('Y-m-d H:i:s');
      $time_now = strtotime($date_now);
      $time_next_week = strtotime('+365 day', $time_now);
      $date_next_week = date('Y-m-d H:i:s', $time_next_week);

      $args = array(
        'posts_per_page'  => -1,
        'category_name' => 'agenda',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
              'key' => 'data_hora',
              'compare' => 'BETWEEN',
              'value' => array($date_now, $date_next_week),
              'type' => 'DATETIME'
            )
        ),
        'order'       => 'ASC',
        'orderby'     => 'meta_value',
        'meta_key'      => 'data_hora',
        'meta_type'     => 'DATETIME'
        );
      $query = new WP_Query($args);
      $delay = 0.0;

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

      $data_hora = get_field('data_hora');
      list ($data, $hora) = split (' ', $data_hora);
      list ($ano, $mes, $dia) = split ('[/.-]', $data);
      ?>

      <li class="calendar__content__list__item wow animated fadeInUp" data-wow-delay="<?php echo $delay.'s' ?>">
        <div class="calendar__content__list__item__data">
          <p>
          <?php echo $dia."/".$mes; ?>
          <span><?php echo $ano; ?></span>
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
      <li><?php _e('Nada encontrado.'); ?></li>
      <?php endif; ?>
    </ul>
  </div>
</section>
