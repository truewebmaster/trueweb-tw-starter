<?php

defined('ABSPATH') || exit;

/**
 * Получить URL текущей темы.
 */
function tw_get_theme_uri(): string
{
    return get_template_directory_uri();
}