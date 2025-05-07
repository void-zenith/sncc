<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('Team_Field')) {

    class Team_Field
    {
        function __construct()
        {

            add_action('init', array($this, 'dat_our_team_init'));
            add_action('init', array($this, 'create_team_taxonomy'), 0);
        }

        function dat_our_team_init()
        {
            $labels = array(
                'name' => _x('Teams', 'Post type general name', 'textdomain'),
                'singular_name' => _x('Team', 'Post type singular name', 'textdomain'),
                'menu_name' => _x('SNCC-Team', 'Admin Menu text', 'textdomain'),
                'name_admin_bar' => _x('Team', 'Add New on Toolbar', 'textdomain'),
                'add_new' => __('Add  Team Member', 'textdomain'),
                'add_new_item' => __('Add New Team', 'textdomain'),
                'new_item' => __('New Team', 'textdomain'),
                'edit_item' => __('Edit Team', 'textdomain'),
                'view_item' => __('View Team', 'textdomain'), 
                'all_items' => __('All SNCC-Team', 'textdomain'),
                'search_items' => __('Search SNCC-Teams', 'textdomain'),
                'parent_item_colon' => __('Parent Teams:', 'textdomain'),
                'not_found' => __('No Team Member found.', 'textdomain'),
                'not_found_in_trash' => __('No Teams Member found in Trash.', 'textdomain'),
                'featured_image' => _x('SNCC-Team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
                'set_featured_image' => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'use_featured_image' => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
                'archives' => _x('Team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
                'insert_into_item' => _x('Insert into team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
                'uploaded_to_this_item' => _x('Uploaded to this team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
                'filter_items_list' => _x('Filter Teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
                'items_list_navigation' => _x('Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
                'items_list' => _x('Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
            );

            $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'team'),
                'show_in_nav_menus' => true,
                'capability_type' => 'post',
                'capabilities' => array(
                    'edit_post'          => 'update_core',
                    'read_post'          => 'update_core',
                    'delete_post'        => 'update_core',
                    'edit_posts'         => 'update_core',
                    'edit_others_posts'  => 'update_core',
                    'delete_posts'       => 'update_core',
                    'publish_posts'      => 'update_core',
                    'read_private_posts' => 'update_core'
                ),
                'has_archive' => true,
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title', 'editor', 'thumbnail'),
                'menu_icon' => 'dashicons-groups'
            );

            register_post_type('team', $args);
        }

        function create_team_taxonomy()
        {
            $labels = array(
                'name' => _x('Teams', 'taxonomy general name'),
                'singular_name' => _x('Team', 'taxonomy singular name'),
                'search_items' => __('Search Teams'),
                'all_items' => __('All Teams'),
                'parent_item' => __('Parent Team'),
                'parent_item_colon' => __('Parent Team:'),
                'edit_item' => __('Edit Team'),
                'update_item' => __('Update Team'),
                'add_new_item' => __('Add New Team'),
                'new_item_name' => __('New Team Name'),
                'menu_name' => __('Teams Category'),
                'back_to_items' => __('Back to Teams'),
                'not_found' => __('No Teams with that name found')
            );

            // Now register the taxonomy

            register_taxonomy('team-category', array('team'), array(
                'hierarchical' => true,
                'labels' => $labels,
                'show_ui' => true,
                'public' => false,
                'show_admin_column' => true,
                'show_in_rest' => true,
                'query_var' => true,
                'rewrite' => array('slug' => 'team-category'),
            ));
        }
    }
    new Team_Field();
}