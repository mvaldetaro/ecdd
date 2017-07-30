<section class="turma">
  <div class="turma__warp">
    <div class="container">
      <header class="turma__header">
        <h2 class="title wow animated slideInLeft">Próxima Turma</h2>
        <?php
          $modalidades = get_field('modalidades');
          if($modalidades) {
            echo '<p class="wow animated slideInLeft" data-wow-delay="0.2s">';
            if(count($modalidades) < 2) {
              echo 'Esta graduação é oferecida na modalidade: ';
              echo '<span class="modalidades">'.$modalidades[0].'</span>';
            } elseif(count($modalidades) >= 2) {
              echo 'Esta graduação é oferecida nas modalidades: ';
              echo '<span class="modalidades">'.implode(", ",$modalidades).'</span>';
            } else {
              echo 'Indisponível no momento.';
            }
            echo '</p>';
          };
        ?>
      </header>

      <nav id="proxima-controller" class="turma__controller">
        <a href="#" class="previous arrow-left"></a>
        <a href="#" class="next arrow-right"></a>
      </nav>

      <?php
        $turmas = get_field('proximas_turmas');
        $nopadding = "";
        if(count($turmas) < 2) {
          $nopadding = "no-padding";
        }
      ?>
      <div class="turma__content <?php echo $nopadding ?>">
        <div class="crsl-proxima" data-navigation="proxima-controller">
          <div class="turma__content__overflow crsl-wrap">
            <?php
              if( have_rows('proximas_turmas') ):
              while( have_rows('proximas_turmas') ): the_row();
            ?>
            <!-- content -->
            <div class="crsl-item">
              <div class="row">
                <div class="col-md-8">
                  <?php if (get_sub_field('modalidade')): ?>
                  <h3 class="title"><?php the_sub_field('modalidade'); ?></h3>
                  <?php else: ?>
                  <h3 class="title">Como Funciona:</h3>
                  <?php endif ?>

                  <?php if (get_sub_field('como_funciona')): ?>
                  <?php the_sub_field('como_funciona'); ?>
                  <?php endif ?>

                  <?php if (get_sub_field('frequencia')): ?>
                    <h3 class="title">Frequência</h3>
                    <p><?php the_sub_field('frequencia'); ?></p>
                  <?php endif ?>
                </div>

                <div class="col-md-4">
                  <?php if (get_sub_field('duracao')): ?>
                    <h3 class="title">Duração</h3>
                    <p><?php the_sub_field('duracao'); ?></p>
                  <?php endif ?>

                  <?php if (get_sub_field('carga_horaria')): ?>
                    <h3 class="title">Carga Horária</h3>
                    <p><?php the_sub_field('carga_horaria'); ?></p>
                  <?php endif ?>

                  <h3 class="title">Ínicio e Horário</h3>
                  <p>
                  <?php
                    if( have_rows('inicio_e_horario') ):
                      while ( have_rows('inicio_e_horario') ) : the_row();
                          the_sub_field('informacoes');
                          echo '<br>';
                      endwhile;
                    else :
                      echo 'No momento esta turma não possui previsão de inicio.';
                    endif;
                  ?>
                  </p>
                </div>
              </div>
            </div>
            <!-- /content -->
            <?php
              endwhile;
              endif;
            ?>
            <?php if(count($turmas) >= 2) { ?>
            <?php
              if( have_rows('proximas_turmas') ):
              while( have_rows('proximas_turmas') ): the_row();
            ?>
            <!-- content -->
            <div class="crsl-item">
              <div class="row">
                <div class="col-md-8">
                  <?php if (get_sub_field('modalidade')): ?>
                  <h3 class="title"><?php the_sub_field('modalidade'); ?></h3>
                  <?php else: ?>
                  <h3 class="title">Como Funciona:</h3>
                  <?php endif ?>

                  <?php if (get_sub_field('como_funciona')): ?>
                  <?php the_sub_field('como_funciona'); ?>
                  <?php endif ?>

                  <?php if (get_sub_field('frequencia')): ?>
                    <h3 class="title">Frequência</h3>
                    <p><?php the_sub_field('frequencia'); ?></p>
                  <?php endif ?>
                </div>

                <div class="col-md-4">
                  <?php if (get_sub_field('duracao')): ?>
                    <h3 class="title">Duração</h3>
                    <p><?php the_sub_field('duracao'); ?></p>
                  <?php endif ?>

                  <?php if (get_sub_field('carga_horaria')): ?>
                    <h3 class="title">Carga Horária</h3>
                    <p><?php the_sub_field('carga_horaria'); ?></p>
                  <?php endif ?>

                  <h3 class="title">Ínicio e Horário</h3>
                  <p>
                  <?php
                    if( have_rows('inicio_e_horario') ):
                      while ( have_rows('inicio_e_horario') ) : the_row();
                          the_sub_field('informacoes');
                          echo '<br>';
                      endwhile;
                    else :
                      echo 'No momento esta turma não possui previsão de inicio.';
                    endif;
                  ?>
                  </p>
                </div>
              </div>
            </div>
            <!-- /content -->
            <?php
              endwhile;
              endif;
            ?>
            <?php  } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

