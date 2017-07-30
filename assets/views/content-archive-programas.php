<div class="programas-grid">
<div class="container">
  <header class="programas-grid__header">
    <h1 class="title"><?php echo post_type_archive_title( '', false ); ?></h1>
  </header><!-- /header -->
  <div class="programas-grid__content sh">
    <?php
    //TODO: Remover imageSrc() para o arquivo functions.php
    function imageSrc($id, $size) {
      $img_url = wp_get_attachment_image_src($id, $size, true );
      echo $img_url[0];
    }

    $args = array(
      'post_status' => 'publish',
      'posts_per_page' => '-1',
      'orderby' => 'title',
      'order' => 'ASC'
      );

    if (is_post_type_archive('mba')) {
      $args['category_name'] = 'mba';
      $args['post_type'] = 'mba';
    } else if (is_post_type_archive('pos'))  {
      $args['category_name'] = 'pos-graduacao';
      $args['post_type'] = 'pos';
    } else if (is_post_type_archive('graduacao'))  {
      $args['category_name'] = 'graduacao';
      $args['post_type'] = 'graduacao';
    } else if (is_post_type_archive('ead'))  {
      $args['category_name'] = 'ead';
      $args['post_type'] = array('graduacao', 'ead');
    } else if (is_post_type_archive('formacao'))  {
      $args['category_name'] = 'formacao';
      $args['post_type'] = 'formacao';
    } else {
      $args['post_type'] = 'post';
    }

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
      echo '<div class="row">';
      $delay = 0.0;
      $i = 0;
      while ( $query->have_posts() ) {
        $query->the_post();
        $attachment_id = get_post_thumbnail_id($post->ID);
    ?>

        <div class="col-sm-6 col-md-4 wow animated fadeInUp" data-wow-delay="<?php echo $delay.'s' ?>">
          <div class="card card--programa">
            <figure class="card__figure">
              <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
                <picture>
                  <source media="(min-width: 992px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
                  <source media="(min-width: 768px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
                  <img src="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>" />
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
          }
          echo '</div>';
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </div>
