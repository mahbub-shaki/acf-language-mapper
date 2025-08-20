<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
/**
 * Main Navigation
 */
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
        <!-- Site Logo / Title -->
        <a class="navbar-brand fw-bold" href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>

        <!-- Mobile Menu Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'acf-language-mapper'); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- WordPress Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                'container'      => false,
                'fallback_cb'    => 'wp_page_menu',
                'depth'          => 2,
            ));
            ?>

            <?php
            /**
             * ACF-based Language Switcher
             * Checks if current page has an alternate language page set
             */
            if (is_page() && function_exists('get_field')) {
                $current_id   = get_queried_object_id();
                $alt_url      = get_field('alternate_language_page', $current_id);
                $current_slug = urldecode(get_post_field('post_name', $current_id));

                if ($alt_url) {
                    // Decide button label based on slug
                    $alt_label = ($current_slug === 'আমাদের-সম্পর্কে') ? 'Switch to English' : 'Switch to বাংলা';

                    echo '<a class="btn btn-outline-primary ms-3" href="' . esc_url($alt_url) . '">' . esc_html($alt_label) . '</a>';
                }
            }
            ?>
        </div>
    </div>
</nav>
