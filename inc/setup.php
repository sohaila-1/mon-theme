<?php
function mon_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'main_menu' => 'Menu principal'
  ]);
}
add_action('after_setup_theme', 'mon_theme_setup');
