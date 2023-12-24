<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo bloginfo(); ?></title>
    <?php if ( get_field( 'favicon', 'options' ) ): ?>
        <link rel="icon" href="<?php the_field( 'favicon', 'options' ); ?>" sizes="32x32" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="section codeconfig-header transition">
        <div class="container">
            <div class="header-menu-wrap d-flex space-between align-center">

                <div class="logo-wrapper">
                    <a href="<?php echo site_url(); ?>" class="logo"><img class="transition" src="<?php echo get_theme_file_uri( '/assets/images/CodeConfig-logo.svg' ); ?>" alt=""></a>
                    <div class="bars toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <?php
                    wp_nav_menu( [
                        'theme_location' => 'header-menu',
                        'menu_class' => 'main-header-menu',
                        'container'      => false,
                        // 'walker' => new Custom_Nav_Walker(), // Use the custom Walker
                    ] );
                ?>
            </div>
        </div>
    </header>
    <div class="header_gutter"></div>