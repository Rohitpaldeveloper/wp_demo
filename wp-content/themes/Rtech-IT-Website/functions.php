<?php

register_nav_menus(
    array('primary-menu'=>'Header Menu')
);


add_theme_support('post-thumbnails');


add_theme_support('custom-header');

?>


<?php
function my_theme_styles() {
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles' );
?>