<div class="processo-seletivo-banner">
  <div class="container">
    <div class="row">
      <div class="col-xs-5 col-sm-8">
        <div class="processo-seletivo-banner__content">
          <div class="call"><p>PROCESSO SELETIVO <span class="ano"><?php the_field('ano_processo_seletivo'); ?></span></p></div>

          <?php
          if(get_post_type() == "graduacao") {
            $modalidades = get_field('modalidades');
            if($modalidades) {
              echo '<div class="description">';
              if(count($modalidades) < 2) {
                echo 'Esta graduação é oferecida na modalidade: ';
                echo '<span class="modalidades">'.$modalidades[0].'</span>';
              } elseif(count($modalidades) >= 2) {
                echo 'Esta graduação é oferecida nas modalidades: ';
                echo '<span class="modalidades">'.implode(", ",$modalidades).'</span>';
              } else {
                echo 'Indisponível no momento.';
              }
              echo '</div>';
            }
          };
        ?>

        </div>
      </div>
      <div class="col-xs-7 col-sm-4">
      <?php if(get_post_type() == "graduacao") { ?>
        <div class="processo-seletivo-banner__actions text-right">
          <a href="http://www.vestibularinfnet.com.br/formulario.php" class="btn btn-primary hidden-xs">INSCREVA-SE JÁ</a>
          <a href="http://www.vestibularinfnet.com.br/formulario.php" aria-hidden="true" class="btn btn-primary btn-sm visible-xs-inline-block">INSCREVA-SE JÁ</a>
        </div>
      <?php } else { ?>
        <div class="processo-seletivo-banner__actions text-right no-graduation">
          <a href="#solicitar-informacoes" class="btn btn-primary hidden-xs">Solicitar Informações</a>
          <a href="#solicitar-informacoes" aria-hidden="true" class="btn btn-primary btn-sm visible-xs-inline-block">Solicitar Informações</a>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
  <span class="arrow"></span>
</div>
