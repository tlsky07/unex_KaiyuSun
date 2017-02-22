<?php
//* Code goes here
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

register_sidebar( array(
   'name'          => 'Main Content Widget',
   'id'            => 'main-content-widget',
   'before_widget' => '<div class="main-content-widget">',
   'after_widget'  => '</div>'
) );