<?php
/**
* Header Template
*
* @package _bourbon 2.0.0
*/ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class('theme-child-bourbon theme-parent-dash'); ?>>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="site-wrap" class="hfeed">
        <header id="site-header" role="banner">

            <?php if (is_active_sidebar('widget-header')): ?>
                <aside id="header-widget" role="complementary">
                    <div class="container">
                        <?php dynamic_sidebar('widget-header'); ?>
                    </div>
                </aside>
            <?php endif; ?>

            <div id="header-masthead">
                <div class="container">
                  <button class="toggle-menu" data-toggle="toggle-menu" data-target="#header-menu"><span>MENU</span></button>

                    <div id="header-brand">
                        <?php

                        if ( has_custom_logo() ) :
                            the_custom_logo();
                        else : ?>
                            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), '_dash' ); ?>" rel="home">
                                <?php echo sprintf('<h1 class="site-title">%s</h1>', get_bloginfo( 'name' ) ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php
                        $args = array(
                            'theme_location' => 'menu-main',
                            'menu' => '',
                            'container' => 'nav',
                            'container_class' => '',
                            'container_id' => 'header-menu',
                            'menu_class' => '',
                            'menu_id' => '',
                            'echo' => true,
                            'fallback_cb' => 'wp_page_menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '',
                            'link_after' => '',
                            'items_wrap' => '<ul id="%1$s" class="menu %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => ''
                        );
                        wp_nav_menu( $args );
                    ?>

                </div>
            </div>
        </header>
        <main id="site-content">
