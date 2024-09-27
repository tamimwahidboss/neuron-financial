<?php
// Start Theme Customizer
function tw_neuron_customizer_register($wp_customize){
    // Panel One Customizer
    $wp_customize->add_panel('tw_neuron_panel_one', array(
        'title' => esc_html__('Header Section', 'tw_neuron'),
        'priority' => 10,
    ));
    // Top Header Customizer
    $wp_customize->add_section('tw_neuron_top_header', array(
        'title' => esc_html__('Top Header', 'tw_neuron'),
        'description' => esc_html__('If you want to modify top header elements, you can do it.', 'tw_neuron'),
        'panel' => 'tw_neuron_panel_one',
    ));
    // Top Header Number
    $wp_customize->add_setting('tw_neuron_topHead_num', array(
        'default' => '+880 123 456 789',
    ));
    $wp_customize->add_control('tw_neuron_topHead_num', array(
        'label' => esc_html__('Change Top Header Number', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_num',
        'section' => 'tw_neuron_top_header',
    ));
    // Top Header Email
    $wp_customize->add_setting('tw_neuron_topHead_email', array(
        'default' => 'suport@domain.com',
    ));
    $wp_customize->add_control('tw_neuron_topHead_email', array(
        'label' => esc_html__('Change Top Header Email', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_email',
        'section' => 'tw_neuron_top_header',
    ));
    // Facebook Social Link
    $wp_customize->add_setting('tw_neuron_topHead_fb', array(
        'default' => '#',
    ));
    $wp_customize->add_control('tw_neuron_topHead_fb', array(
        'label' => esc_html__('Change Facebook Link', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_fb',
        'section' => 'tw_neuron_top_header',
    ));
    // X Social Link
    $wp_customize->add_setting('tw_neuron_topHead_x', array(
        'default' => '#',
    ));
    $wp_customize->add_control('tw_neuron_topHead_x', array(
        'label' => esc_html__('Change X Link', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_x',
        'section' => 'tw_neuron_top_header',
    ));
    // Linkedin Social Link
    $wp_customize->add_setting('tw_neuron_topHead_lk', array(
        'default' => '#',
    ));
    $wp_customize->add_control('tw_neuron_topHead_lk', array(
        'label' => esc_html__('Change X Link', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_lk',
        'section' => 'tw_neuron_top_header',
    ));
    // Google Social Link
    $wp_customize->add_setting('tw_neuron_topHead_gg', array(
        'default' => '#',
    ));
    $wp_customize->add_control('tw_neuron_topHead_gg', array(
        'label' => esc_html__('Change Google Link', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_gg',
        'section' => 'tw_neuron_top_header',
    ));
    // Tumblr Social Link
    $wp_customize->add_setting('tw_neuron_topHead_tumblr', array(
        'default' => '#',
    ));
    $wp_customize->add_control('tw_neuron_topHead_tumblr', array(
        'label' => esc_html__('Change Google Link', 'tw_neuron'),
        'setting' => 'tw_neuron_topHead_tumblr',
        'section' => 'tw_neuron_top_header',
    ));
    // Main Header Customizer
    $wp_customize->add_section('tw_neuron_main_header', array(
        'title' => esc_html__('Main Header', 'tw_neuron'),
        'description' => esc_html__('If you want to modify main header elements, you can do it.', 'tw_neuron'),
        'panel' => 'tw_neuron_panel_one',
    ));
    // Theme Logo
    $wp_customize->add_setting( 'tw_neuron_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'tw_neuron_logo', array(
        'label' => esc_html__('Logo Upload', 'tw_neuron'),
        'description' => esc_html__('If you want to change theme logo, you can do it.', 'tw_neuron'),
        'setting' => 'tw_neuron_logo',
        'section' => 'tw_neuron_main_header',
    )));



    // Panel Block Customizer
    $wp_customize->add_panel('tw_neuron_panel_block', array(
        'title' => esc_html__('Section Block', 'tw_neuron'),
        'priority' => 10,
    ));

    // Intro Intro Area
    $wp_customize->add_section('tw_neuron_intro_block', array(
        'title' => esc_html__('Intro Section', 'tw_neuron'),
        'description' => esc_html__('If you want to modify Block Content Area elements, you can do it.', 'tw_neuron'),
        'panel' => 'tw_neuron_panel_block',
    ));
    // Intro heading
    $wp_customize->add_setting('tw_neuron_intro_block_h2', array(
        'description' => esc_html__('If you want to modify Block Content Area elements, you can do it.', 'tw_neuron'),
        'default' => 'Welcome to the Neuron Finance',
    ));
    $wp_customize->add_control('tw_neuron_intro_block_h2', array(
        'label' => esc_html__('Intro Heading', 'tw_neuron'),
        'setting' => 'tw_neuron_block_content_heading',
        'section' => 'tw_neuron_intro_block',
    ));
    // Intro heading
    $wp_customize->add_setting('tw_neuron_intro_block_p', array(
        'description' => esc_html__('If you want to modify Block Content Area elements, you can do it.', 'tw_neuron'),
        'default' => 'Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.',
    ));
    $wp_customize->add_control('tw_neuron_intro_block_p', array(
        'label' => esc_html__('Intro Description', 'tw_neuron'),
        'type' => 'textarea',
        'setting' => 'tw_neuron_intro_block_p',
        'section' => 'tw_neuron_intro_block',
    ));





    // 1st Block Content Area
    $wp_customize->add_section('tw_neuron_block_content_area', array(
        'title' => esc_html__('Home Block Content Area', 'tw_neuron'),
        'description' => esc_html__('If you want to modify 2nd Block Content Area elements, you can do it.', 'tw_neuron'),
        'panel' => 'tw_neuron_panel_block',
    ));
    // 1st Block Content Heading
    $wp_customize->add_setting('tw_neuron_block_content_heading', array(
        'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
    ));
    $wp_customize->add_control('tw_neuron_block_content_heading', array(
        'label' => esc_html__('Change Block Content Area Heading', 'tw_neuron'),
        'setting' => 'tw_neuron_block_content_heading',
        'section' => 'tw_neuron_block_content_area',
    ));
    // 1st Block Content 1st Paragraph
    $wp_customize->add_setting('tw_neuron_block_content_paraOne', array(
        'default' => 'Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.',
    ));
    $wp_customize->add_control('tw_neuron_block_content_paraOne', array(
        'label' => esc_html__('Change Block Content Area 1st Paragraph', 'tw_neuron'),
        'setting' => 'tw_neuron_block_content_paraOne',
        'section' => 'tw_neuron_block_content_area',
    ));
    // 1st Block Content 2nd Paragraph
    $wp_customize->add_setting('tw_neuron_block_content_paraTwo', array(
        'default' => 'Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics.',
    ));
    $wp_customize->add_control('tw_neuron_block_content_paraTwo', array(
        'label' => esc_html__('Change Block Content Area 2nd Paragraph', 'tw_neuron'),
        'setting' => 'tw_neuron_block_content_paraTwo',
        'section' => 'tw_neuron_block_content_area',
    ));
    // 1st Block Content Area Image
    $wp_customize->add_setting( 'tw_neuron_block_content_image',
        array(
            'default' => get_template_directory_uri(). '/assets/img/homepageblock.jpg',
        )
        );
    $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'tw_neuron_block_content_image', array(
        'label' => esc_html__('Featured Images', 'tw_neuron'),
        'description' => esc_html__('If you want to change block content image, you can do it.'),
        'setting' => 'tw_neuron_block_content_image',
        'section' => 'tw_neuron_block_content_area',
    )) );





    // 2nd Block Content Area
    $wp_customize->add_section('tw_neuron_2nd_block', array(
        'title' => esc_html__('2nd Block Content Area', 'tw_neuron'),
        'description' => esc_html__('If you want to modify 2nd Block Content Area elements, you can do it.', 'tw_neuron'),
        'panel' => 'tw_neuron_panel_block',
    ));
    // 2nd Block Content Area Image
    $wp_customize->add_setting( 'tw_neuron_2ndBlock_img',
        array(
            'default' => get_template_directory_uri(). '/assets/img/homepageblock2.png',
        )
        );
    $wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'tw_neuron_2ndBlock_img', array(
        'label' => esc_html__('Featured Images', 'tw_neuron'),
        'description' => esc_html__('If you want to change block content image, you can do it.'),
        'setting' => 'tw_neuron_2ndBlock_img',
        'section' => 'tw_neuron_2nd_block',
    )) );
    // 2nd Block Content Heading
    $wp_customize->add_setting('tw_neuron_2ndBlock_heading', array(
        'default' => 'A Finance Agency Crafting Beautiful & Engaging Online Experiences',
    ));
    $wp_customize->add_control('tw_neuron_2ndBlock_heading', array(
        'label' => esc_html__('Change Block Content Area Heading', 'tw_neuron'),
        'setting' => 'tw_neuron_2ndBlock_heading',
        'section' => 'tw_neuron_2nd_block',
    ));
    // 2nd Block Content 1st Paragraph
    $wp_customize->add_setting('tw_neuron_2ndBlock_paraOne', array(
        'default' => 'Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.',
    ));
    $wp_customize->add_control('tw_neuron_2ndBlock_paraOne', array(
        'label' => esc_html__('Change Block Content Area 1st Paragraph', 'tw_neuron'),
        'setting' => 'tw_neuron_2ndBlock_paraOne',
        'section' => 'tw_neuron_2nd_block',
    ));
    // 2nd Block Content 2nd Paragraph
    $wp_customize->add_setting('tw_neuron_2ndBlock_paraTwo', array(
        'default' => 'Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics.',
    ));
    $wp_customize->add_control('tw_neuron_2ndBlock_paraTwo', array(
        'label' => esc_html__('Change Block Content Area 2nd Paragraph', 'tw_neuron'),
        'setting' => 'tw_neuron_2ndBlock_paraTwo',
        'section' => 'tw_neuron_2nd_block',
    ));
    



    // Panel One Customizer for Footer Section
    $wp_customize->add_panel('tw_neuron_panel_ft', array(
        'title'    => esc_html__('Footer Section', 'tw_neuron'),
        'priority' => 10,
    ));
    
    // Start Brand Customizer Section under Footer Section Panel
    $wp_customize->add_section('tw_neuron_panel_brand', array(
        'title'    => esc_html__('Brand', 'tw_neuron'),
        'panel'    => 'tw_neuron_panel_ft',
        'priority' => 1,
    ));
    
    // Add Customizer Repeater Setting for the Brand Section
    $wp_customize->add_setting('customizer_repeater_brand', array(
        'sanitize_callback' => 'customizer_repeater_sanitize',
    ));

    
    // Start Footer Customizer
    $wp_customize->add_section('tw_neuron_panel_ft_sec', array(
        'title' => esc_html__( 'Footer Section', 'tw_neuron' ),
        'panel' => 'tw_neuron_panel_ft',
    ));
    $wp_customize->add_setting('tw_neuron_copyright', array(
        'default' => esc_attr__('Copyright@ 2024 Neuron Finance Inc. All Rights Reserved. Beautiful WordPress Theme Development By <a href="https://wordpress10ms.com/">WordPress10MS</a>', 'tw_neuron')
    ));
    $wp_customize->add_control('tw_neuron_copyright', array(
        'label' => esc_html__('Change Footer Copyright text', 'tw_neuron'),
        'description' => esc_html__('If you want to edit footer text, you can do it.', 'tw_neuron'),
        'setting' => 'tw_neuron_copyright',
        'section' => 'tw_neuron_panel_ft_sec',
    ));
}

add_action('customize_register', 'tw_neuron_customizer_register');

