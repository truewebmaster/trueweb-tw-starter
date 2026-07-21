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
        wp_get_theme()->get('Version')
    );
}

/**
 * Подключение скриптов темы.
 */
function tw_enqueue_scripts(): void
{
	    wp_enqueue_script(
        'tw-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}

add_action('wp_enqueue_scripts', 'tw_enqueue_styles');
add_action('wp_enqueue_scripts', 'tw_enqueue_scripts');