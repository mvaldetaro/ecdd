<section class="galeria">
  <div class="container">
    <header class="galeria__header">
      <h2 class="title">Galeria</h2>
    </header>
    <div class="galeria__content">
      <ul class="galeria__content__list">
        <?php
        if (get_field('galeria')) {
          $imagens = get_field('galeria');
          foreach ($imagens as $img) {
            echo '<li class="galeria__content__list__item">';
            echo '<a href="'.$img[url].'" title="'.$img[title].'" alt="'.$img[alt].'">';
            echo '<img src="'.$img[sizes][thumbnail].'" alt="'.$img[title].'">';
            echo '</a>';
            echo '</li>';
          }
        }
        ?>
      </ul>
    </div>
  </div>
</section>
