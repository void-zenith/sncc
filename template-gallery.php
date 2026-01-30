<?php

/**
 * Template Name: gallery
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sncc
 */

get_header();

$images = get_field('gallery_images');
?>

<main id="primary" class="site-main">
    <section class="generalbanner gallery-page__banner sncc-section-t-sm">
        <div class="genneralbanner-text">
            <h1>Life At SNCC</h1>
        </div>
    </section>
    <section class="sncc-section-sm">
        <div class="uk-container">
            <?php if ($images): ?>
            <div class="gallery__content uk-grid-small uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l"
                uk-grid uk-lightbox="animation: slide">

                <?php foreach ($images as $img): ?>
                <div>
                    <a href="<?php echo esc_url($img['url']); ?>"
                        data-caption="<?php echo esc_attr($img['caption']); ?>">
                        <img src="<?php echo esc_url($img['sizes']['large']); ?>"
                            alt="<?php echo esc_attr($img['alt']); ?>" loading="lazy" />
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
            <p>No images added yet.</p>
            <?php endif; ?>
        </div>
    </section>

</main><!-- #main -->

<?php
get_footer();