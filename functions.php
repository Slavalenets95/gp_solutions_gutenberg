<?php
/**
 * Версия стилей и скриптов
 */
define('VERSION', '1.0.0');

/**
 * Подключение стилей и скриптов
 */

function enqueue()
{
    wp_enqueue_style('style-name', get_template_directory_uri() . '/dist/app.css', array(), VERSION);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/dist/app.js', array(), VERSION, true);
    wp_deregister_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue');

function admin_style() {
    wp_enqueue_script( 'slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/dist/admin/admin.css', array(), VERSION);
    wp_enqueue_script('admin-script', get_template_directory_uri() . '/dist/admin/admin.js', array(), VERSION, true);
}
add_action('admin_enqueue_scripts', 'admin_style');

/**
 * Возвращает alt или title, из массива изображения acf
 */

function get_img_alt(array $img)
{
    return $img['alt'] ? $img['alt'] : $img['title'];
}

/**
 * Возвращает alt или title thubmnail поста
 */

function get_thumbnail_alt($id)
{
    $thumbnail_id = get_post_meta( $id, '_thumbnail_id', true );
    $alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );

    if($alt) {
        return $alt;
    }

    $thumbnail_title = get_the_title($thumbnail_id);
    return $thumbnail_title;
}

/**
 *  Theme Supports
 */

add_theme_support( 'custom-logo', [
    'height'      => 190,
    'width'       => 190,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
    'unlink-homepage-logo' => false, // WP 5.5
] );

add_theme_support( 'post-thumbnails' );


/**
 * Регистрация меню
 */
add_action('after_setup_theme', 'my_register_nav_menu');

function my_register_nav_menu()
{
    register_nav_menus(array(
        'header_menu' => 'Header Menu',
        'footer_menu' => 'Footer Menu',
    ));
}

function get_acf_template_path()
{
    return 'template-parts/acf-templates/';
}


/**
 * Позволяет загружать svg
 */

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

    if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
        $dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
    }
    else {
        $dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
    }

    if( $dosvg ){

        if( current_user_can('manage_options') ){

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }

        else {
            $data['ext']  = false;
            $data['type'] = false;
        }

    }

    return $data;
}

/**
 * Acf Options Page
 */

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}

/**
 * ACF Gutenberg Blocks
 */

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    if( function_exists('acf_register_block_type') ) {

        /*** INTRO BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'intro',
            'title'             => __('Intro Block'),
            'description'       => __('Front Page Intro Block'),
            'render_template'   => 'template-parts/blocks/intro/intro.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'intro' ),
        ));

        /*** LOGO ITEMS BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'logo_item',
            'title'             => __('Logo Items'),
            'description'       => __('Front Page Logo Items Block'),
            'render_template'   => 'template-parts/blocks/logo_items/logo_items.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'logo items' ),
        ));

        /*** CONTENT SECTION BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'content_section',
            'title'             => __('Content Section'),
            'description'       => __('Front Page Content Section Block'),
            'render_template'   => 'template-parts/blocks/content_section/content_section.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'content section' ),
        ));

        /*** SOLUTIONS BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'solutions',
            'title'             => __('Solutions'),
            'description'       => __('Front Page Solutions Block'),
            'render_template'   => 'template-parts/blocks/solutions/solutions.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'solutions' ),
        ));

        /*** COMMENTS BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'comments',
            'title'             => 'Comments',
            'description'       => __('Front Page Comments Block'),
            'render_template'   => 'template-parts/blocks/comments/comments.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'comments' ),
        ));

        /*** CHANNELS BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'channels',
            'title'             => 'Channels',
            'description'       => __('Front Page Channels Block'),
            'render_template'   => 'template-parts/blocks/channels/channels.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'channels' ),
        ));

        /*** GET TOUCH BLOCK ***/
        acf_register_block_type(array(
            'name'              => 'get_touch',
            'title'             => 'Get Touch',
            'description'       => __('Front Page Get Touch Block'),
            'render_template'   => 'template-parts/blocks/get_touch/get_touch.php',
            'category'          => 'custom',
            'icon'              => '',
            'keywords'          => array( 'get touch' ),
        ));

    }
}

/**
 * Добавляет новую категори в gutenberg blocks
 */

add_filter( 'block_categories_all' , function( $categories ) {

    $custom_category = array(
        'slug'  => 'custom',
        'title' => 'Custom'
    );

    $categories_sorted = array();
    $categories_sorted[0] = $custom_category;

    foreach ($categories as $category) {
        $categories_sorted[] = $category;
    }

    return $categories_sorted;
} );
