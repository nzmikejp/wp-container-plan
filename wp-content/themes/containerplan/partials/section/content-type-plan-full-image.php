<section class="section section-stacked-plans">
    <div class="grid-container">
        <div class="plan full-img tape-center" data-aos="fade-up" data-aos-delay="150">
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
            <div class="grid-x plan-content-wrap">
                <div class="cell">
                    <div class="plan-img img-right">
                        <img src="<?php the_field('image')?>" alt="">
                    </div>
                </div>
                <div class="cell plan-content medium-9 large-8">
                    <h2><?php the_title()?></h2>
                    <div>
                        <?php the_content()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>