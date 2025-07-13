<?php
function mon_theme_customize_register($wp_customize) {
    // Section Hero
    $wp_customize->add_section('hero_section', [
        'title' => __('Section Hero', 'mon-theme'),
        'priority' => 30,
    ]);

    // Texte du bouton
    $wp_customize->add_setting('hero_button_text', [
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_button_text', [
        'label' => __('Texte du bouton', 'mon-theme'),
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    // Lien du bouton
    $wp_customize->add_setting('hero_button_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('hero_button_link', [
        'label' => __('Lien du bouton', 'mon-theme'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);
}
add_action('customize_register', 'mon_theme_customize_register');
