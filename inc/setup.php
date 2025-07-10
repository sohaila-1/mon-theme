<?php
function mon_theme_setup() {
    // Support des images mises en avant
    add_theme_support('post-thumbnails');

    // Support du titre automatique dans le <head>
    add_theme_support('title-tag');

    // Support des menus
    register_nav_menus([
        'main_menu' => 'Menu principal',
        'footer_menu' => 'Menu pied de page',
    ]);
}
add_action('after_setup_theme', 'mon_theme_setup');
