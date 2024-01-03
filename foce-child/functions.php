<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    //  Chargement du style personnalisé pour le theme
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    wp_enqueue_style('menu-style', get_stylesheet_directory_uri() . '/css/menu.css');
    wp_enqueue_style('mediaqueries-style', get_stylesheet_directory_uri() . '/css/mediaqueries.css');
}
// import swiper script
wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', 1.1, true);

// import swiper style
wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper.css', array(), '1.1', 'all');

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// import script.js
function ajouter_script_theme_enfant()
{
    wp_enqueue_script('script-theme-enfant', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'ajouter_script_theme_enfant');
