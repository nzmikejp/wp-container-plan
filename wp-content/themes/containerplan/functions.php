<?php

function enqueue_function() {

    //--- CSS ---//
    wp_enqueue_style ( 'swiper','https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_style ( 'aos','https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_style ( 'foundation','https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css' );
    wp_enqueue_style ( 'main', get_template_directory_uri().'/assets/css/main.css' );
    wp_enqueue_style ( 'my-style', get_stylesheet_uri() );

    //--- JS ---//
    wp_enqueue_script( 'modernizr', get_template_directory_uri().'/assets/js/modernizr.custom.js', array(), '1.0.0', false );
    wp_enqueue_script( 'gsap','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'gsap-scrollTo','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollToPlugin.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'gsap-scrollTrigger','https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'masonry','https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'imagesLoaded', get_template_directory_uri().'/assets/js/imagesloaded.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'classie', get_template_directory_uri().'/assets/js/classie.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'animOnScroll', get_template_directory_uri().'/assets/js/AnimOnScroll.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'swiper','https://unpkg.com/swiper/swiper-bundle.min.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'foundation','https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'aos','https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '1.0.0', true ); 
    wp_enqueue_script( 'custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '1.0.0', true ); 

}
add_action('wp_enqueue_scripts', 'enqueue_function');

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
   
    //--- Register Gallery ---//
    $args = array(
        'public'    => true,
        'label'     => 'Gallery',
    );
    register_post_type( 'gallery', $args );


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
    
    //---[ruler]
    function ruler_func( $atts ){

        ob_start();

        get_template_part('shortcode/ruler');

        return ob_get_clean();
    }
    add_shortcode( 'ruler', 'ruler_func' ); 

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