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
          'posts_per_page' => -1, // passar para 5
          'orderby' => 'rand',
          );
        $query = new WP_Query($args);
        $i = 1;

        function imageSrc($id, $size) {
          $img_url = wp_get_attachment_image_src($id, $size, true );
          echo $img_url[0];
        }

        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
          $attachment_id = get_post_thumbnail_id($post->ID);
        ?>
          <div class="col-md-5ths col-sm-5ths">
            <div class="our-teachers__content__item <?php addClassDocente($i); ?>">
              <figure class="our-teachers__content__item__thumb">
                <picture>
                  <source media="(min-width: 1200px)" srcset="<?php imageSrc($attachment_id, 'professores-thumb-large-desktop'); ?>, <?php imageSrc($attachment_id, 'professores-thumb-large-desktop-2x'); echo ' 2x'; ?>">
                  <source media="(min-width: 992px)" srcset="<?php imageSrc($attachment_id, 'professores-thumb-laptop'); ?>, <?php imageSrc($attachment_id, 'professores-thumb-laptop-2x'); echo ' 2x'; ?>">
                  <source media="(min-width: 768px)" srcset="<?php imageSrc($attachment_id, 'professores-thumb-tablet'); ?>, <?php imageSrc($attachment_id, 'professores-thumb-tablet-2x'); echo ' 2x';?>">
                  <img srcset="<?php imageSrc($attachment_id, 'professores-thumb-mobile'); ?>, <?php imageSrc($attachment_id, 'professores-thumb-mobile-2x'); echo ' 2x';?>" alt="<?php the_title(); ?>"/>
                </picture>
              </figure>
              <div class="our-teachers__content__item__info">
                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <?php the_excerpt(); ?>
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
