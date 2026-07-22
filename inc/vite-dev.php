<?php

defined('ABSPATH') || exit;


function wpstarter_vite_client(): void
{
    if (!wpstarter_is_vite_running()) {
        return;
    }

    ?>

    <script type="module" src="http://localhost:5173/@vite/client"></script>

    <script type="module" src="http://localhost:5173/assets/js/main.js"></script>

    <?php
}

add_action('wp_head', 'wpstarter_vite_client', 1);