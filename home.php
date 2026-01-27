<?php
/**
 * The main template file
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
?>

<main id="primary" class="site-main">

    <section class="hero__section">
        <div>
            <div class="uk-position-relative uk-visible-toggle uk-light hero__slideshow" tabindex="-1" uk-slideshow>
                <div class="uk-slideshow-items">
                    <?php $banners = get_field("hero_section_bg_images","option");
                    if(is_array($banners) || is_object($banners) && !empty($banners)) {
                        foreach($banners as $banner){
                            ?>
                    <div class="hero__slideshow_item">
                        <img src="<?php echo $banner['hero_section_bg_image']['url']; ?>" />
                    </div>
                    <?php  }
                    }
                    ?>
                </div>

                <a class=" uk-position-small uk-hidden-hover" href uk-slidenav-previous
                    uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
                    uk-slideshow-item="next"></a>

            </div>
            <div class="hero__section_header">
                <h1><?php echo get_field('hero_section_text', 'option'); ?></h1>
            </div>
        </div>
    </section>

    <section class="aboutus__section uk-section sncc-section">
        <div class="uk-container">
            <div class="aboutus__content">
                <div uk-grid uk-height-match="target: > div ">
                    <div class="uk-width-3-5@m">
                        <div class="aboutus-container" uk-parallax="start: 100%; end: 100%;">
                            <span><?php echo get_field('about_us_slug', 'option'); ?></span>
                            <h2><?php echo get_field('about_us_title', 'option'); ?></h2>
                            <p>
                                <?php echo get_field('about_us_description', 'option'); ?>
                            </p>
                            <a href="
                                <?php echo get_field('about_us_link', 'option'); ?>
                            " class="aboutus_btn">Join Us</a>
                        </div>
                    </div>
                    <div class="uk-width-2-5@m">
                        <?php
                            $top_image = get_field('about_us_img', 'option');
                            ?>
                        <div class="aboutus-imgcontainer">
                            <img loading="lazy" src="<?php echo $top_image['url']; ?>" />
                            <div class="floating-img" uk-parallax="start: 100%; end: 100%;">
                                <?php
                                    the_custom_logo();
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
                            $mop_bgimg = get_field('mop_bg_img', 'option');
                            $mop_img = get_field('mop_image', 'option')
                            ?>
    <section class="ourpresident__section sncc-section uk-background-fixed "
        style="background-image: url(<?php echo $mop_bgimg['url']?>">
        <div class="ourpresident-content ">
            <div class="uk-container">
                <div>
                    <div class="uk-grid uk-grid-large" uk-height-match="target: > div > div">
                        <div class=" uk-width-1-2@m">
                            <div class="ourpresident__presimg">
                                <img src="<?php echo $mop_img['url'] ?>" />
                            </div>
                        </div>
                        <div class="uk-width-1-2@m">
                            <div class="ourpresident__container">
                                <span><?php echo get_field('mop_slug', 'option'); ?></span>
                                <h3><?php echo get_field('mop_title', 'option'); ?></h3>
                                <ul>
                                    <?php 
                                    $achievements = get_field("mop_items", "option");
                                        if(is_array($achievements) || is_object($achievements) && !empty($achievements)){
                                            foreach($achievements as $achievement){ ?>
                                    <li><span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/Assets/image/trophy.png" /></span>
                                        <p><?php echo $achievement['mop_item']?></p>
                                    </li>
                                    <?php
                                        }
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <section class="ourpurpose__section sncc-section">
        <div class="uk-container">
            <div uk-slider>
                <div class="ourpurpose-header">
                    <div class="ourpurpose-header-content">
                        <span><?php echo get_field('our_purpose_slug', 'option'); ?></span>
                        <h2><?php echo get_field('our_purpose_title', 'option'); ?></h2>
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
    <section class="invitation__section sncc-section">
        <div class="uk-container ">
            <div>
                <div class="invitation__header">
                    <h2><?php echo get_field('sponsors_title', 'option'); ?>
                    </h2>
                    <p><?php echo get_field('sponsors_text', 'option'); ?></p>
                </div>
                <!-- <div class="invitation__content">
                    <div class="uk-grid uk-grid-collapse ">
                        <?php 
                        $invitation_items = get_field('howandwhy_items','option');
                        if (is_array($invitation_items) || is_object($invitation_items) && !empty($invitation_items)) {
                            foreach ($invitation_items as $invitation_item) {?>
                        <div class="uk-width-1-3">
                            <div class="invitation__item">
                                <h4><?php echo $invitation_item['howandwhy_title']?></h4>
                                <p><?php echo $invitation_item['howandwhy_description']?></p>
                                <a href="<?php echo $invitation_item['howandwhy_link']?>">Join Now</a>
                            </div>
                        </div>
                        <?php
                            }}
                        ?>
                    </div>
                </div> -->
                <?php
            $sponsor_args = array(
                'post_type'      => 'sponsor',
                'posts_per_page' => 15,
                'order'          => 'DESC',
                'post_status'    => 'publish',
            );

            $sponsor_query = new WP_Query($sponsor_args);
            ?>

                <?php if ($sponsor_query->have_posts()) : ?>
                <div class="sponsor__content uk-grid uk-child-width-1-2@s uk-child-width-1-4@m uk-grid-small uk-grid-match"
                    uk-grid>

                    <?php while ($sponsor_query->have_posts()) : $sponsor_query->the_post(); ?>
                    <div class="sponsor__card__outer">
                        <div class="sponsor__card__body uk-card uk-card-default uk-card-body uk-text-center">

                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('alt' => esc_attr(get_the_title()))); ?>
                            <?php endif; ?>

                            <p><?php the_title(); ?></p>

                        </div>
                    </div>
                    <?php endwhile; ?>

                </div>

                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="gallery__section sncc-section">
        <div class="uk-container">
            <div class="gallery__content">
                <h2>Life At SNCC</h2>
                <div class="uk-grid uk-grid-medium" uk-grid uk-lightbox="animation:slide">
                    <div class="uk-width-1-3@m">
                        <div>
                            <a href="<?php echo get_field('gallery_img_1','option')['url']; ?>"
                                data-caption="Caption 1">
                                <img src="<?php echo get_field('gallery_img_1','option')['url']; ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <div>
                            <a href="<?php echo get_field('gallery_img_2','option')['url']; ?>"
                                data-caption="Caption 1">
                                <img src="<?php echo get_field('gallery_img_2','option')['url']; ?>" />
                            </a>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <div>
                            <a href="<?php echo get_field('gallery_img_3','option')['url']; ?>"
                                data-caption="Caption 1">
                                <img src="<?php echo get_field('gallery_img_3','option')['url']; ?>" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="gallery_viewmore_container">
                    <a href="#" class="gallery_viewmorebtn">View More</a>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();