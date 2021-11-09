<?php

/**
 * Script + Style Bootstrap 5
 */
function wp_bootstrap_styles_scripts(){
    wp_enqueue_style('main-style', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_styles_scripts');

/**
 * Theme support (menu / logo etc)
 */
function themerecettessetup(){
    add_theme_support( 'title-tag' );

    add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1568, 9999 );

    register_nav_menus( 
        array(
            'main-menu' => 'Menu principal',
            'footer-menu'  => 'Menu pieds de page',
        )
    );

    $logo_width  = 300;
	$logo_height = 100;
    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true
        )
	);
}
 add_action( 'after_setup_theme', 'themerecettessetup' );


/**
 * Ajout class Li de la nav (bootstrap)
 */
function add_li_class_bootstrap($classes, $args) {
    if(isset($args->li_class_bootstrap)) {
        $classes[] = $args->li_class_bootstrap;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_class_bootstrap', 1, 3);

/**
 * Ajout class a de la nav (bootstrap)
 */
function add_a_class_bootstrap( $classes, $item, $args ) {
    if(isset($args->a_class_bootstrap)) {
        $classes['class'] = $args->a_class_bootstrap;
    }
    if( in_array( 'current-menu-item', $item->classes ) ) {
        $classes['class'] = $args->a_class_bootstrap.' active';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_a_class_bootstrap', 10, 3 );