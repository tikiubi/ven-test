<?php
/**
 * VEN functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package VEN
 */

if ( ! function_exists( 'ven_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 */

function ven_setup() {

	load_theme_textdomain( 'ven', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ven' ),
	) );

}
endif;
add_action( 'after_setup_theme', 'ven_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ven_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'ven' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'ven' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'ven' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'ven' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'ven' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'ven' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'ven_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ven_scripts() {
	// load bootstrap css
    wp_enqueue_style( 'ven-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'ven-fontawesome-cdn', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );

	// load theme styles
	wp_enqueue_style( 'venstyle', get_stylesheet_uri() );

    // load jquery
	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    wp_enqueue_script('ven-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '', true );
    wp_enqueue_script('ven-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '', true );

    //load theme script
    wp_enqueue_script('ven-themejs', get_template_directory_uri() . '/assets/js/theme-script.js', array(), '', true );

    //load homepage CSS & JS
    if (is_page_template('template-homepage.php')) {
        wp_enqueue_style( 'ven-owl-carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
        wp_enqueue_style( 'ven-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );

        wp_enqueue_script('ven-owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'ven_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'ven_navwalker' )) {
    require_once(get_template_directory() . '/inc/ven_navwalker.php');
}