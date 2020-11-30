<section class="section section-about-plan">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell-headline">
                <h2 data-aos="fade-up"><?php the_title()?></h2>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell large-6">
                <div class="grid-x">
                    <div class="cell medium-6 large-12">
                        <div class="cell-header">
                            <h2 data-aos="fade-up" data-aos-delay="50" class="cell-number"><?php the_field('cell_1_number')?></h2>
                            <div class="cell-title">
                                <h3 data-aos="fade-up" data-aos-delay="100"><?php the_field('cell_1_title')?></h3>
                            </div>
                        </div>
                        <div class="cell-content" data-aos="fade-up" data-aos-delay="200">
                           <?php the_field('cell_1_content')?>
                        </div>
                    </div>
                    <div class="cell medium-6 large-12 cell-img-wrap">
                        <div class="cell-img" data-aos="fade-right" data-aos-delay="250">
                            <img src="<?php the_field('cell_1_image_1')?>" alt="">
                        </div>
                        <div class="cell-img" data-aos="fade-right" data-aos-delay="300">
                            <img src="<?php the_field('cell_1_image_2')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell large-6 cell-render" data-aos="fade-left" data-aos-delay="350">
                <img src="<?php the_field('cell_1_image_render')?>" alt="">
            </div>
        </div>
    </div>

    <?php echo do_shortcode('[divider]')?>
    
    <div class="grid-container">
        <div class="grid-x grid-padding-x align-middle">
            <div class="cell large-6 large-order-2">
                <div class="grid-x">
                    <div class="cell medium-6 large-12">
                        <div class="cell-header">
                            <h2 data-aos="fade-up" data-aos-delay="50" class="cell-number"><?php the_field('cell_2_number')?></h2>
                            <div class="cell-title">
                                <h3 data-aos="fade-up" data-aos-delay="150"><?php the_field('cell_2_title')?></h3>
                            </div>
                        </div>
                        <div data-aos="fade-up" data-aos-delay="200" class="cell-content">
                            <?php the_field('cell_2_content')?>
                        </div>
                    </div>
                    <div class="cell medium-6 large-12 cell-img-wrap">
                        <div class="cell-img" data-aos="fade-left" data-aos-delay="250">
                            <img src="<?php the_field('cell_2_image_1')?>" alt="">
                        </div>
                        <div class="cell-img" data-aos="fade-left" data-aos-delay="300">
                            <img src="<?php the_field('cell_2_image_2')?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell large-6 cell-render" data-aos="fade-right" data-aos-delay="350">
                <img src="<?php the_field('cell_2_image_render')?>" alt="">
            </div>
        </div>
    </div>
</section>