<?php

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'     => 'Home Page Settings',
    'menu_title'    => 'Home Page Settings',
    'menu_slug'     => 'home-page-settings',
    'capability'    => 'edit_posts',
    'icon_url'      => 'dashicons-admin-home',
    'redirect'      => false

  ));
}


if (function_exists('acf_add_options_page')) {

  acf_add_options_page(array(
    'page_title'     => 'Site Settings',
    'menu_title'    => 'Site Settings',
    'menu_slug'     => 'site-settings',
    'capability'    => 'edit_posts',
    'redirect'        => false
  ));
}


  