<?php
function mon_theme_customize_register($wp_customize) {

    /** SECTION HERO **/
    $wp_customize->add_section('hero_section', [
        'title' => __('Section Héro', 'mon-theme'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('hero_title', [
        'default' => 'Bienvenue sur notre site',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_title', [
        'label' => __('Titre principal', 'mon-theme'),
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_button_text', [
        'default' => 'En savoir plus',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('hero_button_text', [
        'label' => __('Texte du bouton', 'mon-theme'),
        'section' => 'hero_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_button_link', [
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control('hero_button_link', [
        'label' => __('Lien du bouton', 'mon-theme'),
        'section' => 'hero_section',
        'type' => 'url',
    ]);

    $wp_customize->add_setting('hero_background_image', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', [
        'label' => __('Image de fond', 'mon-theme'),
        'section' => 'hero_section',
        'settings' => 'hero_background_image',
    ]));

    /** SECTION ABOUT DETAILS **/
    $wp_customize->add_section('about_details_section', [
        'title' => __('Section Détails À propos', 'mon-theme'),
        'priority' => 25,
    ]);

    $default_titles = ['Who are we?', 'Our vision', 'Our mission'];
    $default_texts = [
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisl et, consequat lacus.',
        'Aliquam eget consequat libero, quis cursus lorem. Donec quis lorem ut magna feugiat sagittis.',
    ];

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("about_block{$i}_title", [
            'default' => $default_titles[$i - 1],
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("about_block{$i}_title", [
            'label' => __("Titre bloc {$i}", 'mon-theme'),
            'section' => 'about_details_section',
            'type' => 'text',
        ]);

        $wp_customize->add_setting("about_block{$i}_text", [
            'default' => $default_texts[$i - 1],
            'sanitize_callback' => 'wp_kses_post',
        ]);
        $wp_customize->add_control("about_block{$i}_text", [
            'label' => __("Texte bloc {$i}", 'mon-theme'),
            'section' => 'about_details_section',
            'type' => 'textarea',
        ]);
    }

    /** SECTION ÉQUIPE **/
    $wp_customize->add_section('team_section', [
        'title' => __('Section Équipe', 'mon-theme'),
        'priority' => 50,
    ]);

    $wp_customize->add_setting('team_section_title', [
        'default' => 'Our Team',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('team_section_title', [
        'label' => __('Titre de la section', 'mon-theme'),
        'section' => 'team_section',
        'type' => 'text',
    ]);

    $default_names = ['Alice Martin', 'Sophie Dupont', 'Karim Lahlou', 'Jean Morel'];
    $default_roles = ['Sales Manager', 'Event Planner', 'Designer', 'CEO'];
    $default_phones = ['+33 1 02 56 32 80', '+33 1 23 12 25 14', '+33 1 09 32 20 20', '+33 1 02 56 32 85'];
    $default_emails = ['sales@company.com', 'planner@company.com', 'design@company.com', 'ceo@company.com'];
    $default_images = [
        get_template_directory_uri() . '/assets/images/team1.png',
        get_template_directory_uri() . '/assets/images/team2.png',
        get_template_directory_uri() . '/assets/images/team3.png',
        get_template_directory_uri() . '/assets/images/team4.png',
    ];

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("team_member_{$i}_name", [
            'default' => $default_names[$i - 1],
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("team_member_{$i}_name", [
            'label' => __("Nom du membre {$i}", 'mon-theme'),
            'section' => 'team_section',
            'type' => 'text',
        ]);

        $wp_customize->add_setting("team_member_{$i}_role", [
            'default' => $default_roles[$i - 1],
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("team_member_{$i}_role", [
            'label' => __("Poste du membre {$i}", 'mon-theme'),
            'section' => 'team_section',
            'type' => 'text',
        ]);

        $wp_customize->add_setting("team_member_{$i}_phone", [
            'default' => $default_phones[$i - 1],
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("team_member_{$i}_phone", [
            'label' => __("Téléphone du membre {$i}", 'mon-theme'),
            'section' => 'team_section',
            'type' => 'text',
        ]);

        $wp_customize->add_setting("team_member_{$i}_email", [
            'default' => $default_emails[$i - 1],
            'sanitize_callback' => 'sanitize_email',
        ]);
        $wp_customize->add_control("team_member_{$i}_email", [
            'label' => __("Email du membre {$i}", 'mon-theme'),
            'section' => 'team_section',
            'type' => 'email',
        ]);

        $wp_customize->add_setting("team_member_{$i}_image", [
            'default' => $default_images[$i - 1],
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "team_member_{$i}_image", [
            'label' => __("Photo du membre {$i}", 'mon-theme'),
            'section' => 'team_section',
            'settings' => "team_member_{$i}_image",
        ]));
    }

    /** SECTION SERVICES **/
     $wp_customize->add_section('services_section', [
    'title' => __('Section Services', 'mon-theme'),
    'priority' => 60,
]);

$wp_customize->add_setting('services_title', [
    'default' => 'Our Services',
    'sanitize_callback' => 'sanitize_text_field',
]);
$wp_customize->add_control('services_title', [
    'label' => __('Titre de la section', 'mon-theme'),
    'section' => 'services_section',
    'type' => 'text',
]);

for ($i = 1; $i <= 3; $i++) {
    $wp_customize->add_setting("service_{$i}_image", [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "service_{$i}_image", [
        'label' => __("Image du service {$i}", 'mon-theme'),
        'section' => 'services_section',
        'settings' => "service_{$i}_image",
    ]));

    $wp_customize->add_setting("service_{$i}_title", [
        'default' => "Service {$i}",
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control("service_{$i}_title", [
        'label' => __("Titre du service {$i}", 'mon-theme'),
        'section' => 'services_section',
        'type' => 'text',
    ]);

    $wp_customize->add_setting("service_{$i}_desc", [
        'default' => 'Description du service...',
        'sanitize_callback' => 'wp_kses_post',
    ]);
    $wp_customize->add_control("service_{$i}_desc", [
        'label' => __("Description du service {$i}", 'mon-theme'),
        'section' => 'services_section',
        'type' => 'textarea',
    ]);
}
$wp_customize->add_section('partners_section', [
    'title' => __('Section Partenaires', 'mon-theme'),
    'priority' => 70,
]);

$wp_customize->add_setting('partners_title', [
    'default' => 'Our Partners',
    'sanitize_callback' => 'sanitize_text_field',
]);

$wp_customize->add_control('partners_title', [
    'label' => __('Titre de la section', 'mon-theme'),
    'section' => 'partners_section',
    'type' => 'text',
]);

for ($i = 1; $i <= 4; $i++) {
    $wp_customize->add_setting("partner_logo_{$i}", [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "partner_logo_{$i}", [
        'label' => __("Logo partenaire {$i}", 'mon-theme'),
        'section' => 'partners_section',
        'settings' => "partner_logo_{$i}",
    ]));
}

}
add_action('customize_register', 'mon_theme_customize_register');