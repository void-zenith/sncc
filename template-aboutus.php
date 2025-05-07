<?php

/**
 * Template Name: aboutus
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
    <section class="generalbanner">
        <div class="genneralbanner-imgcontainer">
            <div class="genneralbanner-img">
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/bg2.jpg" />
            </div>
            <div class="genneralbanner-text">
                <h1>About Us</h1>
            </div>
        </div>
        <div class="genneralbanner-breadcrumbs ">
            <div class="uk-container">
                <div class="breadcrumbs-container">
                    <ul class="breadcrumbs-lists">
                        <li class="breadcrumbs-item"><a href="/home">Home</a>
                        </li>
                        <li class="breadcrumbs-item"><a href="#">About Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="sncc-section aboutuspage-container">
        <div class="uk-container">
            <div class="aboutuspage-content">
                <?php the_content();?>
            </div>
        </div>
    </section>

    <section class="invitation__section sncc-section">
        <div class="uk-container ">
            <div>
                <div class="invitation__header">
                    <h2><?php echo get_field('howandwhy_title', 'option'); ?></h2>
                    <p><?php echo get_field('howandwhy_slug', 'option'); ?></p>
                </div>
                <div class="invitation__content">
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
                </div>
            </div>
        </div>
    </section>

    <section class="ourpurpose__section sncc-section">
        <div class="uk-container">
            <div uk-slider>
                <div class="ourpurpose-header">
                    <div class="ourpurpose-header-content">
                        <span><?php echo get_field('our_purpose_slug', 'option'); ?></span>
                        <h2><?php echo get_field('our_purpose_title', 'option'); ?></h2>
                    </div>
                    <div class="ourpurpose-navcontainer">
                        <a class=" uk-hidden-hover previous-item ourpurpose-nav" href uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class=" uk-hidden-hover next-item ourpurpose-nav" href uk-slidenav-next
                            uk-slider-item="next"></a>
                    </div>
                </div>
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                    <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
                        <?php $ourpurpose_items = get_field('our_purpose_items', 'option');
                       if (is_array($ourpurpose_items) || is_object($ourpurpose_items) && !empty($ourpurpose_items)) {
            foreach ($ourpurpose_items as $ourpurpose_item) {
                       ?>
                        <div>
                            <div class="ourpurpose-item-container">
                                <img src="<?php echo $ourpurpose_item['our_purpose_item_img']['url'] ?>" />
                                <div class="ourpurpose-item-content">
                                    <div>
                                        <img src="<?php echo $ourpurpose_item['our_purpose_item_icon']['url'] ?>" />
                                    </div>
                                    <h4><?php echo $ourpurpose_item['our_purpose_item_title']?></h4>
                                </div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();