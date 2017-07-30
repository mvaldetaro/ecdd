<section class="matriz">
  <div class="container">
    <header class="matriz__header">
      <h2 class="title">Matriz Curricular</h2>
    </header>
    <nav id="matriz-controller-nograduation" class="matriz__controller">
      <a href="#" class="previous arrow-left"></a>
      <a href="#" class="next arrow-right"></a>
    </nav>
    <div class="matriz__content">
      <div class="crsl-blocos" data-navigation="matriz-controller-nograduation">
        <div class="matriz__content__overflow crsl-wrap">

          <?php
            if( have_rows('blocos') ):
              while ( have_rows('blocos') ) : the_row();
          ?>
          <!--  loop -->
          <div class="crsl-item">
            <div class="matriz__content__item text-left">
              <h3 class="title"><?php the_sub_field('nome_do_bloco'); ?> asdasdasdasd</h3>
              <ul class="disciplinas">
                <?php
                if( have_rows('disciplinas') ):
                  while ( have_rows('disciplinas') ) : the_row();
                    echo '<li>';
                    echo '<h4>sasfafafaff'.get_sub_field('disciplina').'</h4>';
                    echo '<p>'.get_sub_field('descricao').'</p>';
                    echo '</li>';
                  endwhile;
                else :
                    echo 'Nenhum bloco cadastrado';
                endif;
                ?>
              </ul>
            </div>
          </div>
          <!-- /loop -->
          <?php
              endwhile;
          else :
              echo 'Nenhum bloco cadastrado';
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
