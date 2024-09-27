<?php
function tw_neuron_custom_post() {
    register_post_type(
		'slides',
		array(
			'labels' => array(
				'name' => esc_html__('Slides', 'twAlstarPro'), 
				'singular_name' => esc_html__('Slide', 'tw_neuron'),
			),
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
			'public' => true,
			'show_ui' => true,
		)
		
	);
	register_post_type(
		'intros',
		array(
			'labels' => array(
				'name' => esc_html__('Intros', 'tw_neuron'), 
				'singular_name' => esc_html__('Intro', 'tw_neuron'),
			),
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'public' => true,
			'show_ui' => true,
		)
		
	);
	register_post_type(
		'services',
		array(
			'labels' => array(
				'name' => esc_html__('Services', 'tw_neuron'), 
				'singular_name' => esc_html__('Service', 'tw_neuron'),
			),
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
			'public' => true,
			'show_ui' => true,
		)
		
	);
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => esc_html__('Works', 'tw_neuron'), 
				'singular_name' => esc_html__('Work', 'tw_neuron'),
			),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
			'public' => true,
			'show_ui' => true,
		)
		
	);
	register_post_type(
		'works',
		array(
			'labels' => array(
				'name' => esc_html__('Works', 'tw_neuron'), 
				'singular_name' => esc_html__('Work', 'tw_neuron'),
			),
			'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes'),
			'public' => true,
			'show_ui' => true,
		)
		
	);
}
add_action('init', 'tw_neuron_custom_post');