<?php
/**
 * VEN Theme Customizer
 *
 * @package VEN
 */

function ven_customize_register( $wp_customize ) {

    /*HEADER*/
    $wp_customize->add_section(
        'header',
        array(
            'title' => __( 'Header', 'ven' ),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting( 'header_contact_text');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_contact_text', array(
        'label' => __( 'Contact text', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_contact_text',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_contact_phone');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_contact_phone', array(
        'label' => __( 'Contact phone', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_contact_phone',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_contact_image');
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'header_contact_image', array(
        'label' => __( 'Contact image', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_contact_image',
    ) ) );

    $wp_customize->add_setting( 'header_button_text');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_button_text', array(
        'label' => __( 'Button text', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_button_text',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_button_url');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_button_url', array(
        'label' => __( 'Button URL', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_button_url',
        'type' => 'url'
    ) ) );

    $wp_customize->add_setting( 'header_menu_text', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_menu_text', array(
        'label' => __( 'Menu text', 'ven' ),
        'section'    => 'header',
        'settings'   => 'header_menu_text',
        'type' => 'text'
    ) ) );

    /*FOOTER*/
    $wp_customize->add_section(
        'footer',
        array(
            'title' => __( 'Footer', 'ven' ),
            'priority' => 31,
        )
    );

    $wp_customize->add_setting( 'footer_contact_form_title' );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_contact_form_title', array(
        'label' => __( 'Contact form title', 'ven' ),
        'section'    => 'footer',
        'settings'   => 'footer_contact_form_title',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'footer_contact_form_shortcode');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_contact_form_shortcode', array(
        'label' => __( 'Contact form shortcode', 'ven' ),
        'section'    => 'footer',
        'settings'   => 'footer_contact_form_shortcode',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'footer_contact_form_text');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_contact_form_text', array(
        'label' => __( 'Contact form text', 'ven' ),
        'section'    => 'footer',
        'settings'   => 'footer_contact_form_text',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'footer_copyright');
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'footer_copyright', array(
        'label' => __( 'Copyright', 'ven' ),
        'section'    => 'footer',
        'settings'   => 'footer_copyright',
        'type' => 'text'
    ) ) );

    // Add control for logo uploader
    $wp_customize->add_setting( 'ven_header_logo', array(
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ven_header_logo', array(
        'label'    => __( 'Header Logo', 'ven' ),
        'section'  => 'title_tagline',
        'settings' => 'ven_header_logo',
    ) ) );

    $wp_customize->add_setting( 'ven_footer_logo', array(
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ven_footer_logo', array(
        'label'    => __( 'Footer Logo', 'ven' ),
        'section'  => 'title_tagline',
        'settings' => 'ven_footer_logo',
    ) ) );

}
add_action( 'customize_register', 'ven_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ven_customize_preview_js() {
    wp_enqueue_script( 'ven_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ven_customize_preview_js' );
