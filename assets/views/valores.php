<section class="valores">
  <div class="container">
    <header class="valores__header wow animated fadeIn">
      <h2 class="title">Valores</h2>
    </header>
    <div class="row">
      <div class="valores__content wow animated fadeIn">
        <div class="col-md-4">
          <div class="valores__content__item">
            <h3 class="title">Regular</h3>
            <?php
              if( have_rows('regular') ):
                while ( have_rows('regular') ) : the_row();
            ?>
            <div class="group">
              <p class="modalidade"><?php the_sub_field('modalidade'); ?> |
              <!--<span class="bolsa">Bolsa <?php the_sub_field('percentagem_bolsa'); ?>%</span>-->
              <span class="sr-only">das</span>
              <span class="horario"><?php the_sub_field('horario'); ?></span>
              </p>
              <p class="preco">R$ <?php the_sub_field('valor_com_desconto'); ?> mensais <span class="preco__integral" style="line-height: 16px; margin-top: 8px;">Entre em contato para condições especiais para a próxima entrada.<!-- Valor Integral: R$<?php //the_sub_field('valor_integral'); ?> mensais--></span></p>
            </div>
            <?php
              endwhile;
              else :
                echo 'Não há novas turmas.';
              endif;
            ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="valores__content__item">
            <h3 class="title">Fies</h3>
            <div class="group">
              <p>Lembre-se de que você pode financiar seus estudos pelo FIES.</p>
              <p>Entenda como funciona o programa e faça sua inscrição.</p>
              <div class="text-center">
                <a href="http://ecdd.infnet.edu.br/financiamentos/" class="btn btn-secondary btn-lg btn-lg-wide">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="valores__content__item">
            <div class="group">
              <h3 class="title">Bolsa de Estudo</h3>
              <p class="spacer">Conheça as opções de bolsas de estudos praticadas pelo Instituto Infnet.</p>
              <div class="text-center">
                <a href="http://ecdd.infnet.edu.br/parcerias/torne-se-um-conveniado/bolsas/" class="btn btn-secondary btn-lg btn-lg-wide">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<footer class="valores__footer wow animated fadeIn">
      <img src="<?php bloginfo('template_url') ?>/assets/img/pravaler.png" alt="Pra Valer">
      <p>No Infnet você financia sua graduação através do maior programa de crédito universitário privado do país: o Pravaler. <a href="http://www.creditouniversitario.com.br/simulador/#.V9LCbPkrLcs" rel="external" title="Pra Valer - Crédito Universitário">Clique aqui</a> e saiba mais.</p>
    </footer>-->
  </div>
</section>
