<span id=solicitar-informacoes></span>
<section class="infos bg-gray">
  <div class="container">
    <?php
    $posttype = get_post_type();
    $args = array(
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'name' => 'contato'
      );
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
    <header class="infos__header slideInLeft">
      <h2 class="title">Mais informações</h2>
      <p class="subtitle">Ainda restou alguma dúvida? Entre em contato.</p>
    </header>
    <div class="infos__content infos__content--admissao slideInLeft">
      <div class="row">
          <div class="col-md-8">
          <?php the_content(); ?>
          </div>
      </div>
    </div>
    <?php
    endwhile;
    wp_reset_postdata();
    else : ?>
    <p><?php _e('Nada encontrado.'); ?></p>
  <?php endif; ?>
</div>
</section>
