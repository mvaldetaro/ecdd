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
    <div class="col-md-6">
      <?php get_template_part('assets/views/events', 'events'); ?>
    </div>
  </div>
</div>
<!-- Mais sobre os cursos -->
<?php get_template_part('assets/views/call-action-course', 'about-course'); ?>

<!-- Nossos Professores -->
<div class="container">
  <?php get_template_part('assets/views/our-teachers', 'our-teachers'); ?>
</div>
<!-- /Nossos Professores -->
<!-- Institucuinal -->
<div class="container">
  <div class="row">
    <div class="col-sm-8 text-align-center">
      <div class="embed-frame" style="margin-top: 16px;">
        <iframe src="https://www.youtube.com/embed/-6JEXzF72b0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-sm-4">
      <?php get_template_part('assets/views/likebox-facebook', 'likebox'); ?>
    </div>
  </div>
</div>
<!-- /Institucuinal -->
<?php get_template_part('assets/views/call-action-studentship', 'studentship'); ?>
