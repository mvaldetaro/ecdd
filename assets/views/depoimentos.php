<section class="depoimentos bg-purple">
  <div class="container">
    <header class="depoimentos__header wow animated slideInLeft">
      <h2 class="title">Depoimentos dos seus <br>futuros colegas</h2>
    </header>
    <div class="depoimentos__content">
      <div class="row">
        <?php
          $delay = 1.0;
          $i = 0;
          if( have_rows('depoimentos') ):
            while ( have_rows('depoimentos') ) : the_row();
        ?>
        <div class="col-md-4 wow animated fadeInLeft" data-wow-delay="<?php echo $delay.'s' ?>">
          <div class="depoimentos__content__item">
            <figure>
              <img class="img-responsive" src="<?php the_sub_field('imagem'); ?>" alt="">
            </figure>
            <blockquote class="depoimento">
              <p><?php the_sub_field('depoimento'); ?></p>
              <cite><?php the_sub_field('nome_depoente'); ?></cite>
            </blockquote>
          </div>
        </div>
        <?php
            if($i < 2) {
              $delay = $delay - 0.5;
              $i++;
            } else {
              $delay = 0;
              $i = 0;
            }
            endwhile;
          else :
              echo '<p>Nenhum Depoimento.</p>';
          endif;
        ?>
      </div>
    </div>
  </div>
</section>
