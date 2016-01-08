<?php

function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('single-header-menu', __('Single Header Menu'));
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

class DD_Wolker_Menu extends Walker_Nav_Menu {
	function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
	    $GLOBALS['dd_children'] = ( isset($children_elements[$element->ID]) )? 1:0;
        $GLOBALS['dd_depth'] = (int) $depth;
        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }
}
add_filter('nav_menu_css_class','add_parent_css',10,2);
function  add_parent_css($classes, $item){
     global  $dd_depth, $dd_children;
     $classes[] = 'depth'.$dd_depth;
     if($dd_children)
         $classes[] = 'parent';
    return $classes;
}