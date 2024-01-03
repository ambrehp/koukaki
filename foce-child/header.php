<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <!--Création burger menu -->
            <div class="site-title navbar">
                <div class="empty"></div>
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?>
                </a>

                <div class="menu-btn">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </header>

        <div class="header__nav">
            <nav class="nav fade-in-text">
                <!--Ajout des élements visuels dans le menu -->
                <img class="fadeInUp imglogo logo-menu" src="<?php echo get_template_directory_uri() . '-child/assets/images/logo-burger-menu.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <img class="img-menu orchid-menu spin" src="<?php echo get_template_directory_uri() . '-child/assets/images/orchid.png'; ?> " alt="orchidé">
                <img class="img-menu Kawaneko-menu floating" src="<?php echo get_template_directory_uri() . '-child/assets/images/Kawaneko-menu.png'; ?> " alt="chat Kawaneko">
                <img class="img-menu flower-menu spin" src="<?php echo get_template_directory_uri() . '-child/assets/images/flower.png'; ?> " alt="fleurs oranges">
                <img class="img-menu sunflower-menu spin" src="<?php echo get_template_directory_uri() . '-child/assets/images/Sunflower.png'; ?> " alt="marguerite">
                <img class="img-menu random-flower-menu spin" src="<?php echo get_template_directory_uri() . '-child/assets/images/random_flower.png'; ?> " alt="fleurs parmes">
                <img class="img-menu jaakuna-menu floating" src="<?php echo get_template_directory_uri() . '-child/assets/images/Jaakuna-menu.png'; ?> " alt="chat Jaakuna">
                <ul class="nav__list">
                    <li class="nav__list_item"><a class="nav__link fade-in-text" href="#story">Histoire</a></li>
                    <li class="nav__list_item"><a class="nav__link fade-in-text" href="#characters">Personnages</a></li>
                    <li class="nav__list_item"><a class="nav__link fade-in-text" href="#place">Lieu</a></li>
                    <li class="nav__list_item"><a class="nav__link fade-in-text" href="#studio">Studio Koukaki</a></li>
                </ul>
                <img class="img-menu orenjiiro-menu floating" src="<?php echo get_template_directory_uri() . '-child/assets/images/Orenjiiro-menu.png'; ?> " alt="chat Orenjiiro">
                <img class="imglogo img-bottom" src="<?php echo get_template_directory_uri() . '-child/assets/images/Studio-Koukaki.png'; ?> " alt="Studio Koukaki">
            </nav>
        </div>
    </div>
    <!-- #site-navigation -->
    <!-- #masthead -->