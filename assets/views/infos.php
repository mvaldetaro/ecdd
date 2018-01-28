<section class="infos bg-orange">
  <div class="container">
    <?php
      //$args = array(
        //'post_status' => 'publish',
        //'posts_per_page' => 1,
        //'name' => 'precisa-de-mais-informacoes'
        //);
      //$query = new WP_Query($args);
      //if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
    ?>
    <header class="infos__header wow animated slideInLeft">
      <h2 class="title">Precisa de mais <br>informações?</h2>
    </header>
    <div class="infos__content wow animated slideInLeft">
      <div class="row">
        <div class="col-md-6">
          <?php //the_content(); ?>
          <?php echo do_shortcode( '[contact-form-7 id="290" title="Solicitar Informações"]' ); //[contact-form-7 id="290" title="Solicitar Informações"]?>
        </div>
        <div class="col-md-6 wow animated slideInLeft">
          <p>Saiba mais sobre este curso e toda oferta de graduações da Escola de Comunicação e Design Digital. Faça download do livreto completo.</p>
          <a href="<?php the_field('folder'); ?>" class="btn btn-primary btn-wide">Download</a>
        </div>
      </div>
    </div>
    <?php
        //endwhile;
        //wp_reset_postdata();
       // else : ?>
       <p><?php //_e('Nada encontrado.'); ?></p>
       <?php //endif; ?>
     </div>
   </section>
