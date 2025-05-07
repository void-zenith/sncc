<?php

/**
 * Template Name: teams
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
                <h1>Our Team</h1>
            </div>
        </div>
        <div class="genneralbanner-breadcrumbs ">
            <div class="uk-container">
                <div class="breadcrumbs-container">
                    <ul class="breadcrumbs-lists">
                        <li class="breadcrumbs-item"><a href="/home">Home</a>
                        </li>
                        <li class="breadcrumbs-item"><a href="#">Our Team</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ourteam-section ">
        <div class="uk-container">
            <div class="ourteam-container">
                <div class="boardof-directors sncc-section-t" id="boardofdirector">
                    <h2>Board Of Directors</h2>
                    <div class="bod-container">
                        <div class="tm-lists  uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
                            <?php 
                                                    $team_args = array('post_type' => 'team', 'posts_per_page' => 15, 'order' => 'DESC', 'post_status' => 'publish');
                                $team_query = new WP_Query($team_args);
                            if ($team_query->have_posts()) {
                                    while ($team_query->have_posts()) {
                                        $team_query->the_post();

                                        $pid = $POST->ID;
                                        $skill = get_field('skill', $pid);
                                        $interest = get_field('interest', $pid);
                                        $team_categories = get_the_terms($pid, 'team-category');
                            // Initialize flag
                                $show_container = false;

                                if (!empty($team_categories) && !is_wp_error($team_categories)) {
                                    foreach ($team_categories as $category) {
                                        if ($category->slug === 'board-of-director') {  // Compare using slug
                                            $show_container = true;
                                            break;
                                        }
                                        if ($category->slug === 'team-member') {  // Hide if category is "team-member"
                                            $show_container = false;
                                            break;
                                        }
                                    }
                                }

                                // Display only if the category is "board-of-director"
                                if ($show_container) {
                                ?>
                            <div>
                                <div class="bod-item teamprofile-item">
                                    <?php echo dat_thumbnail_big(); ?>
                                    <div class="teamprofile-content">
                                        <ul>
                                            <li><span>Name:</span> <span> <?php the_title();?></span></li>
                                            <?php if (!empty($skill)) { ?>
                                            <li><span>Skills:</span> <span> <?php echo $skill; ?></span></li>
                                            <?php }?>
                                            <?php if (!empty($interest)) { ?>
                                            <li><span>Interests:</span> <span> <?php echo $interest; ?></span></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }} } wp_reset_postdata();?>
                        </div>
                    </div>
                </div>

                <div class="teammembers sncc-section" id="teammebers">
                    <h2>Our Team Members</h2>
                    <div class="tm-container">
                        <div class="tm-lists  uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
                            <?php 
                                                    $team_args = array('post_type' => 'team', 'posts_per_page' => 15, 'order' => 'DESC', 'post_status' => 'publish');
                                $team_query = new WP_Query($team_args);
                            if ($team_query->have_posts()) {
                                    while ($team_query->have_posts()) {
                                        $team_query->the_post();

                                        $pid = $POST->ID;
                                        $skill = get_field('skill', $pid);
                                        $interest = get_field('interest', $pid);
                                        $team_categories = get_the_terms($pid, 'team-category');
                            // Initialize flag
                                $show_container = false;

                                if (!empty($team_categories) && !is_wp_error($team_categories)) {
                                    foreach ($team_categories as $category) {
                                        if ($category->slug === 'board-of-director') {  // Compare using slug
                                            $show_container = false;
                                            break;
                                        }
                                        if ($category->slug === 'team-member') {  // Hide if category is "team-member"
                                            $show_container = true;
                                            break;
                                        }
                                    }
                                }

                                // Display only if the category is "board-of-director"
                                if ($show_container) {
                                ?>
                            <div>
                                <div class="bod-item teamprofile-item">
                                    <?php echo dat_thumbnail_big(); ?>
                                    <div class="teamprofile-content">
                                        <ul>
                                            <li><span>Name:</span> <span> <?php the_title();?></span></li>
                                            <?php if (!empty($skill)) { ?>
                                            <li><span>Skills:</span> <span> <?php echo $skill; ?></span></li>
                                            <?php }?>
                                            <?php if (!empty($interest)) { ?>
                                            <li><span>Interests:</span> <span> <?php echo $interest; ?></span></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }} } wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();