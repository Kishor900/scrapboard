<?php

function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_menu');

function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}

add_filter('wp_nav_menu', 'add_menuclass');

add_action('widgets_init', 'theme_slug_widgets_init');

function theme_slug_widgets_init() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'theme-slug'),
        'id' => 'sidebar-1',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'theme-slug'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}