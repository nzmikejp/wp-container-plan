<section class="section section-hero">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell large-4">
                <h1 data-aos="fade-up"><?php the_title()?></h1>
                <h2 class="h2" data-aos="fade-up"><?php the_field('subtitle')?></h2>
                <hr data-aos="fade-up" data-aos-delay="100">
                <div data-aos="fade-up" data-aos-delay="200">
                    <?php the_content()?>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <?php echo do_shortcode('[contact-form-7 id="80" title="Email Download"]')?>
                </div>
            </div>
            <div class="cell large-8 hero-img" data-aos="fade-up" data-aos-delay="200">
                <img src="<?php the_field('image')?>" alt="">
            </div>
        </div>
    </div>
</section>

<?php echo do_shortcode('[section-divider]')?>