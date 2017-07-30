<section class="fundamentos-curso">
  <div class="container wow animated zoomIn">
    <header class="fundamentos-curso__header">
      <h2 class="title">Fundamentos do curso</h2>
    </header>
    <nav id="fundamentos-controller" class="fundamentos-curso__controller">
      <a href="#" class="previous arrow-left"></a>
      <a href="#" class="next arrow-right"></a>
    </nav>
    <div class="fundamentos-curso__content">
      <div class="crsl-fundamentos" data-navigation="fundamentos-controller">
        <div class="fundamentos-curso__content__overflow crsl-wrap">
          <?php
              if( have_rows('fundamento') ):
                while ( have_rows('fundamento') ) : the_row();
          ?>
          <div class="crsl-item">
            <div class="fundamentos-curso__content__item">
              <?php if (get_sub_field(imagem)): ?>
              <figure>
                <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
              </figure>
              <?php endif ?>
              <h3 class="title"><?php the_sub_field('titulo'); ?></h3>
              <p><?php the_sub_field('descricao'); ?></p>
            </div>
          </div>
          <?php
                endwhile;
            else :
                echo '<p>Nenhum Fundamento Cadastrado</p>';
            endif;
          ?>
        </div>
      </div>
    </div>
  </section>
