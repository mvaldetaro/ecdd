<span id="solicitar-informacoes"></span>
<section class="infos bg-gray">
  <div class="container">
    <?php
    /*$posttype = get_post_type();
    $args = array(
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'name' => 'precisa-de-mais-informacoes'
      );
    $query = new WP_Query($args);
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();*/
    ?>
    <header class="infos__header wow animated slideInLeft">
      <?php if ($posttype != 'formacao'): ?>
        <h2 class="title">Admissão e Valores</h2>
      <?php else: ?>
        <h2 class="title">Receba mais informações e valores.</h2>
      <?php endif ?>
      <p class="subtitle">Solicitar valor e Forma de Pagamento</p>
    </header>
    <div class="infos__content infos__content--admissao wow animated slideInLeft">
      <div class="row">
        <div class="col-md-6">
          <?php //the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="290" title="Solicitar Informações"]');?>
        </div>
        <div class="col-md-6">
          <?php //if ($posttype != 'formacao'): ?>
          <!--<div class="pravaler">
            <img src="<?php //bloginfo('template_url'); ?>/assets/img/pravaler.png" alt="PraValer">
            <p>No Infnet você financia sua graduação através do maior programa de crédito universitário privado do país: o Pravaler.</p>
            <a href="#" class="btn btn-primary btn-wide">Saiba Mais</a>
          </div>-->
          <?php //endif ?>
        </div>
      </div>
    </div>
    <?php
    /*endwhile;
    wp_reset_postdata();
    else :
    _e('Nada encontrado.');
    echo '</p>';
    endif;*/ ?>
</div>
</section>
