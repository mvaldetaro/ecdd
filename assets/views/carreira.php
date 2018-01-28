<?php if (get_field('descricao_carreira')): ?>
<div class="carreira" style="background-image: url('<?php the_field('background_carreira'); ?>');">
  <div class="container">
    <header class="carreira__header">
      <h2 class="title">COMO É A CARREIRA <br><b>DO ALUNO FORMADO NO CURSO</b></h2>
    </header>
    <div class="carreira__content">
      <div class="row">
        <div class="col-md-10">
          <?php the_field('descricao_carreira'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif ?>
