<div class="adicional-intro container">
  <div class="adicional-intro__content">
    <div class="row">
      <?php if (get_field('pre-requisito')): ?>
      <div class="col-md-4 wow animated fadeInUp">
        <div class="adicional-intro__item">
          <h3>VISÃO GERAL</h3>
          <p><?php the_field('visao_geral'); ?></p>
        </div>
      </div>
      <div class="col-md-4 wow animated fadeInUp">
        <div class="adicional-intro__item" data-wow-delay="0.2">
        <h3>Público Alvo</h3>
          <p><?php the_field('publico_alvo'); ?></p>
        </div>
      </div>
      <div class="col-md-4 wow animated fadeInUp" data-wow-delay="0.4">
        <div class="adicional-intro__item">
          <h3>Pré-Requisitos</h3>
          <p><?php the_field('pre-requisito'); ?></p>
        </div>
      </div>
      <?php else: ?>
       <div class="col-md-6 wow animated fadeInUp">
        <div class="adicional-intro__item">
          <h3>VISÃO GERAL</h3>
          <p><?php the_field('visao_geral'); ?></p>
        </div>
      </div>

      <div class="col-md-6 wow animated fadeInUp" data-wow-delay="0.2">
        <div class="adicional-intro__item">
        <h3>Público Alvo</h3>
          <p><?php the_field('publico_alvo'); ?></p>
        </div>
      </div>

      <?php endif ?>
    </div>
  </div>
</div>
