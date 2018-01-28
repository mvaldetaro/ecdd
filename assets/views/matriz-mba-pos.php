<section class="matriz">
  <div class="container">
    <header class="matriz__header wow animated fadeIn">
      <h2 class="title">Matriz Curricular</h2>
    </header>
    <nav id="matriz-controller-nograduation" class="matriz__controller">
      <a href="#" class="previous arrow-left"></a>
      <a href="#" class="next arrow-right"></a>
    </nav>
    <div class="matriz__content wow animated fadeIn">
      <div class="crsl-blocos" data-navigation="matriz-controller-nograduation">
        <div class="matriz__content__overflow crsl-wrap">

          <?php
            if( have_rows('blocos') ):
              $i = 0;
              while ( have_rows('blocos') ) : the_row();
          ?>
          <!--  loop -->
          <div class="crsl-item">
            <div class="matriz__content__item text-left">
              <h3 class="title <?php echo 'title_bg_'.$i; ?>">
                <span class="vertical"><?php the_sub_field('nome_do_bloco'); ?><span>
              </h3>
              <ul class="disciplinas disciplinas__mba-pos">
                <?php
                if( have_rows('disciplinas') ):
                  while ( have_rows('disciplinas') ) : the_row();
                    echo '<li><div class="vertical">';
                    echo '<h4>'.get_sub_field('disciplina').'</h4>';
                    echo ''.get_sub_field('descricao').'';

                    echo '</div></li>';
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
              $i++;
              endwhile;
          else :
              echo 'Nenhum bloco cadastrado';
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="matriz__livreto">
      <div class="row">
        <div class="col-md-6">
          <div class="vertical">
            <p class="text-right">Faça o download do folder<br> do <b><?php the_title(); ?></b>:</p>
          </div>
        </div>
        <div class="col-md-6">
          <p class="text-left"><a href="<?php the_field('folder'); ?>" class="btn btn-lg-wide btn-lg btn-primary" target="_blank" rel="download">Download</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
