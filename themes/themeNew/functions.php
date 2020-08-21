<?php

if( !defined(THEME_IMG_PATH)){
    define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assests' );
}


function load_style1(){

    wp_register_style('bootstrap', get_template_directory_uri().'/assests/css/bootstrap.min.css',array(),1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font', get_template_directory_uri().'/assests/css/font-awesome.min.css',array(),1,'all');
    wp_enqueue_style('font');

    wp_register_style('icon', get_template_directory_uri().'/assests/css/elegant-icons.css',array(),1,'all');
    wp_enqueue_style('icon');

    wp_register_style('jquery', get_template_directory_uri().'/assests/css/jquery-ui.min.css',array(),1,'all');
    wp_enqueue_style('jquery');

    wp_register_style('popup', get_template_directory_uri().'/assests/css/magnific-popup.css',array(),1,'all');
    wp_enqueue_style('popup');

    wp_register_style('font', get_template_directory_uri().'/assests/css/font-awesome.min.css',array(),1,'all');
    wp_enqueue_style('font');

    wp_register_style('carousel', get_template_directory_uri().'/assests/css/owl.carousel.min.css',array(),1,'all');
    wp_enqueue_style('carousel');

    wp_register_style('slicknav', get_template_directory_uri().'/assests/css/slicknav.min.css',array(),1,'all');
    wp_enqueue_style('slicknav');

    wp_register_style('style', get_template_directory_uri().'/assests/css/style.css',array(),1,'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts','load_style1');    


function load_script(){

    wp_register_script('jquery', get_template_directory_uri().'/assests/js/jquery-3.3.1.min.js','',1,true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri().'/assests/js/bootstrap.min.js','',1,true);
    wp_enqueue_script('bootstrap');

    wp_register_script('jquery-magnific', get_template_directory_uri().'/assests/js/jquery.magnific-popup.min.js','',1,true);
    wp_enqueue_script('jquery-magnific');

    wp_register_script('jquery-ui', get_template_directory_uri().'/assests/js/jquery-ui.min.js','',1,true);
    wp_enqueue_script('jquery-ui');

    wp_register_script('mixitup', get_template_directory_uri().'/assests/js/mixitup.min.js','',1,true);
    wp_enqueue_script('mixitup');

    wp_register_script('countdown', get_template_directory_uri().'/assests/js/jquery.countdown.min.js','',1,true);
    wp_enqueue_script('countdown');

    wp_register_script('slicknav', get_template_directory_uri().'/assests/js/jquery.slicknav.js','',1,true);
    wp_enqueue_script('slicknav');

    wp_register_script('carousel', get_template_directory_uri().'/assests/js/owl.carousel.min.js','',1,true);
    wp_enqueue_script('carousel');

    wp_register_script('nicescroll', get_template_directory_uri().'/assests/js/jquery.nicescroll.min.js','',1,true);
    wp_enqueue_script('nicescroll');

    wp_register_script('main', get_template_directory_uri().'/assests/js/main.js','',1,true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts','load_script');

