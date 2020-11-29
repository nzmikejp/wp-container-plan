<section class="section section-index">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell large-8">
                <h1 data-aos="fade-up">
                    <?php the_title()?>
                </h1>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="50">
                    <?php the_field('subtitle')?>
                </h2>
            </div>
            <div class="cell large-3 large-offset-1">
                <div class="plan-mark bottom" id="mark-5">
                    <div class="mark-container">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/brand-logo-color-medium.svg" alt="" class="mark-brand">
                        <h4><?php the_field('plan_mark_label')?></h4>
                        <h3><?php the_field('plan_mark_number')?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo do_shortcode('[section-divider]')?>

<section class="section section-index-content">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell cell-content" data-aos="fade-up" data-aos-delay="150">
                <div><?php the_content()?></div>
            </div>
        </div>
    </div>
</section>