<?php

/**
 * Template Name: contactus
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
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', [
                            'class' => '',
                            'alt'   => get_the_title()
                        ]); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/bg.jpg" />
                <?php endif; ?>
                <div class="genneralbanner-text">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="genneralbanner-breadcrumbs ">
                <div class="uk-container">
                    <div class="breadcrumbs-container">
                        <ul class="breadcrumbs-lists">
                            <li class="breadcrumbs-item"><a href="/home">Home</a>
                            </li>
                            <li class="breadcrumbs-item"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    <section class="section-contactuspage-section sncc-section">
        <div class="uk-container">
            <div class="uk-grid-medium uk-grid uk-child-width-1-3@s" uk-grid>
                <div>
                    <div class="eachcontact-info">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/location.png" />
                        </div>
                        <div>
                            <h3>Address:</h3>
                            <p><?php echo get_field('sncc_location', 'option'); ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="eachcontact-info">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/phone-call.png" />
                        </div>
                        <div>
                            <h3>Phone No:</h3>
                            <p><?php echo get_field('sncc_phone', 'option'); ?></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="eachcontact-info">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/mail.png" />
                        </div>
                        <div>
                            <h3>Email:</h3>
                            <p>s<?php echo get_field('sncc_location', 'option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section sncc-section-b ">
        <div class="uk-container">
            <div class="contact-container">
                <div class="uk-grid uk-grid-match uk-grid-collapse" uk-grid>
                    <div class="uk-width-1-2">
                        <div class="contact-form">
                            <h2>Get In Touch</h2>
                            <?php
                                $shortcode = get_field('contact_shortcode', 'option');
                                if ($shortcode) {
                                    echo do_shortcode($shortcode);
                                }
                                ?>
                        </div>
                    </div>
                    <div class="uk-width-1-2">
                        <div>
                            <?php
                                $iframe = get_field('sncc_google_map','option');
                                if (!empty($iframe)) {
                                    echo $iframe; // already trusted embed
                                }
                                ?>

                            <!-- <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.550275635042!2d-79.23759402369328!3d43.74066857109818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d0281502229b%3A0x39560370aa2e55d5!2s15%20Torrance%20Rd%2C%20Scarborough%2C%20ON!5e0!3m2!1sen!2sca!4v1740895045235!5m2!1sen!2sca"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();