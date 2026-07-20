<?php

defined('ABSPATH') || exit;

/**
 * Подключение стилей и скриптов темы
 */

function tw_enqueue_assets(): void
{

}
add_action('wp_enqueue_scripts', 'tw_enqueue_assets');