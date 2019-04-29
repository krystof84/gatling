<?php

function gatling_customize_register( $wp_customize ) {

    // Footer Section
    $wp_customize->add_section( 'gatling_footer_section' , array(
        'title' => __( 'Footer', 'gatling' ),
        'priority' => 115,
    ));

    // Footer Settings
    $wp_customize->add_setting('footer-copyright', array());


    // Footer Controls
    $wp_customize->add_control('footer_copyright_control', array(
        'label'     => __( 'Footer copyright text', 'gatling' ),
        'type'      => 'textarea',
        'section'   => 'gatling_footer_section',
        'settings'  => 'footer-copyright'
    ));

}
add_action( 'customize_register', 'gatling_customize_register' );