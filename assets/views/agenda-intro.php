<div class="programa__intro">
  <div class="container">
    <header class="programa__header">
    <?php $terms = wp_get_post_tags($post->ID); ?>
      <h1 class="title">
        <span class="type">Aconteceu na ECDD</span>
        <span class="sr-only"><?php echo $terms[0]->name ?></span>
        <span><?php the_title(); ?><span>
      </h1>
    </header><!-- /header -->
    <div class="programa__content">
      <?php the_content(); ?>
    </div>
  </div>
</div>


