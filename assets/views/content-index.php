 <!-- Trabalho dos Alunos -->
 <div class="container">
  <?php get_template_part('assets/views/banner-index', 'bar-top'); ?>
</div>
<!-- /Trabalho dos Alunos -->
<!-- Agenda e Eventos -->
<div class="container">
  <div class="col-md-4">
    <?php get_template_part('assets/views/calendar', 'calendar'); ?>
  </div>
  <div class="col-md-6">
    <?php get_template_part('assets/views/events', 'events'); ?>
  </div>
</div>
<!-- /Agenda e Events -->
<?php get_template_part('assets/views/call-action-course.php', 'about-course'); ?>
<!-- Nossos Professores -->
<div class="container">
  <?php get_template_part('assets/views/our-teachers', 'our-teachers'); ?>
</div>
<!-- /Nossos Professores -->
<!-- Institucuinal -->
<div class="container">
  <div class="col-md-6">
    <div class="embed-responsive">
      <iframe class="embed-responsive__item" src="https://www.youtube.com/embed/-6JEXzF72b0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-md-4">
    <?php get_template_part('assets/views/likebox-facebook', 'likebox'); ?>
  </div>
</div>
<!-- /Institucuinal -->
<?php get_template_part('assets/views/call-action-studentship', 'studentship'); ?>
