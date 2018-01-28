<div class="adicional-intro container">
  <div class="adicional-intro__content">
    <div class="row">
      <?php if (get_field('justificativa')): ?>
        <div class="col-md-7">
          <div class="adicional-intro__item">
            <h3>Justificativa</h3>
            <p><?php the_field('justificativa'); ?></p>
          </div>
        </div>
      <?php endif ?>

      <?php if (get_field('link_portfolio') || get_field('programa') || get_field('professor_orientador')) : ?>
        <div class="col-md-5">
          <div class="adicional-intro__item">
            <h3>Mais Informações</h3>

            <!-- portfolio -->
            <?php if (get_field('link_portfolio')): ?>
              <p><b>Portfólio de <?php the_title(); ?>:</b> <a href="<?php the_field('link_portfolio'); ?>" title="<?php the_title();?>" rel="external"><?php the_field('link_portfolio'); ?></a></p>
            <?php endif ?>

            <!-- programa -->
            <?php
            if (get_field('programa')):
              $programa_object = get_field('programa');
              $post = $programa_object;
              setup_postdata($post);
            ?>
              <p><b>Programa:</b> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
            <?php
              wp_reset_postdata();
            endif
            ?>

            <!-- professor -->
            <?php
            if (get_field('professor_orientador')):
              echo "<p><b>Professor Orientador:</b> ";
              $professor_object = get_field('professor_orientador');

              $n = count($professor_object);
              $i = 0;

              foreach( $professor_object as $post):
                setup_postdata($post);
                $i++;
                echo '<a href="'. get_the_permalink() .'"title="'. get_the_title() .'">'. get_the_title().'</a>';
                if($i < $n) { echo ", "; };
              endforeach;
              wp_reset_postdata();
              echo "</p>";
            endif
            ?>

          </div>
        </div>
      <?php endif ?>
    </div>
  </div>
</div>

<?php get_template_part('assets/views/galeria', 'galeria'); ?>

<!-- trabalhos relacionados -->
<section class="call-action sh bg-orange no-top-margin">
  <div class="container">
    <header class="call-action__header">
      <h2 class="call-action__title">Trabalhos de outros alunos</h2>
    </header><!-- /header -->
    <div class="call-action__content">
      <?php
    //TODO: Remover imageSrc() para o arquivo functions.php
      function imageSrc($id, $size) {
        $img_url = wp_get_attachment_image_src($id, $size, true );
        echo $img_url[0];
      }

      $args = array(
        'post_status' => 'publish',
        'posts_per_page' => '3',
        'orderby' => 'title',
        'order' => 'ASC',
        'orderby' => 'rand',
        'category_name' => 'trabalhos-alunos',
        'post_type' => 'post',
        'post__not_in' => array($post->ID),
        );

      $query = new WP_Query( $args );

      if ( $query->have_posts() ) {
        echo '<div class="row">';
        while ( $query->have_posts() ) {
          $query->the_post();
          $attachment_id = get_post_thumbnail_id($post->ID);
          ?>
          <div class="col-sm-4 col-md-4">
            <div class="card card--portfolio">
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
                    <?php
                    $posttags = get_the_tags();
                    $programa = get_field('programa');

                    echo "<p>";
                    echo $posttags[0]->name ." ". $programa->post_title;
                    echo "</p>";
                    ?>
                  </div>
                </div>
              </div>
              <?php
            }
            echo '</div>';
            wp_reset_postdata();
          }
          ?>
        </div>
      </div>
    </section>

<!-- programas relacionados -->
<section class="call-action sh bg-gray no-top-margin">
  <div class="container">
    <header class="call-action__header">
      <h2 class="call-action__title">Programas Relacionados</h2>
      <?php if (get_field('programa')) { ?>
        <p class="call-action__subtitle">A <?php echo get_field('programa')->post_title; ?></p>
      <?php } ?>
    </header><!-- /header -->
    <div class="call-action__content">
    <div class="row">
      <?php
      if( have_rows('programas_relacionados') ):
        while ( have_rows('programas_relacionados') ) : the_row();
          $post_object = get_sub_field('programa');
          $attachment_id = get_post_thumbnail_id($post_object->ID);
      ?>
      <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="card card--programa">
          <figure class="card__figure">
            <a href="<?php the_permalink();?>" title="<?php the_title_attribute(); ?>">
              <picture>
                <source media="(min-width: 992px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
                <source media="(min-width: 768px)" srcset="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>">
                <img src="<?php imageSrc($attachment_id, 'category-thumb-large'); ?>"/>
              </picture>
            </a>
          </figure>
          <div class="card__content">
            <h2 class="title">
              <a href="<?php echo get_permalink($post_object->ID);?>" title="<?php echo get_the_title($post_object->ID); ?>">
                <?php
                $cats = get_the_category($post_object->ID);
                echo toSingular($cats[count($cats)-1]->cat_name);
                ?>
                <?php echo get_the_title($post_object->ID); ?>
              </a>
            </h2>
            <p><?php echo get_the_excerpt($post_object->ID); ?></p>
          </div>
        </div>
      </div>
      <?php
        endwhile;
      else :
        echo "<p>Nenhum programa relacionado.</p>";
      endif;
      ?>
      </div>
    </div>
  </div>
</section>
