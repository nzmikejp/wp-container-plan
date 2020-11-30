<section class="section section-options">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell medium-9 large-6">
                <h1 data-aos="fade-up"><?php the_title()?></h1>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="50"><?php the_field('subtitle')?></h2>
                <div class="coffee-stain">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/coffee-stain.png" alt="">
                </div>
            </div>
            <div class="cell cell-diagram" data-aos="fade-up" data-aos-delay="150">
                <img class="diagram-img" src="<?php the_field('main_diagram')?>" alt="">
            </div>
        </div>
    </div>

    <?php echo do_shortcode('[divider]')?>

    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-6 large-4 diagram-exploded" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php the_field('small_diagram_1')?>" alt="">
            </div>
            <div class="cell medium-6 large-4 diagram-exploded" data-aos="fade-up" data-aos-delay="250">
                <img src="<?php the_field('small_diagram_2')?>" alt="">
            </div>
            <div class="cell medium-6 medium-offset-3 large-4 large-offset-0 diagram-exploded" data-aos="fade-up" data-aos-delay="300">
                <img src="<?php the_field('small_diagram_3')?>" alt="">
            </div>
        </div>
    </div>
</section>