 <!-- Trabalho dos Alunos -->
 <div class="container">
  <?php get_template_part('assets/views/students-works', 'bar-top'); ?>
</div>
<!-- /Trabalho dos Alunos -->
<!-- Agenda e Eventos -->
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <?php get_template_part('assets/views/calendar', 'calendar'); ?>
    </div>
    <div class="col-md-8">
      <?php get_template_part('assets/views/events', 'events'); ?>
    </div>
  </div>
</div>
<!-- Mais sobre os cursos -->
<?php get_template_part('assets/views/call-action-course', 'about-course'); ?>
<!-- Nossos Professores -->
<?php get_template_part('assets/views/our-teachers', 'our-teachers'); ?>
<!-- /Nossos Professores -->
<!-- Institucuinal -->
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <?php get_template_part('assets/views/talks', 'talks'); ?>
    </div>
    <div class="col-sm-4">
      <?php get_template_part('assets/views/likebox-facebook', 'likebox'); ?>
    </div>
  </div>
</div>
<!-- /Institucional -->
<?php //get_template_part('assets/views/como-chegar', 'como-chegar'); ?>
