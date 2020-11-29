<section class="section section-stacked-plans">
    <div class="grid-container">
        <div class="plan half-img <?php the_field('tape_position')?>" data-aos="fade-up">
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
            <div class="grid-x grid-padding-x plan-content">
                <div class="cell large-6">
                    <div class="plan-img">
                        <img src="<?php the_field('image')?>" alt="">
                    </div>
                </div>
                <div class="cell large-6">
                    <h2><?php the_title()?></h2>
                    <div>
                        <?php the_content()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>