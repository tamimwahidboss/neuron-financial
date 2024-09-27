<?php
/**
 * Neuron Finance Theme functions and definitions
 * Proper way to enqueue scripts and styles.
 */
function tw_neuron_assets() {
    // Styles
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.5.1', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '4.7.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.2.0', 'all' );

    // Google Fonts
    wp_enqueue_style( 'google-fonts-titillium', 'https://fonts.googleapis.com/css?family=Titillium+Web:300,300i,400,400i,600,600i,700,700i,900', array(), null );
    wp_enqueue_style( 'google-fonts-pt-serif', 'https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), null );

    // Bootstrap 3.3.7 CSS from CDN
    wp_enqueue_style( 'bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );

    // Scripts
    wp_enqueue_script( 'jquery' ); // Use default WordPress jQuery

    // Bootstrap 3.3.7 JS from CDN
    wp_enqueue_script( 'bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );

    // Other Scripts
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), '1.2.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '1.3.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tw_neuron_assets' );
