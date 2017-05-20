<section class="our-teachers">
  <header class="our-teachers__header">
    <h2 class="title">Nossos Professores</h2>
    <a href="javascript:;" class="expand-link">Ver mais professores</a>
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
      function addClassDocente($i) {
        $classe = "item-".$i;
        if($i > 4) {
          $classe .= " item-invisible";
        }
        echo $classe;
      }
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      ?>
        <div class="col-md-3">
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
      $i++;
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e('Nada encontrado.'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</section>
