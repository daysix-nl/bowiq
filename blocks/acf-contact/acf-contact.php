<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image1 = get_field('image-bg');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<!-- CONTACT -->
 <section class=" w-full">
    <div class="bg-[#e7e2dd]">
        <div class="container pt-[60px] pb-[1x] relative z-[6] bg-[#e7e2dd]">
            <h2 class="text-32 leading-40 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title');?></h2>
            <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-[2px] rounded-t-[6px] overflow-hidden">
                <div class="col-span-1 bg-white px-[30px] py-[45px]">
                    <h3 class="text-28 leading-30 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title_block_1');?></h3>
                    <?php
                    if( have_rows('specialists') ):
                        while( have_rows('specialists') ) : the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                         <div class="my-[20px]">
                            <div class="h-[80px] w-[80px] rounded-full overflow-hidden">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-cover">
                            </div>
                            <div class="text-16 leading-26 font-normal mt-[15px] text-editor">
                                <?php echo get_sub_field('text');?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                </div>
                <div class="col-span-1 lg:col-span-2 bg-white px-[30px] py-[45px]>
                    <h3 class="text-28 leading-30 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title_block_2');?></h3>
                    <div class="formulier">
                        <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#e7e2dd] pb-[400px] overflow-hidden relative">
        <div class="container relative z-[6]">
            <div class="bg-[#e7e2dd] pt-[1px] rounded-b-[6px] overflow-hidden">
                <div class="w-full grid grid-cols-1 lg:grid-cols-3 gap-[2px]">
                    <div class="col-span-1 bg-white px-[30px] py-[45px]">
                        <h3 class="text-28 leading-30 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title_block_3');?></h3>
                        <div class="text-16 leading-26 font-normal text-editor">
                            <?php echo get_field('text_block_3');?>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white p-[30px] px-[30px] py-[45px]">
                        <h3 class="text-28 leading-30 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title_block_4');?></h3>
                        <div class="text-16 leading-26 font-normal text-editor">
                            <?php echo get_field('text_block_4');?>
                        </div>
                    </div>
                    <div class="col-span-1 bg-white p-[30px] px-[30px] py-[45px]">
                        <h3 class="text-28 leading-30 text-[#6d5959] font-medium mb-[30px]"><?php echo get_field('title_block_5');?></h3>
                        <div class="text-16 leading-26 font-normal text-editor">
                           <?php echo get_field('text_block_5');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (get_field('image-bg')): ?> 
            <div class="absolute top-0 left-0 right-0 bottom-0 z-[5]">
                <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="h-full min-h-full min-w-full object-cover">
            </div>
        <?php endif; ?>
    </div>
 </section>
<?php endif; ?>
