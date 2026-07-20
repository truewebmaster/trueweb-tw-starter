<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header>

    <?php
    wp_nav_menu(
        [
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'header__menu',
        ]
    );
    ?>

</header>