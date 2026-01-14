<?php
defined('ABSPATH') or die('No script kiddies please!!');

if (!class_exists('classInitial')) {

    class classInitial
    {
        function __construct()
        {
            $this->mainFunction();
            add_action('pre_get_posts', array($this, 'dat_include_custom_post_types_in_search_results'));
        }
        /**
         * main function 
         */
        function mainFunction()
        {
            /**
             * including other related classes
             */
            require get_template_directory() . '/inc/classes/class-thumbnail.php';  
            require get_template_directory() . '/inc/classes/class-team.php';   /* class team post type */
            require get_template_directory() . '/inc/classes/class-program.php';   /* class program post type */
            require get_template_directory() . '/inc/classes/class-sponsor.php';   /* class sponsor post type */

        }

        /**
         * For searching only post type post
         * 
         */
        function dat_include_custom_post_types_in_search_results($query)
        {
            if ($query->is_main_query() && $query->is_search() && !is_admin()) {
                $query->set('post_type', array('post'));
            }
        }

    }
    new classInitial();
}