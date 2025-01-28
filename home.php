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
                    <div class="hero__slideshow_item">
                        <img src="https://plus.unsplash.com/premium_photo-1676496046182-356a6a0ed002?q=80&w=2952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" uk-cover>
                    </div>
                    <div class="hero__slideshow_item">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" uk-cover>
                    </div>
                    <div class="hero__slideshow_item">
                        <img src="https://plus.unsplash.com/premium_photo-1666863909125-3a01f038e71f?q=80&w=2886&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="" uk-cover>
                    </div>
                </div>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href uk-slidenav-previous
                    uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href uk-slidenav-next
                    uk-slideshow-item="next"></a>

            </div>
            <div class="hero__section_header">
                <h1>One Team,<br /> One Dream</h1>
            </div>
        </div>
    </section>

    <section class="aboutus__section uk-section">
        <div class="uk-container">
            <div class="aboutus__content">
                <div uk-grid uk-height-match="target: > div ">
                    <div class="uk-width-3-5">
                        <div class="aboutus-container">
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
                            <div class="floating-img">
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

</main><!-- #main -->

<?php
get_footer();