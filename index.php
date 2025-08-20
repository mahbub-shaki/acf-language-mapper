<?php
/**
 * Page Template
 *
 * @package acf-language-mapper
 */

get_header();
?>

<div class="container my-5">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Page Title -->
            <h2 class="mb-4"><?php the_title(); ?></h2>

            <!-- Page Content -->
            <div class="page-content">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No content found.', 'acf-language-mapper'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
