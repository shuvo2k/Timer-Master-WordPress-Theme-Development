<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="<?php if (is_user_logged_in()) {
    echo 'top30';
} ?> navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="<?php echo esc_url(site_url()); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                        </a> 
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'primary_menu',
                                'menu_class' => 'nav navbar-nav navbar-right',
                                'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                'container' => 'div',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'bs-example-navbar-collapse-1',
                                //'menu_class' => 'navbar-nav mr-auto',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                                'link_after' => '<span class="caret"></span>',
                            ]);
                        ?>
                       <!--  <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html" >Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="service.html">Service</a></li>                           
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="blog-right-sidebar.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul> -->
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        