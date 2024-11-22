<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- PRODUCT -->
 <section class="bg-white">
    <a href="/">
        <div class="container mt-[30px] flex space-x-[10px] text-12 leading-12 font-medium"><span class="px-[15px] py-[6px] bg-[#e7e2dd] text-[#6D5959] rounded-full">Back</span></div>
    </a>
    <div class="container mt-[20px] mb-[80px]">
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-[30px]">
            <div class="w-full">
                <div class="w-full aspect-[1/1] overflow-hidden">
                     <?php if (get_field('product_video')): ?>   
                        <video class="w-full h-full object-cover" autoplay="" loop="" muted="" playsinline="">
                        <source src="<?php echo get_field('product_video');?>#t=0.001" type="video/mp4">
                        Your browser does not support HTML5 video.
                        </video>
                    <?php endif; ?>
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="h-full min-h-full min-w-full object-center object-cover">
                </div>
            </div>
            <div class="">
                <div class="w-full lg:pl-[60px] lg:pt-[30px]">
                    <h1 class="text-28 leading-30 font-medium"><?php the_title();?></h1>
                    <?php if (get_field('text')): ?> 
                    <div class="text-16 leading-26 font-normal mt-[20px] lg:mt-[30px] text-editor"><?php echo get_field('text');?></div>
                    <?php endif; ?>
                    <?php if (get_field('colours')): ?>  
                    <div class="w-full grid grid-cols-3 md:grid-cols-5 gap-[10px] mt-[30px]">
                        <?php
                        if( have_rows('colours') ):
                            while( have_rows('colours') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('image');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <div class="w-full aspect-[1/1] shadow-md relative">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full min-h-full min-w-full object-center object-cover">
                                <p class="text-10 md:text-12 <?php echo get_sub_field('title_colour');?> top-[10px] left-[10px] absolute"><?php echo get_sub_field('title');?></p>
                            </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_field('downloads')): ?>  
                    <div class="w-full bg-[#e7e2dd] px-[30px] pt-[30px] pb-[40px] mt-[30px] rounded-[20px]">
                        <h2 class="text-18 leading-18 font-medium mb-[25px]">Downloads</h2>
                        <div class="grid md:grid-cols-2 gap-[20px]">
                            <?php
                            if( have_rows('downloads') ):
                                while( have_rows('downloads') ) : the_row(); ?>
                                <?php
                                $link = get_sub_field('link');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                                ?>
                                 <a href="<?php echo $link_url; ?>" class="flex items-top text-15 leading-21 font-normal lg:hover:opacity-[0.6] lg:duration-300" target="_blank">
                                    <div class="w-[20px] h-[20px] mr-[15px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <path id="download-solid" d="M11.25,1.25a1.25,1.25,0,0,0-2.5,0v9.48L5.883,7.863a1.251,1.251,0,0,0-1.77,1.77l5,5a1.252,1.252,0,0,0,1.77,0l5-5a1.251,1.251,0,0,0-1.77-1.77L11.25,10.73ZM2.5,13.75A2.5,2.5,0,0,0,0,16.25V17.5A2.5,2.5,0,0,0,2.5,20h15A2.5,2.5,0,0,0,20,17.5V16.25a2.5,2.5,0,0,0-2.5-2.5H13.535l-1.77,1.77a2.5,2.5,0,0,1-3.535,0L6.465,13.75Zm14.375,2.188a.938.938,0,1,1-.937.938A.938.938,0,0,1,16.875,15.938Z"/>
                                    </svg>
                                    </div>
                                    <span class="mt-[1px]"><?php echo $link_text; ?></span>
                                </a>
                                <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (get_field('project_slider')): ?>   
    <div class="w-full my-[80px]">
        <div class="swiper mySwiper pb-[91px] md:pb-[110px] lg:pb-[unset]">
            <div class="swiper-wrapper">
                <?php
                    if( have_rows('project_slider') ):
                        while( have_rows('project_slider') ) : the_row(); ?>
                        <?php
                            $image = get_sub_field('image');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                        <div class="swiper-slide w-full">
                            <div class="h-full aspect-[16/11] overflow-hidden relative">
                                <?php if (get_sub_field('image')): ?>  
                                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover">
                                <?php endif; ?>
                                <?php if (get_sub_field('video')): ?>   
                                    <video class="w-full h-full object-cover" muted="" controls controlslist="nodownload"  playsinline="">
                                    <source src="<?php echo get_sub_field('video');?>#t=0.001" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                    </video>
                                 <?php endif; ?>
                                 <?php if (get_sub_field('title')): ?>  
                                    <div class="absolute top-[15px] left-[15px]">
                                        <p class="text-12 leading-12 md:text-14 md:leading-14 text-white"><?php echo get_sub_field('title');?></p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    else :
                    endif;
                ?>
            </div>
            <div class="container">
                <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76">
                    <g id="Group_2016" data-name="Group 2016" transform="translate(-120.5 -3255.979)">
                        <path id="Path_77" data-name="Path 77" d="M38,0A38,38,0,1,1,0,38,38,38,0,0,1,38,0Z" transform="translate(120.5 3255.979)" fill="#56453E"/>
                        <path id="arrow-sm-right-svgrepo-com" d="M16.525,23.739h28.8m0,0L28.589,7m18.2,15.4-18.2,18.078" transform="translate(126.644 3270.24)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/>
                    </g>
                </svg>
                </div>
                <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76">
                    <g id="Group_2017" data-name="Group 2017" transform="translate(-39.5 -3255.979)">
                        <path id="Path_76" data-name="Path 76" d="M38,0A38,38,0,1,1,0,38,38,38,0,0,1,38,0Z" transform="translate(39.5 3255.979)" fill="#56453E"/>
                        <path id="arrow-sm-right-svgrepo-com" d="M16.525,23.739h28.8m0,0L28.589,7m18.2,15.4-18.2,18.078" transform="translate(111.293 3317.718) rotate(180)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="4"/>
                    </g>
                </svg>
                </div>
                <div class="swiper-scrollbar mt-[40px] lg:mb-[36px] lg:mt-[75px]"></div>
            </div>
           
        </div>
    </div>
    <?php endif; ?>
 </section>
<?php endif; ?>
