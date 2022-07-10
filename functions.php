<?php

function admin_bar(){
    if(is_user_logged_in()){
        add_filter( 'show_admin_bar', '__return_true' , 1000 );
    }
}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Opcje',
        'menu_title'	=> 'Opcje',
    ));

}


add_action('init', 'admin_bar' );


add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo', array(
    'height' => 63,
    'width'  => 180,
    'flex-height' => true,
    'flex-width'  => true,
) );

function easyitem_menu() {
    register_nav_menu('header-menu',__( 'main-menu' ));

}
add_action( 'init', 'easyitem_menu');

function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

?>