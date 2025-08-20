<?php
/**
 * Theme Setup
 */
function acf_lang_mapper_setup() {
    // Enable dynamic <title> tag support
    add_theme_support('title-tag');

    // Enable featured image support
    add_theme_support('post-thumbnails');

    // Register primary navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'acf-language-mapper'),
    ));
}
add_action('after_setup_theme', 'acf_lang_mapper_setup');


/**
 * Enqueue Styles and Scripts
 */
function acf_lang_mapper_assets() {
    // Bootstrap 5 CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
    );

    // Theme main stylesheet
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Bootstrap 5 JS bundle (with Popper)
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'acf_lang_mapper_assets');


/**
 * Add Bootstrap classes to WordPress menu
 */

// Add 'nav-item' class to <li> menu items
function acf_add_bootstrap_nav_class($classes, $item, $args) {
    if ($args->theme_location === 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'acf_add_bootstrap_nav_class', 10, 3);

// Add 'nav-link' class to <a> menu links
function acf_add_bootstrap_link_class($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'acf_add_bootstrap_link_class', 10, 3);


/**
 * Language Switcher Button
 *
 * Uses ACF Free 'alternate_language_page' field
 */
function acf_language_switcher() {
    if (function_exists('get_field')) {
        $current_id = get_the_ID();
        $alt_page   = get_field('alternate_language_page', $current_id);

        if ($alt_page) {
            echo '<a class="btn btn-outline-primary ms-2" href="' . esc_url(get_permalink($alt_page)) . '">Switch Language</a>';
        }
    }
}

