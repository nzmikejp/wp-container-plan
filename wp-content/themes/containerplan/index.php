<?php get_header()?>

    <div class="wrap">
        <main>

            <?php 
            while ( have_posts() ) {
                the_post(); 
                get_template_part('partials/content', 'index');
            } // end while
            ?> 
            

<?php get_footer()?>