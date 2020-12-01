
<section class="section section-plan">
    <div class="grid-container">
        <div class="plan tape-x" data-aos="fade-up" data-aos-delay="300">
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
                    <h3 class="h3"><?php the_field('subtitle')?></h3>
                </div>
                <div class="cell large-8">
                    <?php the_content()?>
                </div>
                <div class="cell plan-mark top" id="mark-1">
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