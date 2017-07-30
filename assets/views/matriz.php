<section class="matriz">
  <div class="container">
    <header class="matriz__header wow animated fadeIn">
      <h2 class="title">Matriz Curricular</h2>
    </header>
    <nav id="matriz-controller" class="matriz__controller">
      <a href="#" class="previous arrow-left"></a>
      <a href="#" class="next arrow-right"></a>
    </nav>
    <div class="matriz__content wow animated fadeIn">
      <div class="crsl-curriculo" data-navigation="matriz-controller">
        <div class="matriz__content__overflow crsl-wrap">

          <?php
            if( have_rows('blocos') ):
              while ( have_rows('blocos') ) : the_row();
          ?>
          <!--  loop -->
          <div class="crsl-item">
            <div class="matriz__content__item text-center">
              <h3 class="title"><?php the_sub_field('nome_do_bloco'); ?></h3>
              <ul class="disciplinas">
                <?php
                if( have_rows('disciplinas') ):
                  while ( have_rows('disciplinas') ) : the_row();
                    echo '<li>';
                    the_sub_field('disciplina');
                    echo '</li>';
                  endwhile;
                else :
                    echo 'Sem datas previstas.';
                endif;
                ?>
                <li><?php the_sub_field('disciplina_de_projeto'); ?></li>
              </ul>
            </div>
          </div>
          <!-- /loop -->
          <?php
              endwhile;
          else :
              echo 'Sem datas previstas.';
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
