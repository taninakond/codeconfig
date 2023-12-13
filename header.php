<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpwebdevs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php if (is_front_page()) {
                echo ' Home ';
                echo ' | ';
                echo bloginfo('name');
            } else {
                wp_title('');
                echo ' | ';
                bloginfo('name');
            } ?></title>
    <?php if (get_field('favicon', 'options')) : ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32" />
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="content-area overflow-hidden">
        <!-- MAIN HEADER START-->
        <header class="webdevs-header transition">
            <div class="container">
                <div class="header-container">

                    <div class="header-logo">
                        <a class="d-flex" href="<?php echo site_url(); ?>"><img class="transition" src="<?php echo get_theme_file_uri('/assets/images/wpwebdevs-logo-cpu.svg'); ?>" alt="logo"></a>

                        <div class="toggle-btn">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>

                    <nav class="navbar">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu', // Use the name you assigned to your custom menu
                            'menu_class' => 'navbar-nav',
                            'container' => false, // Remove the outer <div> container
                            // 'walker' => new Walker_Nav_Menu_Edit_Custom(), // Use the custom Walker
                        ));
                        ?>

                    </nav>
                </div>
            </div>
        </header><!-- MAIN HEADER END-->

        <?php if (is_front_page()) {
            printf('<div class="header_gutter"></div>');
        } ?>