<?php get_header(); ?>
<!-- pagina personalizada para a home -->
<div class="conteudo">
  <main>
    <section class="slide container">slide</section>
    <section class="servicos container">serviços</section>
    <section class="meio container">
      <aside class="barra-lateral col-md-3">barra laterial</aside>
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
    </section>
    <section class="mapa container">mapa</section>
  </main>
</div>

<?php get_footer(); ?>
