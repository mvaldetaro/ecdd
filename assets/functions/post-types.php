<?php

  add_action('init', 'create_post_type');

  function create_post_type() {
    new_post_type('programa_mba','MBAs','MBA', 'Todos os');
    new_post_type('programa_pos','Pós Graduações','Pós Graduação', 'Todos as');
    new_post_type('programa_graduacao','Graduações','Graduação', 'Todos as');
    new_post_type('programa_formacao','Formações','Formação', 'Todos as');
    new_post_type('programa_ead','EADs','EAD', 'Todos os');
  }

  function new_post_type($post_type, $name, $singular_name, $all_itens) {
    register_post_type($post_type,
      array(
        'labels' => array(
          'name' => __($name),
          'singular_name' => __($singular_name),
          'all_items' => __($all_itens.' '.$name)
        ),
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions')
      )
    );
  }

?>
