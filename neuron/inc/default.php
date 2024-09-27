<?php
// Theme setup
function tw_neuron_setup() {
    load_theme_textdomain( 'tw_neuron', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
	add_image_size('neuron_blog_thumb', 740, 520, true);
	add_theme_support('customize-selective-refresh-widgets');
    add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
    register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tw_neuron' ),
		)
	);
}
add_action('after_setup_theme', 'tw_neuron_setup');