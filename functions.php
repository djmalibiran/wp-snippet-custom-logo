<?php

/*
 * Add support for core custom logo.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 * Replace 'themename' in the function with the actual name of your theme.
 */
function themename_custom_logo_setup()
{
    $defaults = array(
        'flex-height' => true,
        'flex-width' => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>