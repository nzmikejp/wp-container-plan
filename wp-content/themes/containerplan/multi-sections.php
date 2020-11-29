<?php /* Template Name: Multi Sections */ ?>

<?php get_header()?>

    <div class="wrap">
        <main>

            <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/page/content', 'multi-sections');
            } // end while
            ?> 
            

<?php get_footer()?>