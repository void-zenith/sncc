<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sncc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <div class="top-header">
            <div class="uk-container">
                <div class="top-header-container">
                    <p>Scarborough Nepali Cricket Club</p>
                    <ul class="followus-header">
                        <li class="social-item"> <a class="social-icon" href="#" uk-icon="icon: facebook"></a>
                        </li>
                        <li class="social-item"> <a class="social-icon" href="##" uk-icon="icon: instagram"></a>
                        </li>
                        <li class="social-item"> <a class="social-icon" href="#" uk-icon="icon: tiktok"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="uk-container">
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <?php
			the_custom_logo();
			 ?>
                </div><!-- .site-branding -->
                <nav id="site-navigation" class="main-navigation">
                    <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'main_menu'
				)
			);
			?>
                </nav><!-- #site-navigation -->
                <a href="#" class="header_button">
                    Join our team
                </a>
            </header><!-- #masthead -->
        </div>