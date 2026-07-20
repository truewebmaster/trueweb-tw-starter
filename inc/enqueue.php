<?php

defined('ABSPATH') || exit;

/**
 * Подключение стилей и скриптов темы
 */

function tw_enqueue_assets(): void
{
    wp_enqueue_style(
        'tw-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'tw_enqueue_assets');