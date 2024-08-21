<?php
function test(){
    wp_enqueue_style('project', get_stylesheet_uri()); // Enqueues the main stylesheet
    // Or if you're trying to add a specific CSS file:
    // wp_enqueue_style('project', get_stylesheet_directory_uri() . '/style.css');



    wp_enqueue_script('main.js', get_theme_file_uri('./js/main.js'), NULL, '1.0');
}
add_action('wp_enqueue_scripts', 'test');



//menu showing part

function myproject_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','myproject_features') ;









// Redirect to checkout after adding to cart
add_filter('woocommerce_add_to_cart_redirect', 'custom_redirect_after_add_to_cart');
function custom_redirect_after_add_to_cart($url) {
    // Change the URL to your checkout page URL
    $checkout_url = wc_get_checkout_url();
    return $checkout_url;
}



// hostel registration

function custom_post_types() {
    // Register Hostel Room Post Type
    register_post_type('hostel_room', [
        'label' => 'Hostel Rooms',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-building',
        'has_archive' => true,
    ]);

    // Register Student Profile Post Type
    register_post_type('student_profile', [
        'label' => 'Student Profiles',
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_icon' => 'dashicons-id',
        'has_archive' => true,
    ]);

    // Register Room Availability Taxonomy
    register_taxonomy('room_availability', 'hostel_room', [
        'label' => 'Room Availability',
        'rewrite' => ['slug' => 'room-availability'],
        'hierarchical' => true,
    ]);
}

add_action('init', 'custom_post_types');








// functions.php

function custom_shortcodes() {
    // Shortcode for displaying hostel room availability
    add_shortcode('hostel_availability', 'display_hostel_availability');
    
    // Shortcode for displaying café menu
    add_shortcode('cafe_menu_display', 'display_cafe_menu');
}

add_action('init', 'custom_shortcodes');

function display_hostel_availability() {
    // Custom query and display logic for hostel room availability
}

function display_cafe_menu() {
    // Custom query and display logic for café menu
}

function theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


