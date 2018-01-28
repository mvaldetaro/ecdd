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
              $i = 0;
              while ( have_rows('blocos') ) : the_row();
          ?>
          <!--  loop -->
          <div class="crsl-item">
            <div class="matriz__content__item text-center">
              <h3 class="title <?php echo 'title_bg_'.$i; ?>">
                <span class="vertical"><?php the_sub_field('nome_do_bloco'); ?></span>
              </h3>
              <ul class="disciplinas">
                <?php
                if( have_rows('disciplinas') ):
                  while ( have_rows('disciplinas') ) : the_row();
                    echo '<li><p class="vertical">';
                    the_sub_field('disciplina');
                    echo '</p></li>';
                  endwhile;
                else :
                    echo 'Sem datas previstas.';
                endif;
                ?>
                <li><p class="vertical"><?php the_sub_field('disciplina_de_projeto'); ?></p></li>
              </ul>
            </div>
          </div>
          <!-- /loop -->
          <?php
            $i++;
            endwhile;
          else :
            echo 'Sem datas previstas.';
          endif;
          ?>
        </div>
      </div>
    </div>
    <div class="matriz__livreto">
      <div class="row">
        <div class="col-md-6">
          <div class="vertical">
            <p class="text-right">Faça o download do <b>livreto</b> e conheça <br>o portfólio completo dos cursos.</p>
          </div>
        </div>
        <div class="col-md-6">
          <p class="text-left"><a href="<?php the_field('folder'); ?>" class="btn btn-lg-wide btn-lg btn-primary" target="_blank" rel="download">Download</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
