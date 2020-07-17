<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- PAGE -->
<div id="page" class="site transition-margin-left js-transition-left">

    <!-- SIDENAV -->
    <div class="sidenav js-sidenav">
        <div class="sidenav__wrap">
            <div class="sidenav__menu">
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 1,
                'walker'          => new VEN_navwalker()
            ));
            ?>
            </div>
        </div>
    </div>
    <!-- END SIDENAV -->

    <!-- HEADER -->
	<header class="header fixed-top transition-margin-left js-transition-left">
        <div class="sidebar-toggle">
            <div class="sidebar-toggle__button js-toggle-sidenav open">
                <span></span>
                <span style="width: 11px"></span>
                <span></span>
            </div>
            <span class="sidebar-toggle__text font--chunkfive js-sidebar-toggle_text" data-close="Close" data-open="<?php echo get_theme_mod('header_menu_text'); ?>">
                <?php echo get_theme_mod('header_menu_text'); ?>
            </span>
        </div>
        <nav class="navbar pt-0 pb-0">
            <div class="navbar__logo">
                <a href="<?php echo site_url(); ?>" >
                    <img src="<?php echo get_theme_mod('ven_header_logo'); ?>" />
                </a>
            </div>
            <div class="navbar__contact">
                <img src="<?php echo get_theme_mod('header_contact_image'); ?>" />
                <div class="navbar__contact__text">
                    <?php echo get_theme_mod('header_contact_text'); ?>
                </div>
                <div class="navbar__contact__phone font-chunkfive">
                    <?php echo get_theme_mod('header_contact_phone'); ?>
                </div>
            </div>
            <div class="navbar__button">
                <a href="<?php echo get_theme_mod('header_button_url'); ?>" class="link--underline link--underline--white text-white font-chunkfive">
                    <?php echo get_theme_mod('header_button_text'); ?>
                </a>
            </div>
        </nav>

	</header>
    <!-- END HEADER -->

    <!-- CONTENT -->
	<div id="content">