<?php

function register_resource() {
    register_nav_menu('main-menu', 'Main Menu');
    register_nav_menu('footer-menu-about', 'Footer Menu About');
    register_nav_menu('footer-menu-professionals', 'Footer Menu Professionals');
    register_nav_menu('footer-menu-social', 'Footer Menu Social');
    register_nav_menu('footer-menu-legal', 'Footer Menu Legal');

    //--- Register Section ---//
    $args = array(
        'public'    => true,
        'label'     => 'Sections',
    );
    register_post_type( 'section', $args );

    //--- Custom Section Taxonomy ---//
    $args = array(
        'label'        => 'Type',
        'public'       => true,
        'hierarchical' => true,
        'show_in_nav_menus' => true,
    );
    register_taxonomy( 'type', 'section', $args );

}
add_action( 'init', 'register_resource' );

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');

//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);


?>