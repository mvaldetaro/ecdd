<div class="programas-grid">
<div class="container">
  <header class="programas-grid__header">
    <h1 class="title"><?php single_cat_title(); ?></h1>
  </header><!-- /header -->
  <div class="programas-grid__content sh">
    <?php
      //TODO: Remover imageSrc() para o arquivo functions.php
    function imageSrc($id, $size) {
      $img_url = wp_get_attachment_image_src($id, $size, true );
      echo $img_url[0];
    }


    if (have_posts() ) {
      echo '<div class="row">';
      query_posts('category_name=agenda&posts_per_page=-1');
      $delay = 0.0;
      $i = 0;
      while (have_posts()) {
        the_post();
        $attachment_id = get_post_thumbnail_id($post->ID);
        $date = get_field('data_hora', false, false);
        $date = new DateTime($date);
        $dateformatstring = "l, d \\d\\e F";
        $unixtimestamp = strtotime($date->format('d-m-Y'));
    ?>

        <div class="col-sm-6 col-md-4 wow animated fadeInUp" data-wow-delay="<?php echo $delay.'s' ?>">
          <div class="card card--programa">
            <figure class="card__figure">
              <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
                <picture>
                  <source media="(min-width: 992px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
                  <source media="(min-width: 768px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-medium'); ?>">
                    <img src="<?php imageSrc($attachment_id, 'category-thumb-small'); ?>"  class="img-responsive"/>
                  </picture>
                </a>
              </figure>
              <div class="card__content">
                <h2 class="title"><a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <?php if (get_field('data_hora')): ?>
                <p><?php echo date_i18n($dateformatstring, $unixtimestamp); ?></p>
                <?php endif ?>
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