// Add Customizer settings and controls
function mytheme_customize_register($wp_customize) {
    // Add section for custom content
    $wp_customize->add_section('mytheme_custom_content', array(
        'title'    => __('Custom Content', 'mytheme'),
        'priority' => 30,
    ));

    // Settings and controls for Box 1
    $wp_customize->add_setting('box1_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_heading_control', array(
        'label'    => __('Box 1 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_heading',
    ));

    $wp_customize->add_setting('box1_icon', array(
        'default'   => 'fa-graduation-cap',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_icon_control', array(
        'label'    => __('Box 1 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_icon',
    ));

    $wp_customize->add_setting('box1_text', array(
        'default'   => 'Default content for box 1.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box1_text_control', array(
        'label'    => __('Box 1 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box1_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for Box 2
    $wp_customize->add_setting('box2_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_heading_control', array(
        'label'    => __('Box 2 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_heading',
    ));

    $wp_customize->add_setting('box2_icon', array(
        'default'   => 'fa-building-columns',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_icon_control', array(
        'label'    => __('Box 2 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_icon',
    ));

    $wp_customize->add_setting('box2_text', array(
        'default'   => 'Default content for box 2.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box2_text_control', array(
        'label'    => __('Box 2 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box2_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for Box 3
    $wp_customize->add_setting('box3_heading', array(
        'default'   => 'Learn Something',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_heading_control', array(
        'label'    => __('Box 3 Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_heading',
    ));

    $wp_customize->add_setting('box3_icon', array(
        'default'   => 'fa-book',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_icon_control', array(
        'label'    => __('Box 3 Icon (FontAwesome class)', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_icon',
    ));

    $wp_customize->add_setting('box3_text', array(
        'default'   => 'Default content for box 3.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('box3_text_control', array(
        'label'    => __('Box 3 Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'box3_text',
        'type'     => 'textarea',
    ));

    // Settings and controls for About Us section
    $wp_customize->add_setting('about_us_heading', array(
        'default'   => 'About Us',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_us_heading_control', array(
        'label'    => __('About Us Heading', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_heading',
    ));

    $wp_customize->add_setting('about_us_text', array(
        'default'   => 'Default About Us content.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('about_us_text_control', array(
        'label'    => __('About Us Text', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_text',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('about_us_image', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_us_image_control', array(
        'label'    => __('About Us Image', 'mytheme'),
        'section'  => 'mytheme_custom_content',
        'settings' => 'about_us_image',
    )));
}
add_action('customize_register', 'mytheme_customize_register');



// gallery customization


function my_custom_customizer_settings($wp_customize) {
    // Add a new section for the custom content
    $wp_customize->add_section('my_custom_section', array(
        'title'    => __('Gallery', 'mytheme'),
        'priority' => 30,
    ));

    // Loop to create settings and controls for 8 items
    for ($i = 1; $i <= 8; $i++) {
        // Add image setting
        $wp_customize->add_setting("image_{$i}", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "image_{$i}",
            array(
                'label'    => __("Image {$i}", 'mytheme'),
                'section'  => 'my_custom_section',
                'settings' => "image_{$i}",
            )
        ));

        // Add text setting
        $wp_customize->add_setting("text_{$i}", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("text_{$i}", array(
            'label'    => __("Text {$i}", 'mytheme'),
            'section'  => 'my_custom_section',
            'type'     => 'text',
            'settings' => "text_{$i}",
        ));
    }
}
add_action('customize_register', 'my_custom_customizer_settings');




// more facilities part customization
function my_theme_customize_register($wp_customize) {
    // Add a section for the custom settings
    $wp_customize->add_section('custom_dive_section', array(
        'title'    => __('Home dives', 'my-theme'),
        'priority' => 120,
    ));

    // Add settings and controls for each dive
    for ($i = 1; $i <= 8; $i++) {
        $wp_customize->add_setting("dive_image_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "dive_image_$i", array(
            'label'    => __("Dive $i Image", 'my-theme'),
            'section'  => 'custom_dive_section',
            'settings' => "dive_image_$i",
        )));
        
        $wp_customize->add_setting("dive_content_$i", array(
            'default'   => '',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control("dive_content_$i", array(
            'label'    => __("Dive $i Content", 'my-theme'),
            'section'  => 'custom_dive_section',
            'type'     => 'text',
            'settings' => "dive_content_$i",
        ));
    }
}
add_action('customize_register', 'my_theme_customize_register');

// about us page customization
// functions.php


function more_about_us_customizer($wp_customize) {
    // Add a section for "More About Us"
    $wp_customize->add_section('more_about_us_section', array(
        'title'       => __('About Us Page', 'your-textdomain'),
        'description' => __('Customize the "More About Us" section.', 'your-textdomain'),
        'priority'    => 30,
    ));
    
    // Add setting for the content
    $wp_customize->add_setting('more_about_us_content', array(
        'default'   => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.', 'your-textdomain'),
        'transport' => 'refresh',
    ));
    
    // Add control for the content
    $wp_customize->add_control('more_about_us_content_control', array(
        'label'    => __('More About Us Content', 'your-textdomain'),
        'section'  => 'more_about_us_section',
        'type'     => 'textarea',
        'settings' => 'more_about_us_content',
    ));
    
    // Add setting for the image
    $wp_customize->add_setting('more_about_us_image', array(
        'default'   => get_template_directory_uri() . '/images/tchr2.png', // default image URL
        'transport' => 'refresh',
    ));
    
    // Add control for the image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'more_about_us_image_control', array(
        'label'    => __('More About Us Image', 'your-textdomain'),
        'section'  => 'more_about_us_section',
        'settings' => 'more_about_us_image',
    )));
}

add_action('customize_register', 'more_about_us_customizer');

