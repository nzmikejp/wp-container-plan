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
   
    //--- Register Container Living Slider ---//
    $args = array(
        'public'    => true,
        'label'     => 'Slider Living',
    );
    register_post_type( 'containerliving', $args );
    
    //--- Register Container Enterprise Slider ---//
    $args = array(
        'public'    => true,
        'label'     => 'Slider Enterprise',
    );
    register_post_type( 'containerenterprise', $args );


    //--- Shortcodes ---//

    //---[divider]
    function divider_func( $atts ){

        ob_start();

        get_template_part('shortcode/divider');

        return ob_get_clean();
    }
    add_shortcode( 'divider', 'divider_func' ); 
    
    //---[section-divider]
    function sectionDivider_func( $atts ){

        ob_start();

        get_template_part('shortcode/section-divider');

        return ob_get_clean();
    }
    add_shortcode( 'section-divider', 'sectionDivider_func' ); 

    //---[section name=donate]
    //---[section name=get-plans]
    function section_func( $atts ){

        ob_start();

        // The Query
        $args = array(
            'post_type'=>'section',
            'name'=>$atts['name'],
        );
        $the_query = new WP_Query( $args );
        
        // The Loop
        while ( $the_query->have_posts() ) {
            $the_query->the_post();

            $suffix = 'default';

            //check section for type
            $types = get_the_terms(get_the_ID(),'type');

            if($types != false){

            $type = $types[0];
            $slug = $type->slug;

            if(locate_template('partials/section/content-type-'.$slug.'.php')){
                $suffix = 'type-'.$slug;
            }
            
            }

            //check section by section-slug
            $section_slug = get_post_field('post_name');
            if(locate_template('partials/section/content-'.$section_slug.'.php')){
            $suffix = $section_slug;
            }

            get_template_part('partials/section/content', $suffix);

        }
        
        /* Restore original Post Data */
        wp_reset_postdata();


        return ob_get_clean();
    }
    add_shortcode( 'section', 'section_func' );

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