<div id="slider-introduce" class="slider-introduce">
    <?php if( have_rows('main_slider') ): ?>
    <div class="swiper main-slider">
        <div class="swiper-wrapper">
            <?php while( have_rows('main_slider') ): the_row(); 
                $image_banner_homepage = get_sub_field('slide_img');
            ?>
            <div class="swiper-slide">
                <div class="slide1">
                    <img width="100%" class="bg-greenlight" src="<?php echo $image_banner_homepage['url'];?>" alt="<?php echo $title_banner_homepage;?>" />
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="swiper-button-left">
            <img src="<?php echo ASSETS_URI?>/images/svgs/arrowleft.svg" alt="arrowleft" width="20px" height="40px" />
        </div>
        <div class="swiper-button-right">
            <img src="<?php echo ASSETS_URI?>/images/svgs/arrowright.svg" alt="arrowright" width="20px" height="40px" />
        </div>
    </div>
    <?php endif; ?> 
</div>