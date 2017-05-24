<!-- chamar header -->
<?php get_header(); ?>
<!-- fim -->
<!-- carregar imagem editável do template -->
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
   width="<?php echo get_custom_header()->width; ?>" alt=""/>
<!-- fim -->
<div class="conteudo">
  <main>
    <section class="container">
      <article>
        <div class="noticias col-md-9">
          <!-- inicio da chamada de postagen(s) -->
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            ?>

            <!-- carrega fragmento de uma pagina, include -->
            <?php get_template_part('content', get_post_format()); ?>
            <!-- fim -->

            <?php
          endwhile;
        else:
          ?>
          <p><?php _e('Não há postagens publicadas.'); ?></p>
          <?php
        endif;
        ?>
        <!-- fim -->
      </div>
    </article>
    </section>
  </main>
</div>
<!-- chamar footer -->
<?php get_footer(); ?>
<!-- fim -->
