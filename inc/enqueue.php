<?php

defined('ABSPATH') || exit;


function tw_enqueue_assets(): void
{

    if (tw_is_vite_running()) {
        return;
    }

    // Подключаем главный CSS файл
    wp_enqueue_style(
        'tw-main',
        get_template_directory_uri() . '/build/css/main.css',
        [],
        TW_THEME_VERSION
    );

    // Подключаем главный JS файл
    wp_enqueue_script(
        'tw-main',
        get_template_directory_uri() . '/build/js/main.js',
        [],
        TW_THEME_VERSION,
        true
    ); }

add_action(
    'wp_enqueue_scripts',
    'tw_enqueue_assets'
);