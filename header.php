<?php

/**
 * Display the custom logo image if one is set or a text fallback.
 *
 * @package MyTheme
 */
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image( $custom_logo_id, 'full', false, array( 'loading' => 'eager', 'decoding' => 'async' ));

if ( has_custom_logo() ) {
    echo $logo;
} else {
    echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
}

?>