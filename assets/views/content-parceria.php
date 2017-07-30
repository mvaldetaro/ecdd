<div class="container">
  <div class="page">
    <div class="row">
      <aside class="col-md-3">
       <?php
       wp_nav_menu( array(
        'theme_location' => 'partnership',
        'container' => 'nav',
        'container_class' => 'side-menu',
        'menu_class' => 'side-menu__list',
        ));
        ?>
      </aside>
      <main class="col-md-7">
        <header class="page__header">
          <h1 class="title"><?php the_title(); ?></h1>
        </header>
        <div class="page__content">
          <?php the_content(); ?>
        </div>
      </main>
    </div>
  </div>
</div>
