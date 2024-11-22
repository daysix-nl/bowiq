<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php if (is_front_page() || is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { wp_title(''); echo ' - '; bloginfo('name'); } ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block bowiq products-nonactive' ); ?>>
    <header class="bg-white h-[75px] lg:h-[70px] xl:h-[85px] fixed top-0 left-0 right-0 z-[9999] border-b-[#EAEAEA] border-b-[1px]">
        <div class="w-full px-[15px] md:px-[30px] lg:px-[60px] h-[75px] lg:h-[70px] xl:h-[85px] flex items-center justify-between">

            <div class="w-[150px] hidden lg:block">
                <button id="products" class="font-medium nav-item-products text-[#6D5959]">Products</button>
            </div>
            <div class="h-[40px] w-[150px] lg:hidden"></div>
            <a href="/" class="h-[55px] flex justify-center items-center">
                <img src="/wp-content/themes/bowiq/img/local/logov2.png" alt="" class="h-full w-auto">
            </a>
            <div class="h-[40px] w-[150px]"></div>

        </div>

    </header>
    <div class="h-[75px] lg:h-[70px] xl:h-[85px]"></div>


    <div id="product-dropdown" class="fixed left-[15px] md:left-[30px] lg:left-[60px] top-[75px] lg:top-[70px] xl:top-[85px] bg-white z-[9998] rounded-b-[20px] hidden lg:block">
        <div class="px-[30px] pb-[25px] pt-[10px] flex space-x-[0px]">
            <a href="/product/bocoustic/" class="w-[200px] lg:hover:scale-[1.05] duration-300">
                <div class="w-[200px] h-auto">
                    <img src="/wp-content/themes/bowiq/img/local/bocoustic_packshot.png" alt="">
                </div>
                <p class="text-center font-medium mt-[0px] text-[#6D5959]">BoCoustic</p>
            </a>
            <a href="/product/bospray/" class="w-[200px] lg:hover:scale-[1.05] duration-300">
                 <div class="w-[200px] h-auto">
                    <img src="/wp-content/themes/bowiq/img/local/bospray_packshot.png" alt="">
                </div>
                <p class="text-center font-medium mt-[0px] text-[#6D5959]">BoSpray</p>
            </a>
        </div>
    </div>
    <div class="overlay-dropdown"></div>