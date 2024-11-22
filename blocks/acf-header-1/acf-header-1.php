<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('image');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- HEADER 1 -->
 <section>
    <div class="w-full h-[calc(100dvh-75px)] md:h-[calc(100dvh-75px)] lg:h-[calc(100dvh-70px)] xl:h-[calc(100dvh-85px)] relative">
        <?php if (get_field('image')): ?>   
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover absolute top-0 right-0 -z-10">
        <?php endif; ?>
        <?php if (get_field('video')): ?>   
            <video class="w-full h-full object-cover absolute top-0 right-0 -z-10" autoplay="" loop="" muted="" playsinline="">
            <source src="<?php echo get_field('video');?>#t=0.001" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
        <?php endif; ?>
        <div class="overlay-home"></div>
        <div class="absolute top-0 left-0 right-0 bottom-0">
        <div class="h-full w-full flex items-center">
            <div class="container mb-[75px] lg:mb-[70px] xl:mb-[85px]">
                <h1 class="text-white text-40 leading-48 md:text-45 md:leading-53 lg:text-60 lg:leading-68 md:text-center font-medium max-w-[800px] mx-auto"><?php echo get_field('title');?></h1>
                <div class="w-full max-w-[250px] md:max-w-[unset] flex flex-col md:flex-row justify-center space-y-[15px] md:space-y-[unset] md:space-x-[20px] mt-[30px]">
                    <?php
                    if( have_rows('button') ):
                        while( have_rows('button') ) : the_row(); ?>
                        <?php
                            $link = get_sub_field('button_item');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a href="<?php echo $link_url; ?>" class="text-white h-[43px] border-white border-[2px] rounded-full px-[30px] flex items-center md:justify-center lg:hover:bg-white lg:hover:text-black duration-300 min-w-[180px] font-medium" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php endif; ?>
