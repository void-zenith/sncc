<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('Sponsors_Field')) {

    class Sponsors_Field
    {
        function __construct()
        {
            add_action('init', array($this, 'dat_sponsors_init'));
            add_action('init', array($this, 'create_sponsors_taxonomy'), 0);
        }

        function dat_sponsors_init()
        {
            $labels = array(
                'name'                     => _x('Sponsors', 'Post type general name', 'textdomain'),
                'singular_name'            => _x('Sponsor', 'Post type singular name', 'textdomain'),
                'menu_name'                => _x('SNCC-Sponsors', 'Admin Menu text', 'textdomain'),
                'name_admin_bar'           => _x('Sponsor', 'Add New on Toolbar', 'textdomain'),
                'add_new'                  => __('Add Sponsor', 'textdomain'),
                'add_new_item'             => __('Add New Sponsor', 'textdomain'),
                'new_item'                 => __('New Sponsor', 'textdomain'),
                'edit_item'                => __('Edit Sponsor', 'textdomain'),
                'view_item'                => __('View Sponsor', 'textdomain'),
                'all_items'                => __('All Sponsors', 'textdomain'),
                'search_items'             => __('Search Sponsors', 'textdomain'),
                'parent_item_colon'        => __('Parent Sponsors:', 'textdomain'),
                'not_found'                => __('No Sponsors found.', 'textdomain'),
                'not_found_in_trash'       => __('No Sponsors found in Trash.', 'textdomain'),
                'featured_image'           => _x('Sponsor Logo', 'Overrides the “Featured Image” phrase for this post type.', 'textdomain'),
                'set_featured_image'       => _x('Set sponsor logo', 'textdomain'),
                'remove_featured_image'    => _x('Remove sponsor logo', 'textdomain'),
                'use_featured_image'       => _x('Use as sponsor logo', 'textdomain'),
                'archives'                 => _x('Sponsor archives', 'textdomain'),
                'insert_into_item'         => _x('Insert into sponsor', 'textdomain'),
                'uploaded_to_this_item'    => _x('Uploaded to this sponsor', 'textdomain'),
                'filter_items_list'        => _x('Filter Sponsors list', 'textdomain'),
                'items_list_navigation'    => _x('Sponsors list navigation', 'textdomain'),
                'items_list'               => _x('Sponsors list', 'textdomain'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'exclude_from_search'=> true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'sponsor'),
                'show_in_nav_menus'  => true,
                'capability_type'    => 'post',
                'capabilities'       => array(
                    'edit_post'          => 'update_core',
                    'read_post'          => 'update_core',
                    'delete_post'        => 'update_core',
                    'edit_posts'         => 'update_core',
                    'edit_others_posts'  => 'update_core',
                    'delete_posts'       => 'update_core',
                    'publish_posts'      => 'update_core',
                    'read_private_posts' => 'update_core'
                ),
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array('title', 'editor', 'thumbnail'),
                'menu_icon'          => 'dashicons-heart'
            );

            register_post_type('sponsor', $args);
        }

        function create_sponsors_taxonomy()
        {
            $labels = array(
                'name'              => _x('Sponsors', 'taxonomy general name'),
                'singular_name'     => _x('Sponsor', 'taxonomy singular name'),
                'search_items'      => __('Search Sponsors'),
                'all_items'         => __('All Sponsors'),
                'parent_item'       => __('Parent Sponsor'),
                'parent_item_colon' => __('Parent Sponsor:'),
                'edit_item'         => __('Edit Sponsor'),
                'update_item'       => __('Update Sponsor'),
                'add_new_item'      => __('Add New Sponsor'),
                'new_item_name'     => __('New Sponsor Name'),
                'menu_name'         => __('Sponsors Category'),
                'back_to_items'     => __('Back to Sponsors'),
                'not_found'         => __('No Sponsors with that name found')
            );

            register_taxonomy('sponsor-category', array('sponsor'), array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'public'            => false,
                'show_admin_column' => true,
                'show_in_rest'      => true,
                'query_var'         => true,
                'rewrite'           => array('slug' => 'sponsor-category'),
            ));
        }
    }

    new Sponsors_Field();
}