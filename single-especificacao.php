<?php
/**
 * @package ECDD
 * Template Name: Especificação Template
 * Template Post Type: especificacao, post 
 */
?>

<?php get_header(); ?>
<header class="header header--internal">
  <div class="header-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php get_template_part('assets/views/bar-top', 'bar-top'); ?>
          <?php get_template_part('assets/views/head', 'head'); ?>
        </div>
      </div>
    </div>
  </div>
  <?php
    $image = get_field('imagem_topo');
    $alt = get_the_title();
    $url = get_template_directory_uri();
    if ($image) {
      //echo '<img src="'.$image.'" alt="'.$alt.'">';
    } else {
      //echo '<img src="'.$url.'/assets/img/bg-category-head.jpg" alt="'.$alt.'">';
    }
    ?>
  <div aria-hidden="true" class="header-background" style="background-image: url('<?php echo $image; ?>'); "> </div>

</header>

<main class="main">
  <?php get_template_part('assets/views/processo-seletivo-banner', 'processo-seletivo-banner'); ?>
  <?php get_template_part('assets/views/breadcrumb', 'breadcrumb'); ?>
  
  <div class="container">
    <div class="programa__intro">
      <div class="container">
        <header class="programa__header">
          <h1 class="title">
            <span class="type"><?php get_post_type_singular_name($post->post_type) ?></span>
            <span><?php the_title(); ?><span>
          </h1>
        </header>
      </div>

      <div class="container">
        
        <?php $post_object = get_field('graduacao');

        if($post_object): 
          $post = $post_object;
          setup_postdata($post); 
          ?>
            <h2>Graduação: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
          
        <?php if(get_field('preparar_para_as_certificacoes') || get_field('detalhes_das_certificacoes')): ?>
          <div class="Rtable Rtable--2cols Rtable--collapse">
            <div class="Rtable-cell Rtable-cell--head Rtable-cell--1of1"><b>Entregável do Bloco</b></div>

            <?php if(get_field('preparar_para_as_certificacoes')): ?>
              <div class="Rtable-cell Rtable-cell--1of3">Preparar para as certificações:</div>
              <div class="Rtable-cell Rtable-cell--2of3"><?php the_field('preparar_para_as_certificacoes'); ?></div>
            <?php endif; ?>

            <?php if(get_field('detalhes_das_certificacoes')): ?>
              <div class="Rtable-cell Rtable-cell--1of3">Detalhes das certificações:</div>
              <div class="Rtable-cell Rtable-cell--2of3"><?php the_field('detalhes_das_certificacoes'); ?></div>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div class="Rtable Rtable--3cols Rtable--collapse">

          <?php
            if( have_rows('disciplinas') ):
                
              echo ('<div class="Rtable-cell Rtable-cell--head Rtable-cell--head--show">');
              echo ('<b>Disciplinas:</b> ');
              echo ('</div>');
              
              echo ('<div class="Rtable-cell Rtable-cell--head Rtable-cell--head--show">');
              echo ('<b>Competências: </b>');
              echo ('</div>');

              echo ('<div class="Rtable-cell Rtable-cell--head Rtable-cell--head--show">');
              echo ('<b>Softwares/Equipamentos:</b> ');
              echo ('</div>');

              while ( have_rows('disciplinas') ) : the_row();
                  
                  echo ('<div class="Rtable-cell">');
                  the_sub_field('titulo_disciplina');
                  echo ('</div>');

                  echo ('<div class="Rtable-cell">');

                    if( have_rows('competencias') ):
                        echo ('<ol>');
                        while ( have_rows('competencias') ) : the_row();
                            echo ('<li>');
                            the_sub_field('titulo_competencia');
                            echo ('</li>');
                        endwhile;
                        echo ('</ol>');
                    endif;

                  echo ('</div>');


                  echo ('<div class="Rtable-cell">');
                  the_sub_field('softwares_equipamentos');
                  echo ('</div>');

                endwhile;
            else :
            endif;
          ?>

        </div>

      </div>

      <div class="container">

        <?php if ( is_user_logged_in() ) { ?>
          <div class="comments">
            <h2>Comentários</h2>
          </div>
        <?php } else { ?>
          <div class="r-l">
            <div class="col-md-6">
              <h2>Cadastre-se para comentar</h2>
              <?php echo do_shortcode('[ultimatemember form_id=858]'); ?>
              <?php echo do_shortcode('[ultimatemember form_id=1890]'); ?>
            </div>
            <div class="col-md-6">
              <h2>Já sou cadastrado</h2>
              <?php echo do_shortcode('[ultimatemember form_id=859]'); ?>
              <?php echo do_shortcode('[ultimatemember form_id=1891]'); ?>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </div>

</main>

<?php 
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $cookie_name = "wp_last_url";
  $cookie_value = $actual_link;
  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>

<?php get_footer(); ?>

