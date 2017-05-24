<!-- parte do layout -->
<article>
  <h1><?php the_title(); ?></h1>
  <!-- chamada de miniaturas das imagens de postagens como argumento
  passa-se o tamanho que deseja, sem argumento tamanho da imagem padrão.
  parametros esperados: thumbnail, medium, large, full ou tamanho em p
  ixels passancom um array com largura e altura-->
  <?php the_post_thumbnail(array(175,175)); ?>
  <p>Publicado em: <?php echo get_the_date(); ?>Escrito por: <?php the_author(); ?></p>
  <!-- recebe como parametro uma string como separador de categorias -->
  <p>Categoria(s): <?php the_category(' '); ?></p>
  <!-- recebe como parametro uma string, 1º o que aparece antes das tags
  2º o que separa as tags-->
  <p><?php the_content(); ?></p>
  <p><?php the_tags('Tags: ', ', '); ?></p>
</article>
