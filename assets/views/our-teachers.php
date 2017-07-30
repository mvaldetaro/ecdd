<section class="our-teachers wow animated zoomIn">
<div class="container">
  <header class="our-teachers__header">
    <h2 class="title">Nossos Professores</h2>
    <a href="javascript:;" class="expand-link">Ver mais <span class="hidden-sm-down">professores</span></a>
  </header>
  <div class="our-teachers__content">
    <div class="row">
      <?php
      $args = array(
        'category_name' => 'docentes',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'rand',
        );
      $query = new WP_Query($args);
      $i = 1;

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      ?>
        <div class="col-sm-6 col-md-3">
          <div class="our-teachers__content__item <?php addClassDocente($i); ?>">
            <figure class="our-teachers__content__item__thumb">
              <?php the_post_thumbnail('large'); ?>
            </figure>
            <div class="our-teachers__content__item__info">
              <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      <?php
      rowListDocente($i);
      $i++;
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e('Nada encontrado.'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</div>
</section>
