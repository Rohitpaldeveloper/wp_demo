<?php
function my_theme_setup() {
    register_nav_menus(
    array('primary-menu'=>'Header Menu')
);
add_theme_support('post-thumbnails');


add_theme_support('custom-header');
}
add_action('after_setup_theme', 'my_theme_setup');
?>
<?php
function my_theme_styles_bittu() {
    wp_enqueue_style( 'my-theme-style', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_styles_bittu' );
?>