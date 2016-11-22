<?php

//убираем лишнее
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

// подключаем виджеты
function logo_widget_init() {

    register_sidebar( array(
        'name'          => 'Logo Evro-tel',
        'id'            => 'logo',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}

add_action( 'widgets_init', 'logo_widget_init' );

// настройки разных вариантов темы

require_once ( get_stylesheet_directory() . '/theme-options.php' );

// возможность вложения делать.
add_theme_support( 'post-thumbnails' );