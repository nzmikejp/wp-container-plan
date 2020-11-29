<?php

    $link = get_field('button');

?>


<section class="section section-donate">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-4 headline-dim-light">
                <h2 data-aos="fade-up"><span class="headline-label"><?php the_field('dimention_comment')?></span><?php the_title()?></h2>
            </div>
            <div class="cell large-8 cell-content">
                <div data-aos="fade-up" data-aos-delay="50">
                    <?php the_content()?> 
                </div>
                <a href="<?php echo $link['url']?>" class="button button-custom" data-aos="fade-up" data-aos-delay="100"><?php echo $link['title']?></a>
            </div>
        </div>
    </div>
</section>