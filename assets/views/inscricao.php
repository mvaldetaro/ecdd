<span id=solicitar-informacoes></span>
<section class="infos bg-gray">
  <div class="container">
    <?php
    $posttype = get_post_type();
    $args = array(
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'name' => 'inscricao'
      );
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
    <header class="infos__header">
      <h2 class="title">Inscreva-se</h2>
      <p class="subtitle">Sua oportunidade de atualização profissional.</p>
    </header>
    <div class="infos__content infos__content--admissao">
      <div class="row">
          <?php the_content(); ?>
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
