<?php

/*
initial theme support
*/
function theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('custom_thumb', 305, 255, true);
}

add_action('after_setup_theme', 'theme_support');

/*
Making dynamic style and scripts
*/

function cs_js()
{
    //css
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/plugins/bootstrap/bootstrap.min.css', null, 'v4.0');
    wp_enqueue_style('ionicons', get_template_directory_uri().'/assets/plugins/ionicons/ionicons.min.css', null, 'v1.0');
    wp_enqueue_style('animate-css', get_template_directory_uri().'/assets/plugins/animate-css/animate.css', null, 'v1.0');
    wp_enqueue_style('slidercss', get_template_directory_uri().'/assets/plugins/slider/slider.css', null, 'v1.0');
    wp_enqueue_style('owlcarousel', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.css', null, 'v1.0');
    wp_enqueue_style('owlthemecarousel', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.theme.css', null, 'v1.0');
    wp_enqueue_style('fancybox', get_template_directory_uri().'/assets/plugins/facncybox/jquery.fancybox.css', null, 'v1.0');
    wp_enqueue_style('maincss', get_template_directory_uri().'/assets/css/style.css', null, 'v1.0');
    wp_enqueue_style('stylecss', get_stylesheet_uri());

    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/plugins/jQurey/jquery.min.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('jquery-form', get_template_directory_uri().'/assets/plugins/form-validation/jquery.form.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('owljs', get_template_directory_uri().'/assets/plugins/owl-carousel/owl.carousel.min.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/plugins/bootstrap/bootstrap.min.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('wowjs', get_template_directory_uri().'/assets/plugins/wow-js/wow.min.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('sliderjs', get_template_directory_uri().'/assets/plugins/slider/slider.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('sliderjs', get_template_directory_uri().'/assets/plugins/facncybox/jquery.fancybox.js', 'jquery', true, 'v1.0');
    wp_enqueue_script('sliderjs', get_template_directory_uri().'/assets/js/main.js', 'jquery', true, 'v1.0');
}

add_action('wp_enqueue_scripts', 'cs_js');

//register menu
register_nav_menus([
    'primary_menu' => 'primary menu',
    'footer_menu' => 'footer menu',
]);

/**
 * Register Custom Navigation Walker.
 */
function register_navwalker()
{
    if (!file_exists(get_template_directory().'/classes/class-wp-bootstrap-navwalker.php')) {
        // File does not exist... return an error.
        return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
    } else {
        // File exists... require it.
        require_once get_template_directory().'/classes/class-wp-bootstrap-navwalker.php';
    }
}
add_action('after_setup_theme', 'register_navwalker');
