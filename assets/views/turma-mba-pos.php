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
              echo 'Esta pós-graduação é oferecida na modalidade: ';
              echo '<span class="modalidades">'.$modalidades[0].'</span>';
            } elseif(count($modalidades) >= 2) {
              echo 'Esta pós-graduação é oferecida nas modalidades: ';
              echo '<span class="modalidades">'.implode(", ",$modalidades).'</span>';
            } else {
              echo 'Indisponível no momento.';
            }
            echo '</p>';
          };
        ?>
      </header>
      <div class="turma__content no-padding">
      <div class="row">
          <div class="col-md-8 wow animated slideInLeft" data-wow-delay="0.5s">
            <h3 class="title">Como Funciona?</h3>
            <?php the_field('como_funciona'); ?>

            <?php if (get_field('frequencia')): ?>
              <h3 class="title">Frequência</h3>
              <p><?php the_field('frequencia'); ?></p>
            <?php endif ?>

          </div>
          <div class="col-md-4 wow animated slideInLeft" data-wow-delay="0.3s">
            <h3 class="title">Duração</h3>
            <p><?php the_field('duracao'); ?></p>

            <?php if (get_field('carga_horaria')): ?>
              <h3 class="title">Carga Horária</h3>
              <p><?php the_field('carga_horaria'); ?></p>
            <?php endif ?>

            <h3 class="title">Início e Horário</h3>
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
    </div>
  </div>
</section>

