<section class="section section-standard">
    <div class="grid-container">
        <div class="grid-x align-middle">
            <div class="cell large-9">
                <h1 data-aos="fade-up"><?php the_title()?></h1>
                <h2 class="h2" data-aos="fade-up" data-aos-delay="50"><?php the_field('subtitle')?></h2>
            </div>
            <div class="cell large-8" data-aos="fade-up" data-aos-delay="100">
                <?php the_content()?>
            </div>
        </div>
    </div>
</section>