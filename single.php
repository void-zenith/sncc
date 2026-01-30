<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sncc
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
		while ( have_posts() ) :
			the_post();
		endwhile; // End of the loop.
		?>
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
</main><!-- #main -->
<?php
get_footer();