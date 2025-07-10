<?php
function mon_theme_enqueue_assets() {
    // CSS
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css');

    // JS
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_assets');
