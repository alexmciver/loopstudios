<?php

// Enqueue styles and scripts
function your_theme_enqueue_scripts() {
    wp_enqueue_style( 'loop-studios-theme', esc_url( get_template_directory_uri() . '/assets/css/styles.css' ) );
    wp_enqueue_script('loop-studios-theme', get_template_directory_uri() . '/assets/js/main.js', array('jquery') );
}
add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');


add_theme_support('post-thumbnails');
add_theme_support("wp-block-styles");
add_theme_support("responsive-embeds");
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

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


// Disable theme and plugin changes
define('DISALLOW_FILE_EDIT',true);
define('DISALLOW_FILE_MODS',true);

?>