<?php
// Register Widgets
add_action('widgets_init', 'tw_neuron_sidebar_register');
function tw_neuron_sidebar_register() {
    register_sidebar(
        array(
            'name' => esc_html__('Footer Widgets One', 'tw_neuron'),
            'id' => 'footer-1',
            'description' => 'Customize your footer one elements',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Widgets Two', 'tw_neuron'),
            'id' => 'footer-2',
            'description' => 'Customize your footer two elements',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Widgets Three', 'tw_neuron'),
            'id' => 'footer-3',
            'description' => 'Customize your footer three elements',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name' => esc_html__('Footer Widgets four', 'tw_neuron'),
            'id' => 'footer-4',
            'description' => 'Customize your footer four elements',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>', 
        )
    );
}