<?php
/**
 * Dubravushka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dubravushka
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.1');
}

if (!function_exists('dubravushka_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function dubravushka_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Dubravushka, use a find and replace
         * to change 'dubravushka' to the name of your theme in all the template files.
         */
        load_theme_textdomain('dubravushka', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Главное меню', 'dubravushka'),
                'footer-copyright' => esc_html__('Футер копирайт', 'dubravushka'),
                'footer-school' => esc_html__('О ШКОЛЕ', 'dubravushka'),
                'footer-education' => esc_html__('ОБРАЗОВАНИЕ', 'dubravushka'),
                'footer-house' => esc_html__('ПАНСИОН', 'dubravushka'),
                'footer-news' => esc_html__('НОВОСТИ', 'dubravushka'),
                'footer-admission' => esc_html__('ПОСТУПЛЕНИЕ', 'dubravushka'),
                'footer-contacts' => esc_html__('КОНТАКТЫ', 'dubravushka'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
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

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'dubravushka_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'dubravushka_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dubravushka_content_width()
{
    $GLOBALS['content_width'] = apply_filters('dubravushka_content_width', 640);
}

add_action('after_setup_theme', 'dubravushka_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dubravushka_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'dubravushka'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'dubravushka'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'dubravushka_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function dubravushka_scripts()
{
    wp_enqueue_style('dubravushka-main-style', get_template_directory_uri() . '/css/main.css', [], _S_VERSION);
    wp_enqueue_style('dubravushka-style', get_stylesheet_uri(), [], _S_VERSION);

    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
    wp_enqueue_script('dubravushka-jquery', get_template_directory_uri() . '/js/jquery.min.js', [], '2.2.4', true);
    wp_enqueue_script('dubravushka-yii', get_template_directory_uri() . '/js/yii.js', [], '2', true);//TODO Проверить сайт без этого скрипта
    wp_enqueue_script('dubravushka-libraries', get_template_directory_uri() . '/js/libraries.js', [], _S_VERSION, true);
    wp_enqueue_script('dubravushka-lightbox', get_template_directory_uri() . '/js/lightbox.js', [], '2.9.0', true);
    wp_enqueue_script('dubravushka-jquery-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', [], '1.17.0', true);
    wp_enqueue_script('dubravushka-jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', [], '1.4.1', true);
    wp_enqueue_script('dubravushka-jquery-lazy', get_template_directory_uri() . '/js/jquery.lazy.min.js', [], '1.7.10', true);
    wp_enqueue_script('dubravushka-main', get_template_directory_uri() . '/js/main.js', [], _S_VERSION, true);
    wp_enqueue_script('dubravushka-yii-validation', get_template_directory_uri() . '/js/yii.validation.js', [], _S_VERSION, true);
    wp_enqueue_script('dubravushka-yii-activeform', get_template_directory_uri() . '/js/yii.activeForm.js', [], _S_VERSION, true);

    /*wp_style_add_data( 'dubravushka-style', 'rtl', 'replace' );

    /wp_enqueue_script( 'dubravushka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }*/
}

add_action('wp_enqueue_scripts', 'dubravushka_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Nav Walker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_filter('use_block_editor_for_post', '__return_false', 10);

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}


//TODO Change news url
//TODO add fonts