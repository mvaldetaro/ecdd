<div class="programas-grid">
  <div class="container">
    <header class="programas-grid__header">
      <h1 class="title"><?php the_title(); ?></h1>
      <nav class="programas__menu">
        <ul class="programas__menu__list">
          <li class="programas__menu__item--current">
            <a href="javascript:;" data-filter=".todos" class="hvr-underline-from-left">Todos</a>
          </li>
          <li class="programas__menu__item">
            <a href="javascript:;" data-filter=".graduacao" class="hvr-underline-from-left">Graduações</a>
          </li>
          <li class="programas__menu__item">
            <a href="javascript:;" data-filter=".mba" class="hvr-underline-from-left">MBA<span class="lwrCase">s<span></a>
          </li>
          <li class="programas__menu__item">
            <a href="javascript:;" data-filter=".pos-graduacao" class="hvr-underline-from-left"><span class="visible-xs-inline-block">Pós</span> <span class="hidden-xs">Pós-Graduações</span></a>
          </li>

          <li class="programas__menu__item">
            <a href="javascript:;" data-filter=".formacao" class="hvr-underline-from-left">Formações</a>
          </li>
        </ul>
      </nav>
    </header><!-- /header -->
    <div class="programas__content programas-grid__content sh">
    <?php
     //TODO: Remover imageSrc() para o arquivo functions.php
      function imageSrc($id, $size) {
        $img_url = wp_get_attachment_image_src($id, $size, true );
        echo $img_url[0];
      }

      $args = array(
        'category_name' => 'mba, pos-graduacao, graduacao, formacao',
        'post_type' => array('mba', 'pos', 'graduacao', 'formacao'),
        'post_status' => 'publish',
        'posts_per_page' => -1
      );
      $query = new WP_Query($args);

      function post($post_id) {
        $slugs = "";
        $terms = wp_get_object_terms($post_id, 'category');
        $category_slugs = array();
        foreach ($terms as $term) {
          array_push($category_slugs, $term->slug);
        }
        $slugs = implode(" ", $category_slugs);
        return $slugs;
      }

      $delay = 0.0;
      $i = 0;


      if ( $query->have_posts() ) :
        echo '<div class="row">';
        while ( $query->have_posts() ) : $query->the_post();
        $attachment_id = get_post_thumbnail_id($post->ID);
    ?>

    <div class="col-sm-6 col-md-4 mix todos <?php echo post($post->ID) ?>">
      <div class="card card--programa">
        <figure class="card__figure">
          <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
            <picture>
              <source media="(min-width: 992px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
              <source media="(min-width: 768px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
              <img src="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>"  class="img-responsive"/>
             </picture>
          </a>
        </figure>
        <div class="card__content">
          <h2 class="title"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <p><?php echo get_excerpt(); ?></p>
        </div>
      </div>
    </div>

    <?php
      if($i < 2) {
        $delay = $delay + 0.5;
        $i++;
      } else {
        $delay = 0;
        $i = 0;
      }
      endwhile;
      echo '</div>';
      wp_reset_postdata();
      else : ?>
      <p><?php _e('Nada encontrado.'); ?></p>
    <?php endif; ?>
    </div>
  </div>
</div>

