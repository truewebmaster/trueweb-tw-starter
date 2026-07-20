<?php

defined('ABSPATH') || exit;

/**
 * Настройки темы.
 */
function tw_theme_options(): void
{
	//Добавить логотип
    add_theme_support(
        'custom-logo'
    );
}

add_action('after_setup_theme', 'tw_theme_options');

/**
 * Разрешаем загрузку SVG.
 */
function tw_allow_svg_uploads(array $mimes): array
{
    $mimes['svg'] = 'image/svg+xml';

    return $mimes;
}

add_filter('upload_mimes', 'tw_allow_svg_uploads');