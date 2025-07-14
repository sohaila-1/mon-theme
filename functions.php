<?php
function mon_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails'); // ✅ activation ici
  register_nav_menus([
    'main_menu' => 'Menu principal',
  ]);
}
add_action('after_setup_theme', 'mon_theme_setup');

add_filter('show_admin_bar', '__return_false');

// Charger les fichiers du thème
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/customizer.php';
// require_once get_template_directory() . '/inc/setup.php';
