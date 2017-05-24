<?php
/*
Template Name: Páginas Gerais
*/
?>

<?php get_header(); ?>
<!-- carregar imagem editável do template -->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
   width="<?php echo get_custom_header()->width; ?>" alt=""/>
<!-- fim -->
<div class="conteudo-wrapper">
  <main>
      <div class="conteudo container">
        <!-- inicio da chamada de postagens -->
        <?php
            if ( have_posts() ) :
              while ( have_posts() ) : the_post();
        ?>
          <h1><?php the_title(); ?></h1>
          <p>Autor: <?php the_author(); ?></p>
          <p><?php the_content(); ?></p>
        <?php
            endwhile;
            else:
        ?>
          <p><?php _e('Não há postagens publicadas.'); ?></p>
        <?php
            endif;
        ?>
        <!-- fim da chamada de postagens -->
      </div>
  </main>
</div>

<?php get_footer(); ?>
