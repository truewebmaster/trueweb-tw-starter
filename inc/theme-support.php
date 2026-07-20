<?php

defined('ABSPATH') || exit;

/**
 * Настройки темы.
 */
function tw_setup_theme(): void
{

// Миниатюры записи
add_theme_support('post-thumbnails');
// WordPress сам управляет title
add_theme_support('title-tag');
// Используй современную HTML5-разметку
add_theme_support(
    'html5',
    [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]
);
}

add_action('after_setup_theme', 'tw_setup_theme');