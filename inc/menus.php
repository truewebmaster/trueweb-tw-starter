<?php

defined('ABSPATH') || exit;

/**
 * Регистрация областей меню.
 */
function tw_register_menus(): void
{
    register_nav_menus(
        [
            'primary' => 'Главное меню',
        ]
    );
}

add_action('after_setup_theme', 'tw_register_menus');