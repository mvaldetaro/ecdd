<div class="adicional-intro container">
  <div class="adicional-intro__content">
    <div class="row">
      <?php
        if( have_rows('palestrantes') ):
      ?>
       <div class="col-md-6">
        <div class="adicional-intro__item">
        <?php
          $l = count(get_field('palestrantes'));
            if ($l <= 1) {
                echo '<h3>Palestrante</h3>';
              } else {
                echo '<h3>Palestrantes</h3>';
              }
            while ( have_rows('palestrantes') ) : the_row();
              echo '<div class="palestrante">';
              if (get_sub_field('foto')) {
                echo '<img src="'.get_sub_field('foto').'" alt="'.get_sub_field('nome').'" width="80px" height="80px">';
              }
              echo '<p>'.get_sub_field('nome').'</p>';
              echo '</div>';
            endwhile;
          ?>
        </div>
      </div>
      <?php endif; ?>
      <!--
      <div class="col-md-4">
        <div class="adicional-intro__item">
        <h3>Entrada</h3>
        <p><b>1Kg de alimento não perecível</b></p>
        <p>Todos os alimentados arrecados serão doados <br>para <a href="http://papainoel.org/" title="Instituto Casa do Papai Noel">Casa do Papai Noel</a> - Instituto de Apoio e Assistência Social</p>
        </div>
      </div>
      -->
      <div class="col-md-4">
        <div class="adicional-intro__item">
        <?php
        $date = get_field('data_hora', false, false);
        $date = new DateTime($date);
        $dateformatweekday = "l";
        $dateformat = "d \\d\\e F";
        $unixtimestamp = strtotime($date->format('d-m-Y'));
        if (get_field('data_hora')):
          echo '<h3>Quando</h3>';
          echo '<p class="dia-semana"><span>'. date_i18n($dateformatweekday, $unixtimestamp) .'</span> ';
          echo date_i18n($dateformat, $unixtimestamp) . ' às '. $date->format('H\hi') .'</p>';
        else:
          echo '<p>Sem data e horário</p>';
        endif
        ?>
        </div>
      </div>

    </div>
  </div>
</div>




