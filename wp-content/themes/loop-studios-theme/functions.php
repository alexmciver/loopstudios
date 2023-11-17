<?php

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'loop-studios-theme', esc_url( get_template_directory_uri() . '/assets/css/styles.css' ) );
    
    // Enqueue custom JavaScript
    wp_enqueue_script('loop-studios-theme', get_template_directory_uri() . '/assets/js/main.js', array('jquery') );
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');

// Add support for featured images
add_theme_support('post-thumbnails');
// Add theme support for WP Block styles
add_theme_support("wp-block-styles");
// Add support for responsive embeds 
add_theme_support("responsive-embeds");
// Add support for HTML5 
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

// Add custom menu support
function your_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'loop-studios-theme'),
        'secondary-menu' => __('Secondary Menu', 'loop-studios-theme'),
    ));
}
add_action ('after_setup_theme', 'your_theme_register_menus');

// Registering ACF blocks
function alex_register_acf_blocks() {
    $block_templates = array(
        'hero-block',
        'image-left-text-right',
        'our-creations-block',
    );

    foreach ($block_templates as $template) {
        register_block_type(get_template_directory() . '/template-parts/' . $template);
    }
}
add_action('acf/init', 'alex_register_acf_blocks');


// Custom block category show correctly
add_filter( 'block_categories_all', 'alex_block_category' );
function alex_block_category( $categories ) {
    $new_category = array(
        'alex-blocks' => array(
            'slug'  => 'alex-blocks',
            'title' => 'Blocks by Alex'
        )
    );
    $position = 1; 
    array_splice( $categories, $position, 0, $new_category );
    return $categories;
}

//GZIP Compression 
function enable_gzip_compression() {
    if (!ob_start("ob_gzhandler")) ob_start();
}
add_action('init', 'enable_gzip_compression');


// Add page title as body class
function add_page_title_to_body_class($classes) {
    if (is_singular()) {
        global $post;
        $page_title = strtolower(str_replace(' ', '-', $post->post_title));
        $classes[] = $page_title;
    }
    return $classes;
}
add_filter('body_class', 'add_page_title_to_body_class');


function custom_theme_customizer( $wp_customize ) {
    // Add a section for Logo
    $wp_customize->add_section( 'logo_section', array(
        'title'    => __( 'Logo', 'loop-studios-theme' ),
        'priority' => 30,
    ) );

    // Add a setting for the logo
    $wp_customize->add_setting( 'logo_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );

    // Add a control for the logo
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image', array(
        'label'    => __( 'Upload Logo', 'space-theme' ),
        'section'  => 'logo_section',
        'settings' => 'logo_image',
    ) ) );
}
add_action( 'customize_register', 'custom_theme_customizer' );

// SVG uploads
function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

function handle_svg_upload( $data, $file, $filename, $mimes ) {
    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $filename
    ];
}
add_filter( 'wp_check_filetype_and_ext', 'handle_svg_upload', 10, 4 );


// Disable theme and plugin changes
define('DISALLOW_FILE_EDIT',true);
define('DISALLOW_FILE_MODS',true);

?>