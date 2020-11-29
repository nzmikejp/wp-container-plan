<?php echo do_shortcode('[section-divider]')?>

<section class="section section-cta" data-aos="fade-up">
    <div class="grid-container">
        <div class="plan tape-center-y">
            <div class="plan-border-wrap">
                <div class="plan-border">
                    <div class="plan-border-details">
                        <div class="plan-brand">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/brand-logo-sm.svg" alt="">
                        </div>
                        <div class="plan-label">
                            <p>
                                <?php the_field('plan_label')?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-x plan-content">
                <div class="cell large-4">
                    <h2><?php the_title()?></h2>
                </div>
                <div class="cell large-7 large-offset-1">
                    <div><?php the_content()?></div>
                    <?php echo do_shortcode('[contact-form-7 id="80" title="Email Download"]')?>
                </div>
                <div class="cell plan-mark right" id="mark-2">
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