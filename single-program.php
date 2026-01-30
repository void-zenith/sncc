<?php
/**
 * The template for displaying single post for teams
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sncc
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="generalbanner">
        <div class="genneralbanner-imgcontainer">
            <div class="genneralbanner-img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', [
                            'class' => 'single-program__bg',
                            'alt'   => get_the_title()
                        ]); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/bg.jpg" />
                <?php endif; ?>
            </div>
            <div class="genneralbanner-text">
                <h1><?php the_title();?></h1>
            </div>
    </section>
    <section class="sncc-section-sm">
        <div class="uk-container">
            <?php the_content();?>
        </div>
    </section>
    <?php
$program_args = array(
    'post_type'      => array('program'),
    'posts_per_page' => 15,
    'order'          => 'DESC',
    'post_status'    => 'publish'
);

$program_query = new WP_Query($program_args);
?>

    <?php if ($program_query->have_posts()) : ?>

    <section class="ourpurpose__section sncc-section-b">
        <div class="uk-container">
            <div uk-slider>
                <div class="ourpurpose-header">
                    <div class="ourpurpose-header-content">
                        <h2>More Programs</h2>
                    </div>
                    <div class="ourpurpose-navcontainer top">
                        <a class=" uk-hidden-hover previous-item ourpurpose-nav" href uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class=" uk-hidden-hover next-item ourpurpose-nav" href uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>
                </div>


                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <div class="uk-slider-items  uk-child-width-1-3@m uk-grid">
                        <?php while ($program_query->have_posts()) : $program_query->the_post();
                    $pid = get_the_ID();
                    $icon_url = get_field('icon', $pid);  
                    ?>
                        <div>
                            <a href="<?php the_permalink();?>" class="ourpurpose-item-container">
                                <?php echo dat_thumbnail_big(); ?>
                                <div class="ourpurpose-item-content">
                                    <?php if ($icon_url) : ?>
                                    <div>
                                        <img src="<?php echo esc_url($icon_url); ?>" alt="">
                                    </div>
                                    <?php endif; ?>
                                    <h4><?php the_title(); ?></h4>
                                </div>
                            </a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="ourpurpose-navcontainer bottom">
                    <a class=" uk-hidden-hover previous-item ourpurpose-nav" href uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a class=" uk-hidden-hover next-item ourpurpose-nav" href uk-slidenav-next
                        uk-slider-item="next"></a>
                </div>
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>
</main><!-- #main -->

<?php
get_footer();