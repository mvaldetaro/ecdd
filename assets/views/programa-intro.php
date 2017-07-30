<div class="programa__intro">
  <div class="container">
    <header class="programa__header">
      <h1 class="title">
        <span class="type"><?php get_post_type_singular_name($post->post_type) ?></span>
        <span><?php the_title(); ?><span>
      </h1>
    </header><!-- /header -->
    <div class="programa__content wow animated zoomIn">
      <?php the_content(); ?>
    </div>
  </div>
</div>
