<section class="section section-gallery">
    <div class="grid-container">
        <ul class="grid effect-2" id="grid">

            <?php

            $args = array('post_type' => 'gallery');
            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                get_template_part('partials/gallery/content', 'default');
            }

            /* Restore original Post Data */
            wp_reset_postdata();

            ?>

        </ul>
    </div>
</section>

<?php echo do_shortcode('[section-divider]')?>
