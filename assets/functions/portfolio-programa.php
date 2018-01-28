<?php
function imageUrl($id, $size) {
  $img_url = wp_get_attachment_image_src($id, $size, true );
  return $img_url[0];
}

function addClass($tag) {
  $classe = "";
  if($i <= 6) {
    $classe .= "recente ";
  }
  $classe .= $tag;
  echo $classe;
}

function porfolio($programa='') {
  $args = array(
    'category_name' => 'trabalhos-alunos',
    'post_status' => 'publish',
    'posts_per_page' => 6
  );

  if($programa) {
    $tagslug = $programa;
    $args['tag'] = $tagslug;
  } else {
    $tagslug = 'recente';
  }

  $query = new WP_Query($args);

  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

    $t = wp_get_post_tags($post->ID);
    $attachment_id = get_post_thumbnail_id($post->ID);

    $posttags = get_the_tags();
    $programa = get_field('programa');



    echo '<div class="students-works__content__item mix '.$tagslug.'">';

    echo '<div class="students-works__content__item__content">';
    echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'">';
    echo '<picture>';
    //, imageSrc($attachment_id, 'professores-thumb-large-2x') ' 2x';
    echo '<source media="(min-width: 1200px)" srcset="'. imageUrl($attachment_id, "works-thumb-large-desktop").', '. imageUrl($attachment_id, "works-thumb-large-desktop-2x").' 2x">';
    echo '<source media="(min-width: 992px)" srcset="'. imageUrl($attachment_id, "works-thumb-laptop") .', '. imageUrl($attachment_id, "works-thumb-laptop-2x") .' 2x">';
    echo '<source media="(min-width: 768px)" srcset="'. imageUrl($attachment_id, 'works-thumb-tablet') .', '.imageUrl($attachment_id, 'works-thumb-tablet-2x') .' 2x">';
    echo '<img srcset="'. imageUrl($attachment_id, 'works-thumb-mobile') .', '.imageUrl($attachment_id, 'works-thumb-mobile-2x').'" class="img-responsive"/>';

    echo '</picture>';
    echo '<div class="details">';
    echo '<span class="title">'.get_the_title().'</span>';
    echo '<span class="category">'. $posttags[0]->name .' '. $programa->post_title. '</span>';
    echo '</div>';
    echo '</a>';
    echo '</div>';
    echo '</div>';

  endwhile;
  wp_reset_postdata();
else :
  _e('Nada encontrado.');
endif;
}
?>
