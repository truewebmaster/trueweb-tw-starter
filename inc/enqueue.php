<?php

defined('ABSPATH') || exit;


function wp_enqueue_assets(): void
{

    if (wpstarter_is_vite_running()) {
        return;
    }

    // Подключаем главный CSS файл
    wp_enqueue_style(
        'wp-main',
        get_template_directory_uri() . '/build/css/main.css',
        [],
        WP_STARTER_VERSION
    );

    // Подключаем главный JS файл
    wp_enqueue_script(
        'wp-main',
        get_template_directory_uri() . '/build/js/main.js',
        [],
        WP_STARTER_VERSION,
        true
    ); }

add_action(
    'wp_enqueue_scripts',
    'wp_enqueue_assets'
);