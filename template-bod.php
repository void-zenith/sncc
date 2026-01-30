<?php

/**
 * Template Name: bod
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
            </div>
            <div class="genneralbanner-text">
                <h1>Board Of Directors</h1>
            </div>
        </div>
        <div class="genneralbanner-breadcrumbs ">
            <div class="uk-container">
                <div class="breadcrumbs-container">
                    <ul class="breadcrumbs-lists">
                        <li class="breadcrumbs-item"><a href="/home">Home</a>
                        </li>
                        <li class="breadcrumbs-item"><a href="#">Board of Directors</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ourteam-section sncc-section">
        <div class="uk-container">
            <div class="ourteam-container">
                <div class="boardof-directors " id="boardofdirector">
                    <div class="bod-container">
                        <div class="tm-lists  uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-medium" uk-grid>
                            <?php 
                                                    $team_args = array('post_type' => 'team', 'posts_per_page' => 15, 'order' => 'DESC', 'post_status' => 'publish');
                                $team_query = new WP_Query($team_args);
                            if ($team_query->have_posts()) {
                                    while ($team_query->have_posts()) {
                                        $team_query->the_post();
                                        $pid = get_the_ID();
                                        $skill = get_field('skill', $pid);
                                        $interest = get_field('interest', $pid);
                                        $team_categories = get_the_terms($pid, 'team-category');
                                        $sub_categories = [];

                                        if (!empty($team_categories) && !is_wp_error($team_categories)) {
                                            foreach ($team_categories as $index => $term) {
                                                if ($index === 0) continue; // skip first term
                                                $sub_categories[] = $term->name;
                                            }
                                        }
                                       
                            // Initialize flag
                                $show_container = false;

                                if (!empty($team_categories) && !is_wp_error($team_categories)) {
                                    foreach ($team_categories as $category) {
                                        if ($category->slug === 'executive-team') {  // Compare using slug
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
                                <a href="<?php the_permalink(); ?>" class="bod-item teamprofile-item">
                                    <h1><?php $team_categories;?></h1>
                                    <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('large', [
                                            'class' => '',
                                            'alt'   => get_the_title()
                                        ]); ?>
                                    <?php else : ?>
                                    <div class="profile-avatar__placeholder">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/Assets/image/avatar.jpg" />
                                    </div>
                                    <?php endif; ?>
                                    <div class="teamprofile-content">
                                        <h3 class="teamcard-name"><?php the_title();?></h3>
                                        <?php if (!empty($sub_categories)) : ?>
                                        <p class="teamcard-position"><?php echo implode(', ', $sub_categories); ?></p>
                                        <?php endif; ?>
                                        <!-- <?php if (!empty($skill)) { ?>
                                        <p><span>Skills:</span> <?php echo $skill; ?></p>
                                        <?php }?>
                                        <?php if (!empty($interest)) { ?>
                                        <p><span>Interests:</span><?php echo $interest; ?></p>
                                        <?php }?> -->
                                        <div class="team-link__container"><span uk-icon="arrow-right"></span></div>
                                    </div>
                                </a>
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