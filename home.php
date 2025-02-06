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
                    <div class="uk-width-3-5">
                        <div class="aboutus-container" uk-parallax="start: 100%; end: 100%;">
                            <span>Who are we?</span>
                            <h2>Scarborough Nepali Cricket Club</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae est non neque
                                lacinia porttitor. Quisque euismod ac metus at euismod. Nulla ut nisl augue. Nullam
                                venenatis libero magna, sed auctor massa mollis quis. Maecenas imperdiet non nulla in
                                faucibus. Etiam consequat semper fringilla. Cras molestie, sapien a ultricies
                                efficiturna, sed auctor massa mollis quis. Maecenas imperdiet non nulla in faucibus.
                                Etiam consequat semper fringilla. Cras molestie, sapien a ultricies efficitur</p>
                            <a href="#" class="aboutus_btn">Join Us</a>
                        </div>
                    </div>
                    <div class="uk-width-2-5">
                        <div class="aboutus-imgcontainer">
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
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
    <section class="ourpresident__section sncc-section uk-background-fixed "
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/Assets/image/pres-bg.jpg);">
        <div class="ourpresident-content ">
            <div class="uk-container">
                <div>
                    <div class="uk-grid uk-grid-large" uk-height-match="target: > div > div">
                        <div class=" uk-width-1-2">
                            <div class="ourpresident__presimg">
                                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/pres1.jpg" />
                            </div>
                        </div>
                        <div class="uk-width-1-2">
                            <div class="ourpresident__container">
                                <span>Meet Our President</span>
                                <h3>Mr. Naresh Budhayer</h3>
                                <ul>
                                    <li><span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/Assets/image/trophy.png" /></span>
                                        <p>Represented Nepal at the 2014 ICC World Twenty20 tournament, 2014 ACC Premier
                                            League and 2011 ACC Under-19 Elite Cup</p>
                                    </li>
                                    <li><span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/Assets/image/trophy.png" /></span>
                                        <p>Represented Nepal at the 2014 ICC World Twenty20 tournament, 2014 ACC Premier
                                            League and 2011 ACC Under-19 Elite Cup</p>
                                    </li>
                                    <li><span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/Assets/image/trophy.png" /></span>
                                        <p>Represented Nepal at the 2014 ICC World Twenty20 tournament, 2014 ACC Premier
                                            League and 2011 ACC Under-19 Elite Cup</p>
                                    </li>
                                    <li><span> <img
                                                src="<?php echo get_template_directory_uri(); ?>/Assets/image/trophy.png" /></span>
                                        <p>Represented Nepal at the 2014 ICC World Twenty20 tournament, 2014 ACC Premier
                                            League and 2011 ACC Under-19 Elite Cup</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
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
                        <span>Our Purpose</span>
                        <h2>Why we do what we do?</h2>
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
                        <div>
                            <div class="ourpurpose-item-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
                                <div class="ourpurpose-item-content">
                                    <div>
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/Assets/image/creativity.png" />
                                    </div>
                                    <h4>Inspiring Innovation</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ourpurpose-item-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
                                <div class="ourpurpose-item-content">
                                    <div>
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/Assets/image/creativity.png" />
                                    </div>
                                    <h4>Inspiring Innovation</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ourpurpose-item-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
                                <div class="ourpurpose-item-content">
                                    <div>
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/Assets/image/creativity.png" />
                                    </div>
                                    <h4>Inspiring Innovation</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="ourpurpose-item-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
                                <div class="ourpurpose-item-content">
                                    <div>
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/Assets/image/creativity.png" />
                                    </div>
                                    <h4>Inspiring Innovation</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="invitation__section sncc-section">
        <div class="uk-container ">
            <div>
                <div class="invitation__header">
                    <h2>How and Why <br /> to join SNCC?</h2>
                    <p>Join and be part of our 50+ member committee to celebrate the game of cricket</p>
                </div>
                <div class="invitation__content">
                    <div class="uk-grid uk-grid-collapse ">
                        <div class="uk-width-1-3">
                            <div class="invitation__item">
                                <h4>Player Member Registration</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, laudantium? Inventore
                                    beatae fugiat enim. Pariatur, asperiores minus nulla cumque aperiam architecto atque
                                    quae placeat explicabo po?</p>
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="invitation__item">
                                <h4>Non Player Member Registration</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, laudantium? Inventore
                                    beatae fugiat enim. Pariatur, asperiores minus nulla cumque aperiam architecto atque
                                    quae placeat explicabo po?</p>
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="invitation__item">
                                <h4>Sponsor Registration</h4>
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, laudantium? Inventore
                                    beatae fugiat enim. Pariatur, asperiores minus nulla cumque aperiam architecto atque
                                    quae placeat explicabo po?</p>
                                <a href="#">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery__section sncc-section">
        <div class="uk-container">
            <div class="gallery__content">
                <h2>Gallery</h2>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-1-3">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img1.jpg" />
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img2.jpg" />
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/Assets/image/img3.jpg" />
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