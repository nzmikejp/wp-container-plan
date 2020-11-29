<section class="section section-hero">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell large-8">
                <h1 data-aos="fade-up"><?php the_title()?></h1>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="50"><?php the_field('subtitle')?></h2>
            </div>
        </div>
        <div class="coffee-stain">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/coffee-stain.png" alt="">
        </div>
    </div>
</section>

<?php echo do_shortcode('[section-divider]')?>