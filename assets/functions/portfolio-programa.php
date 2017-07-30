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
  $i = 1;

  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

  $t = wp_get_post_tags($post->ID);
  $attachment_id = get_post_thumbnail_id($post->ID);

  echo '<div class="students-works__content__item mix '.$tagslug.' nth-'.$i.'">';

  echo '<div class="students-works__content__item__content">';
  echo '<a href="'.get_the_permalink().'" title="'.get_the_title().'">';
  echo '<picture>';
  switch ($i) {
    case 1:
    echo '<source media="(min-width: 992px)" srcset="'. imageUrl($attachment_id, "works-thumb-small") .'">';
    echo '<source media="(min-width: 768px)" srcset="'. imageUrl($attachment_id, 'works-thumb-small') .'">';
    echo '<img src="'. imageUrl($attachment_id, 'works-thumb-square') .'" class="img-responsive"/>';
    break;
    case 2:
    echo '<source media="(min-width: 992px)" srcset="'. imageUrl($attachment_id, "works-thumb-large") .'">';
    echo '<source media="(min-width: 768px)" srcset="'. imageUrl($attachment_id, 'works-thumb-large') .'">';
    echo '<img src="'. imageUrl($attachment_id, 'works-thumb-square') .'" class="img-responsive"/>';
    break;
    case 3;
    case 4;
    echo '<source media="(min-width: 992px)" srcset="'. imageUrl($attachment_id, "works-thumb-portrait") .'">';
    echo '<source media="(min-width: 768px)" srcset="'. imageUrl($attachment_id, 'works-thumb-portrait') .'">';
    echo '<img src="'. imageUrl($attachment_id, 'works-thumb-square') .'" class="img-responsive"/>';
    break;
    case 5;
    case 6;
    echo '<source media="(min-width: 992px)" srcset="'. imageUrl($attachment_id, "works-thumb-medium") .'">';
    echo '<source media="(min-width: 768px)" srcset="'. imageUrl($attachment_id, 'works-thumb-medium') .'">';
    echo '<img src="'. imageUrl($attachment_id, 'works-thumb-square') .'" class="img-responsive"/>';
    break;
  }
  echo '</picture>';

  echo '</a>';
  echo '</div>';
  echo '</div>';

  $i++;
  endwhile;
  wp_reset_postdata();
  else :
    _e('Nada encontrado.');
  endif;
}
?>
