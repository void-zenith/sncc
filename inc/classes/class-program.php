<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('Programs_Field')) {

    class Programs_Field
    {
        function __construct()
        {
            add_action('init', array($this, 'dat_programs_init'));
            add_action('init', array($this, 'create_programs_taxonomy'), 0);
        }

        function dat_programs_init()
        {
            $labels = array(
                'name'                     => _x('Programs', 'Post type general name', 'textdomain'),
                'singular_name'            => _x('Program', 'Post type singular name', 'textdomain'),
                'menu_name'                => _x('SNCC-Programs', 'Admin Menu text', 'textdomain'),
                'name_admin_bar'           => _x('Program', 'Add New on Toolbar', 'textdomain'),
                'add_new'                  => __('Add Program', 'textdomain'),
                'add_new_item'             => __('Add New Program', 'textdomain'),
                'new_item'                 => __('New Program', 'textdomain'),
                'edit_item'                => __('Edit Program', 'textdomain'),
                'view_item'                => __('View Program', 'textdomain'),
                'all_items'                => __('All Programs', 'textdomain'),
                'search_items'             => __('Search Programs', 'textdomain'),
                'parent_item_colon'        => __('Parent Programs:', 'textdomain'),
                'not_found'                => __('No Programs found.', 'textdomain'),
                'not_found_in_trash'       => __('No Programs found in Trash.', 'textdomain'),
                'featured_image'           => _x('Program Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'textdomain'),
                'set_featured_image'       => _x('Set cover image', 'textdomain'),
                'remove_featured_image'    => _x('Remove cover image', 'textdomain'),
                'use_featured_image'       => _x('Use as cover image', 'textdomain'),
                'archives'                 => _x('Program archives', 'textdomain'),
                'insert_into_item'         => _x('Insert into program', 'textdomain'),
                'uploaded_to_this_item'    => _x('Uploaded to this program', 'textdomain'),
                'filter_items_list'        => _x('Filter Programs list', 'textdomain'),
                'items_list_navigation'    => _x('Programs list navigation', 'textdomain'),
                'items_list'               => _x('Programs list', 'textdomain'),
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'exclude_from_search'=> true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array('slug' => 'program'),
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
                'menu_icon'          => 'dashicons-welcome-learn-more'
            );

            register_post_type('program', $args);
        }

        function create_programs_taxonomy()
        {
            $labels = array(
                'name'              => _x('Programs', 'taxonomy general name'),
                'singular_name'     => _x('Program', 'taxonomy singular name'),
                'search_items'      => __('Search Programs'),
                'all_items'         => __('All Programs'),
                'parent_item'       => __('Parent Program'),
                'parent_item_colon' => __('Parent Program:'),
                'edit_item'         => __('Edit Program'),
                'update_item'       => __('Update Program'),
                'add_new_item'      => __('Add New Program'),
                'new_item_name'     => __('New Program Name'),
                'menu_name'         => __('Programs Category'),
                'back_to_items'     => __('Back to Programs'),
                'not_found'         => __('No Programs with that name found')
            );

            register_taxonomy('program-category', array('program'), array(
                'hierarchical'      => true,
                'labels'            => $labels,
                'show_ui'           => true,
                'public'            => false,
                'show_admin_column' => true,
                'show_in_rest'      => true,
                'query_var'         => true,
                'rewrite'           => array('slug' => 'program-category'),
            ));
        }
    }

    new Programs_Field();
}