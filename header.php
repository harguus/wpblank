<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_option('blogname'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div class="barra-topo container">
        <div class="row">
          <div class="redes-sociais col-md-4">redes socias</div>
          <div class="pesquisa col-md-8">pesquisa</div>
        </div>
      </div>
      <div class="area-menu container">
        <div class="row">
          <div class="logo col-md-3">logo</div>
          <div class="menu-principal col-md-9 text-right">
            <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?></div>
        </div>
      </div>
    </header>
