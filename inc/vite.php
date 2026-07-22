<?php

defined('ABSPATH') || exit;


function tw_is_vite_running(): bool
{
    $connection = @fsockopen(
        '127.0.0.1',
        5173,
        $errno,
        $errstr,
        0.1
    );

    if ($connection) {
        fclose($connection);
        return true;
    }

    return false;
}