<?php

//������� ������
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

// ���������� �������
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

// ��������� ������ ��������� ����

require_once ( get_stylesheet_directory() . '/theme-options.php' );

// ����������� �������� ������.
add_theme_support( 'post-thumbnails' );