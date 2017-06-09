<?php
add_action( 'wp_enqueue_scripts', 'coldbox_enqueue_styles' );
function coldbox_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

}

/* ------------------------------------------------------------------------- *
*  Start customizing from here
* -------------------------------------------------------------------------- */
