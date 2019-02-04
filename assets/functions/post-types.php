<?php

  add_action('init', 'create_post_type');

  function create_post_type() {
    new_post_type('mba','MBAs','MBA', 'Todos os');
    new_post_type('pos','Pós-Graduações','Pós-Graduação', 'Todos as');
    new_post_type('graduacao','Graduações','Graduação', 'Todos as');
    new_post_type('formacao','Formações','Formação', 'Todos as');
    new_post_type('ead','EADs','EAD', 'Todos os');
    new_post_type('depoimento','Depoimentos','Depoimento', 'Todos os');
    new_post_type('especificacao','Especificações','Especificação', 'Todas as');
  }

  function new_post_type($post_type, $name, $singular_name, $all_itens) {
    register_post_type($post_type,
      array(
        'labels' => array(
          'name' => __($name, $post_type),
          'singular_name' => __($singular_name, $post_type),
          'all_items' => __($all_itens.' '.$name)
        ),
        'public' => true,
        'publicly_queryable' => true,
        'has_archive' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'taxonomies' => array('category', 'post_tag'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-atributes', 'post-formats')
      )
    );
  }

  function get_post_type_singular_name($post_type) {
    $obj = get_post_type_object($post_type);
    $singular = $obj->labels->singular_name;

    echo $singular;
  }

?>
