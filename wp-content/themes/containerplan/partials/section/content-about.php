<?php

    $dimensionLeft = get_field('dimension_left').'%';
    $dimensionRight = get_field('dimension_right').'%';
    
?>

<style>

    .headline-dim .headline-label::before {
        transform: translate(<?php echo $dimensionLeft?>, -7%);
    }
    
    .headline-dim .headline-label::after {
        transform: translate(<?php echo $dimensionRight?>, -7%);
    }

</style>

<section class="section section-about">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell headline-dim">
                <h2 data-aos="fade-up" data-aos-delay="250"><span class="headline-label"><?php the_field('dimension_label')?></span> <?php the_title()?></h2>
                <p class="h2" data-aos="fade-up" data-aos-delay="300"><?php the_field('subtitle')?></p>
            </div>
            <div class="cell cell-content">
                <div class="grid-x grid-margin-x">
                    <div class="cell small-8 medium-7 large-5 about-img" data-aos="fade-up" data-aos-delay="350">
                        <img src="<?php the_field('photo')?>" alt="">
                    </div>
                    <div class="cell large-7 about-content" data-aos="fade-up" data-aos-delay="450">
                        <?php the_content()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo do_shortcode('[section-divider]')?>