<?php

defined('ABSPATH') || exit;

/**
 * Подключение стилей темы.
 */
function tw_enqueue_styles(): void
{
    wp_enqueue_style(
        'tw-main',
        get_template_directory_uri() . '/build/css/main.css',
        [],
        TW_THEME_VERSION
    );
}

/**
 * Подключение скриптов темы.
 */
function tw_enqueue_scripts(): void
{
	    wp_enqueue_script(
        'tw-main',
        get_template_directory_uri() . '/build/js/main.js',
        [],
        TW_THEME_VERSION,
        true
    );
}

add_action('wp_enqueue_scripts', 'tw_enqueue_styles');
add_action('wp_enqueue_scripts', 'tw_enqueue_scripts');