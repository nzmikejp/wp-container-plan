<section class="section section-contact">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell large-2">
                <div class="plan-mark right" id="mark-4">
                    <div class="mark-container">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/brand-logo-color-medium.svg" alt="" class="mark-brand">
                        <h4><?php the_field('mark_title')?></h4>
                        <h3><?php the_field('mark_number')?></h3>
                    </div>
                </div>
            </div>
            <div class="cell large-10">
                <h1 data-aos="fade-up"><?php the_title()?></h1>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="50"><?php the_field('subtitle')?></h2>
            </div>
            <div class="cell large-8 large-offset-2 cell-content" data-aos="fade-up" data-aos-delay="100">
                <?php the_content()?>
            </div>
            <div class="coffee-stain">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/coffee-stain.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="section section-mail-form">
    <div class="grid-container">
        <div class="plan tape-center" data-aos="fade-up" data-aos-delay="350">
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
                <div class="cell large-10 large-offset-1">
                    <?php echo do_shortcode('[contact-form-7 id="301" title="Contact Form"]')?>
                </div>
            </div>
        </div>
        <div class="cp-pen">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/pen.png" alt="">
        </div>
    </div>
</section>