<!-- Saiba mais cursos -->
<section class="call-action extra-bottom-padding bg-orange">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php
        /*$args = array(
          'post_status' => 'publish',
          'posts_per_page' => 1,
          'name' => 'quer-saber-mais'
          );
        $query = new WP_Query($args);
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();*/
        ?>
        <header class="call-action__header wow animated zoomIn">
          <h2 class="call-action__title">QUER SABER MAIS</h2>
          <h3 class="call-action__subtitle">SOBRE O CURSO QUE PROCURA?</h3>
        </header>
        <div class="call-action__content wow animated zoomIn">
          <?php //the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="172" title="Programas Home" html_id="info" html_name="info"]'); //[contact-form-7 id="290" title="Solicitar Informações"]?>
        </div>
        <?php
        //endwhile;
        //wp_reset_postdata();
        //else : ?>
      <?php //endif; ?>
    </div>
    <div class="col-md-6">
      <!-- TODO: animação do foguete no hover-->
      <span class="rocket-position hidden-lg-down wow animated zoomIn">
        <img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/img/rocket.png" alt="rocket" aria-hidden="true">
      </span>
    </div>
  </div>
</div>
</section>
<!-- /Saiba mais cursos -->
