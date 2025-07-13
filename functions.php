<?php
// Chargement des fichiers de configuration
//require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/customizer.php';
add_theme_support('post-thumbnails');
function mon_theme_setup() {
  add_theme_support('menus');
  register_nav_menus([
    'main_menu' => 'Menu principal'
  ]);
}
add_action('after_setup_theme', 'mon_theme_setup');
add_filter('show_admin_bar', '__return_false');
