<?php
/**
 * The template for displaying single post for teams
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sncc
 */

get_header();

$skill     = function_exists('get_field') ? get_field('skill') : '';
$interests = function_exists('get_field') ? get_field('interest') : '';
?>

<main id="primary" class="site-main">

    <section class="single-team__header sncc-section-sm">
        <div class="uk-container">
            <div class="single-team__container uk-grid">
                <div class="uk-width-2-5@m">
                    <div class="single-team__imagecontainer">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', [
                            'class' => 'profile-avatar__img',
                            'alt'   => get_the_title()
                        ]); ?>
                        <?php else : ?>
                        <div class="profile-avatar__placeholder">
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/avatar.jpg" />
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="single-team__content">
                        <h1><?php the_title(); ?>
                        </h1>
                        <?php if (!empty($skill)): ?>
                        <p class="profile-line"><strong>Skill:</strong> <?php echo esc_html($skill); ?></p>
                        <?php endif; ?>

                        <?php if (!empty($interests)): ?>
                        <p class="profile-line"><strong>Interest:</strong> <?php echo esc_html($interests); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sncc-section-sm">
        <div class="uk-container">
            <?php the_content();?>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();