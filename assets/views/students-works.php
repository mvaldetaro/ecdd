<!-- Trabalho dos alunos -->
<section class="students-works">
  <header class="students-works__header">
    <h2 class="students-works__title">Trabalho dos alunos</h2>
    <nav class="students-works__menu">
      <ul class="students-works__menu__list">
        <li class="students-works__menu__item-current">
          <a href="javascript:;" data-filter=".recente">Recentes</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".graduacao">Graduação</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".pos-graduacao">Pós-Graduação</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".mba">MBAs</a>
        </li>
        <li class="students-works__menu__item">
          <a href="javascript:;" data-filter=".formacao">Formações</a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="students-works__content"> <!-- grid -->

    <?php
      $args = array(
        'category_name' => 'trabalhos-alunos',
        'post_status' => 'publish',
        'posts_per_page' => 24
      );
      $query = new WP_Query($args);
      $i = 1;

      function addClass($i, $tag) {
        $classe = "";
        if($i <= 6) {
          $classe .= "recente ";
        }
        $classe .= $tag;
        echo $classe;
      }
      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
      $t = wp_get_post_tags($post->ID);
      $tagSlug = $t[0]->slug;
    ?>
    <!-- <?php echo $i ?> -->
    <div class="students-works__content__item mix <?php addClass($i, $tagSlug); ?>">
      <div class="students-works__content__item__content">
        <a href="#">
          <?php the_post_thumbnail('thumbnail'); ?>
        </a>
      </div>
    </div>

    <?php
      $i++;
      endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>
</section>
<!-- /Trabalho dos alunos -->
