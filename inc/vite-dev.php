<?php

defined('ABSPATH') || exit;


function tw_vite_client(): void
{
    if (!tw_is_vite_running()) {
        return;
    }

    ?>

    <script type="module" src="http://localhost:5173/@vite/client"></script>

    <script type="module" src="http://localhost:5173/assets/js/main.js"></script>

    <?php
}

add_action('wp_head', 'tw_vite_client', 1);