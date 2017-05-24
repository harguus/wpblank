<?php

// carregameto de scripts.
function additional_scripts(){
  // bootstrap
  wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
  wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);

  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
  wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'additional_scripts');

// função para adicionar menus
register_nav_menus(
  array(
    // posição do menu , nome do menu no admin
    'main_menu' => 'Menu Principal',
    'botton_menu' => 'Menu Rodapé',
    // 'segundo_menu' => 'Segundo Menu',
  )
);

// chamadas de custom template
add_theme_support('custom-background');
// suporte a imagem customizada no header
add_theme_support('custom-header');
// adicionar minuaturas em postagens
add_theme_support('post-thumbnails');
// formatos de postagens
add_theme_support('post-formats', array('video','image'));
