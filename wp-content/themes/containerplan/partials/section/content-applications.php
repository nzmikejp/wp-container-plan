<?php

    $dimensionLeft = get_field('dimension_left').'%';
    $dimensionRight = get_field('dimension_right').'%';

    $livingTitle = get_field('living_title');
    $livingSubtitle = get_field('living_subtitle');
    $livingContent1 = get_field('lcontent_1');
    $livingContent2 = get_field('lcontent_2');
    
    $enterpriseTitle = get_field('enterprise_title');
    $enterpriseSubtitle = get_field('enterprise_subtitle');
    $enterpriseContent1 = get_field('econtent_1');
    $enterpriseContent2 = get_field('econtent_2');
    
?>

<style>

    .headline-dim .headline-label::before {
        transform: translate(<?php echo $dimensionLeft?>, -7%);
    }
    
    .headline-dim .headline-label::after {
        transform: translate(<?php echo $dimensionRight?>, -7%);
    }

</style>

<?php echo do_shortcode('[section-divider]')?>

<section class="section section-container-living">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell headline-dim" data-aos="fade-up">
                <h2><span class="headline-label"><?php the_field('dimension_label')?></span> <?php the_title()?></h2>
            </div>
            <p class="h2" data-aos="fade-up" data-aos-delay="50"><?php the_field('subtitle')?></p>
            <div class="cell cp-card">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php

                        $args = array('post_type' => 'containerliving');
                        // The Query
                        $the_query = new WP_Query( $args );

                        // The Loop
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            get_template_part('partials/container-living/content', 'default');
                        }

                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="card-headline">
                    <h3 data-aos="fade-up"><?php echo $livingTitle?></h3>
                    <p class="h3" data-aos="fade-up" data-aos-delay="50"><?php echo $livingSubtitle?></p>
                </div>
                <div class="card-content">
                    <div class="grid-x grid-margin-x">
                        <div class="cell medium-6" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $livingContent1?> 
                        </div>
                        <div class="cell medium-6" data-aos="fade-up" data-aos-delay="150">
                            <?php echo $livingContent2?> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell container-divider">
                <div class="divider-wrap">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/brand-logo-color-medium.svg" alt="">
                </div>
            </div>
            <div class="cell cp-card">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <?php

                        $args = array('post_type' => 'containerenterprise');
                        // The Query
                        $the_query = new WP_Query( $args );

                        // The Loop
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            get_template_part('partials/container-enterprise/content', 'default');
                        }

                        /* Restore original Post Data */
                        wp_reset_postdata();

                        ?>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="card-headline">
                    <h3 data-aos="fade-up"><?php echo $enterpriseTitle?></h3>
                    <p class="h3" data-aos="fade-up" data-aos-delay="50"><?php echo $enterpriseSubtitle?></p>
                </div>
                <div class="card-content">
                    <div class="grid-x grid-margin-x">
                        <div class="cell medium-6" data-aos="fade-up" data-aos-delay="100">
                            <?php echo $enterpriseContent1?> 
                        </div>
                        <div class="cell medium-6" data-aos="fade-up" data-aos-delay="150">
                            <?php echo $enterpriseContent2?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>