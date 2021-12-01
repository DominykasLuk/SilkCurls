<?php
/**
 * Child-Theme functions and definitions
 */

add_action('admin_menu', 'my_remove_menu_pages', 999);
function my_remove_menu_pages()
{
    remove_menu_page('edit.php');                   //Posts
//    remove_menu_page('upload.php');                 //Media
    remove_menu_page('edit-comments.php');          //Comments
    remove_menu_page('themes.php');                 //Appearance
    remove_menu_page('users.php');                  //Users
    remove_menu_page('tools.php');                  //Tools
//    remove_menu_page('options-general.php');        //Settings
    remove_menu_page('edit.php?post_type=acf');
    remove_menu_page('wpcf7');
//    remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit.php?post_type=cpt_layouts');
    remove_menu_page('edit.php?post_type=cpt_services');
    remove_menu_page('edit.php?post_type=cpt_team');
    remove_menu_page('edit.php?post_type=cpt_testimonials');
    remove_menu_page('page=woo-variation-swatches-settings');
    remove_menu_page('trx_addons_theme_panel');
    remove_menu_page('optin-monster-dashboard');
    remove_menu_page('yith_plugin_panel');
    remove_menu_page('woocommerce-marketing');
    remove_menu_page('woo-variation-swatches-settings');
//    remove_menu_page('litespeed');
    remove_menu_page('essential-grid');
    remove_menu_page('revslider');
    remove_menu_page('mailchimp-for-wp');
    remove_menu_page('cookie-notice');
    remove_menu_page('aioseo');
    remove_menu_page('ai1wm_export');
    remove_menu_page('vc-general');
    remove_menu_page('elementor');
    remove_menu_page('wpforms-overview');
    remove_menu_page('edit.php?post_type=elementor_library');
    remove_menu_page('chaty-app');
    remove_menu_page('edit.php?post_type=acf-field-group');
//    remove_menu_page( 'plugins.php' );
}
add_action('wp_enqueue_scripts', 'splidejs');
function splidejs()
{
    wp_enqueue_script('splide-js', get_stylesheet_directory_uri() . '/js/splide.min.js');
}

wp_register_style('splide', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css');
wp_enqueue_style('splide');

wp_register_style('Font_Awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css');
wp_enqueue_style('Font_Awesome');

wp_register_style('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
wp_enqueue_style('Bootstrap');


add_action('wp_enqueue_scripts', 'custom_js');
function custom_js() {
    $cacheBuster = filemtime(get_stylesheet_directory() . '/js/custom.js');
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/custom.js', null, $cacheBuster);

}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title' => 'Pradinis puslapis',
    ));
}