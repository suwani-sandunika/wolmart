<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Marketplace HTML5 Template</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
      
 <!-- Start of Header -->

 <?php

require "header.php" ;


?>


  <!-- End of Header -->




        <!-- Start of Main-->
        <main class="main">
            <section class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="assets/images/demos/demo1/sliders/shoes.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                                </figure>
                                <div class="banner-content y-50 text-right">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                        Custom <span class="p-relative d-inline-block">Men’s</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                        RUNNING SHOES
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                        Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                                    </p>

                                    <a href="shop-list.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide1 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-2.jpg); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/demos/demo1/sliders/men.png" alt="Banner"
                                        data-bottom-top="transform: translateX(10vh);"
                                        data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                                </figure>
                                <div class="banner-content d-inline-block y-50">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        Mountain-<span class="text-secondary">Climbing</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Hot & Packback
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        Only until the end of this week.
                                    </p>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '1s'
                                    }">
                                        SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide2 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-3.jpg); background-color: #f0f1f2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/demos/demo1/sliders/skate.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                                </figure>
                                <div class="banner-content text-right y-50">
                                    <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">
                                        Top weekly Seller
                                    </p>
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Trending Collection
                                    </h5>
                                    <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }"><span class="text-white mr-4">Roller</span>-skate
                                    </h3>
                                    <div class="btn-group slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        <a href="shop-list.html"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                            NOW<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                <!-- End of .container -->
                            </div>
                        </div>
                        <!-- End of .intro-slide3 -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <!-- End of .swiper-container -->
            </section>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/1-1.jpg" alt="Category Banner"
                                    width="610" height="160" style="background-color: #ecedec;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                        class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                                </h5>
                                <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                        class="font-weight-normal                       text-capitalize">Collection</span>
                                </h3>
                                <div class="banner-price-info font-weight-normal">Starting at <span
                                        class="text-secondary                       font-weight-bolder">$170.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/1-2.jpg" alt="Category Banner"
                                    width="610" height="160" style="background-color: #636363;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                                <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                        class="font-weight-normal text-capitalize">Collection</span></h3>
                                <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                                    <span class="text-secondary font-weight-bolder">$90.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                                Deals Hot of The Day
                            </h4>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-6">
                                                    <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-1-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-2-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-3-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-4-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                            <div class="product-label-group">
                                                                <label class="product-label label-discount">25%
                                                                    Off</label>
                                                            </div>
                                                        </div>
                                                        <div class="product-thumbs-wrap swiper-container"
                                                            data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                            <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/1-1-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/1-2-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/1-3-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/1-4-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a
                                                                href="product-default.html">Coat Pool
                                                                Comfort Jacket</a></h2>

                                                        <hr class="product-divider">

                                                        <div class="product-price"><ins class="new-price ls-50">$150.00
                                                                -
                                                                $180.00</ins></div>

                                                        <div class="product-countdown-container flex-wrap">
                                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                                            <div class="product-countdown countdown-compact"
                                                                data-until="2022, 12, 31" data-compact="true">
                                                                629 days, 11: 59: 52</div>
                                                        </div>

                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                        </div>

                                                        <div
                                                            class="product-form product-variation-form product-size-swatch mb-3">
                                                            <label class="mb-1">Size:</label>
                                                            <div
                                                                class="flex-wrap d-flex align-items-center product-variations">
                                                                <a href="#" class="size">Extra Large</a>
                                                                <a href="#" class="size">Large</a>
                                                                <a href="#" class="size">Medium</a>
                                                                <a href="#" class="size">Small</a>
                                                            </div>
                                                            <a href="#" class="product-variation-clean">Clean All</a>
                                                        </div>

                                                        <div class="product-variation-price">
                                                            <span></span>
                                                        </div>

                                                        <div class="product-form pt-4">
                                                            <div class="product-qty-form mb-2 mr-2">
                                                                <div class="input-group">
                                                                    <input class="quantity form-control" type="number"
                                                                        min="1" max="10000000">
                                                                    <button class="quantity-plus w-icon-plus"></button>
                                                                    <button
                                                                        class="quantity-minus w-icon-minus"></button>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-cart">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>

                                                        <div class="social-links-wrapper mt-1">
                                                            <div class="social-links">
                                                                <div class="social-icons social-no-color border-thin">
                                                                    <a href="#"
                                                                        class="social-icon social-facebook w-icon-facebook"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-twitter w-icon-twitter"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                                </div>
                                                            </div>
                                                            <span class="divider d-xs-show"></span>
                                                            <div class="product-link-wrapper d-flex">
                                                                <a href="#"
                                                                    class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                                <a href="#"
                                                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-6">
                                                    <div
                                                        class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div
                                                            class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/2-1-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/2-2-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/2-3-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
                                                                            data-zoom-image="assets/images/demos/demo1/products/2-4-800x900.jpg"
                                                                            alt="Product Image" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                            <div class="product-label-group">
                                                                <label class="product-label label-discount">25%
                                                                    Off</label>
                                                            </div>
                                                        </div>
                                                        <div class="product-thumbs-wrap swiper-container"
                                                            data-swiper-options="{
                                                            'breakpoints': {
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                            <div
                                                                class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/2-1-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/2-2-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/2-3-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="assets/images/demos/demo1/products/2-4-600x675.jpg"
                                                                        alt="Product thumb" width="60" height="68" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a
                                                                href="product-default.html">Coat Pool
                                                                Comfort Jacket</a></h2>

                                                        <hr class="product-divider">

                                                        <div class="product-price"><ins class="new-price ls-50">$150.00
                                                                -
                                                                $180.00</ins></div>

                                                        <div class="product-countdown-container flex-wrap">
                                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                                            <div class="product-countdown countdown-compact"
                                                                data-until="2022, 12, 31" data-compact="true">
                                                                629 days, 11: 59: 52</div>
                                                        </div>

                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                        </div>

                                                        <div
                                                            class="product-form product-variation-form product-size-swatch mb-3">
                                                            <label class="mb-1">Size:</label>
                                                            <div
                                                                class="flex-wrap d-flex align-items-center product-variations">
                                                                <a href="#" class="size">Extra Large</a>
                                                                <a href="#" class="size">Large</a>
                                                                <a href="#" class="size">Medium</a>
                                                                <a href="#" class="size">Small</a>
                                                            </div>
                                                            <a href="#" class="product-variation-clean">Clean All</a>
                                                        </div>

                                                        <div class="product-variation-price">
                                                            <span></span>
                                                        </div>

                                                        <div class="product-form pt-4">
                                                            <div class="product-qty-form mb-2 mr-2">
                                                                <div class="input-group">
                                                                    <input class="quantity form-control" type="number"
                                                                        min="1" max="10000000">
                                                                    <button class="quantity-plus w-icon-plus"></button>
                                                                    <button
                                                                        class="quantity-minus w-icon-minus"></button>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-cart">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>

                                                        <div class="social-links-wrapper mt-1">
                                                            <div class="social-links">
                                                                <div class="social-icons social-no-color border-thin">
                                                                    <a href="#"
                                                                        class="social-icon social-facebook w-icon-facebook"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-twitter w-icon-twitter"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                                    <a href="#"
                                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                                </div>
                                                            </div>
                                                            <span class="divider d-xs-show"></span>
                                                            <div class="product-link-wrapper d-flex">
                                                                <a href="#"
                                                                    class="btn-product-icon btn-wishlist w-icon-heart"></a>
                                                                <a href="#"
                                                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                                    Seller</h4>
                                <div class="swiper">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">
                                        <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                            <div class="swiper-slide product-widget-wrap">
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-1.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Kitchen Cooker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$150.60</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-2.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Professional Pixel Camera</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$215.68</ins><del
                                                                class="old-price">$230.45</del>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-3.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Sport Women’s Wear</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$220.20</ins><del
                                                                class="old-price">$300.62</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide product-widget-wrap">
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-4.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Latest Speaker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$250.68</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-5.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Men's Black Wrist Watch</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$135.60</ins><del
                                                                class="old-price">$155.70</del>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-6.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Wash Machine</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$215.68</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide product-widget-wrap">
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-7.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Security Guard</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$320.00</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-8.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Apple Super Notecom</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$243.30</ins><del
                                                                class="old-price">$253.50</del>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-9.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">HD Television</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$450.68</ins><del
                                                                class="old-price">$500.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->
            </div>

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-1.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Fashion</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-2.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Furniture</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-3.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Shoes</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-4.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Sports</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-5.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Games</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="shop-banner-sidebar.html" class="category-media">
                                        <img src="assets/images/demos/demo1/categories/2-6.jpg" alt="Category"
                                            width="130" height="130">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name">Computers</h4>
                                        <a href="shop-banner-sidebar.html"
                                            class="btn btn-primary btn-link btn-underline">Shop
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of .category-section top-category -->

            <div class="container">
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                        </li>
                        <li class="nav-item mr-0 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    <div class="tab-pane active pt-4" id="tab1-1">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-2">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-3">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-4">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-4-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-4-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Fashion Blue Towel</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(8 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.55 - $29.99</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-10.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s hairdye</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$173.84</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-9.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Data Transformer Tool
                                            </a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <span class="price">$64.47</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-8-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-8-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Comfortable Backpack</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(6 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$45.90</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s White
                                                Handbag</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 80%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$26.62</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-5.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">4% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Apple Super Notecom</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(4 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$243.30</ins>
                                            <del class="old-price">$253.50</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-3.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                        <div class="product-label-group">
                                            <label class="product-label label-discount">7% Off</label>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi Funtional Apple
                                                iPhone</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(5 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">136.26</ins>
                                            <del class="old-price">$145.90</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-7.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Multi-colorful Music</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$260.59 - $297.83</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-6-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-6-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Women’s Comforter</a>
                                        </h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 100%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(10 reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$32.00 - $33.26</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="product-default.html">
                                            <img src="assets/images/demos/demo1/products/3-1-1.jpg" alt="Product"
                                                width="300" height="338" />
                                            <img src="assets/images/demos/demo1/products/3-1-2.jpg" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="product-default.html">Classic Hat</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="product-default.html" class="rating-reviews">(1 Reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$53.00</ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                </div>
                <!-- End of Tab Content -->

                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/3-1.jpg" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                                    Makeup<br>Professional</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="assets/images/demos/demo1/categories/3-2.jpg" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                                    Lifestyle<br>Collection</h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right">Shop Now<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Cosmetic Lifestyle -->

                <div class="product-wrapper-1 appear-animate mb-5">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Clothing & Apparel</h2>
                        <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/2.jpg); 
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                        New Arrivals<br> <span
                                            class="font-weight-normal text-capitalize">Collection</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-1.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Men’s
                                                        Clothing</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$23.99</ins><del
                                                        class="old-price">$25.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-5-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/4-5-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Best Travel
                                                        Bag</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$25.68</ins><del
                                                        class="old-price">$28.99</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-2-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/4-2-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Women’s Fashion
                                                        Handbag </a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$25.68</ins><del
                                                        class="old-price">$25.89</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-6.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Gray Leather
                                                        Shoes</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$26.88</ins><del
                                                        class="old-price">$27.89</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-3.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Black Winter
                                                        Skating</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$40.86</ins><del
                                                        class="old-price">$45.89</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-7.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Men's Black
                                                        Wrist
                                                        Watch</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$135.60</ins><del
                                                        class="old-price">$155.70</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-4-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/4-4-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Sport Women's
                                                        Wear</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$220.20</ins><del
                                                        class="old-price">$300.62</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="#">
                                                    <img src="assets/images/demos/demo1/products/4-8.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Women’s Hiking
                                                        Hat</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <span class="price">$53.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="product-wrapper-1 appear-animate mb-8">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Consumer Electric</h2>
                        <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/3.jpg); 
                            background-color: #252525;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                                    <hr class="banner-divider bg-white mb-2">
                                    <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                        Top Camera <br> <span
                                            class="font-weight-normal text-capitalize">Mirrorless</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-white btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-1-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/5-1-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">6% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Professional
                                                        Pixel
                                                        Camera</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins><del
                                                        class="old-price">$230.45</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-5.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Latest
                                                        Speaker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$250.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-2-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/5-2-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Wash Machine</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-6.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Security
                                                        Guard</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$320.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-3.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">10% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">HD
                                                        Television</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$450.68</ins><del
                                                        class="old-price">$500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-7.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">10% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">USB Receipt</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$26.89</ins><del
                                                        class="old-price">$29.79</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-4.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Data Transformer
                                                        Tool</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(6
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$64.47</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/5-8.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">7% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Multi Functional
                                                        Apple iPhone</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$136.26</ins><del
                                                        class="old-price">$145.90</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
                    background-color: #383839;">
                    <div class="banner-content align-items-center">
                        <div class="content-left d-flex align-items-center mb-3">
                            <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                25
                                <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                            </div>
                            <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                        </div>
                        <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                            <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                    Fashion</h3>
                                <p class="text-white mb-0">Use code
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                            </div>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Fashion -->

                <div class="product-wrapper-1 appear-animate mb-7">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Home Garden & Kitchen</h2>
                        <a href="shop-boxed-banner.html" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/5.jpg); 
                            background-color: #EAEFF3;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                        Trending <br> <span class="font-weight-normal text-capitalize">House
                                            Utensil</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-1.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Home Sofa</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$75.99</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-5.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Electric
                                                        Rice-Cooker</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$215.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-2-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/6-2-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">21% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Kitchen
                                                        Table</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$75.50</ins><del
                                                        class="old-price">$95.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-6.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Kitchen
                                                        Cooker</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$150.60</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-3-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/6-3-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Table Lamp</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(3
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$45.60</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-7.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">12% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Electric Frying
                                                        Pan</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(5
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$137.35</ins><del
                                                        class="old-price">$155.65</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-4.jpg" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                                <div class="product-label-group">
                                                    <label class="product-label label-discount">18% Off</label>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Latest Chair</a>
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(6
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$70.00</ins><del
                                                        class="old-price">$85.00</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="product-default.html">
                                                    <img src="assets/images/demos/demo1/products/6-8-1.jpg"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="assets/images/demos/demo1/products/6-8-2.jpg"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                        title="Add to cart"></a>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                        title="Quickview"></a>
                                                    <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                        title="Add to Compare"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="product-default.html">Automatic
                                                        Crusher</a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="product-default.html" class="rating-reviews">(9
                                                        reviews)</a>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$220.25</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Clients</h2>
                <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
                    <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/1.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/2.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/3.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/4.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/5.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/6.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/7.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/8.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/9.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/10.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/11.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            <figure class="brand-wrapper">
                                <img src="assets/images/demos/demo1/brands/12.png" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End of Brands Wrapper -->

                <div class="post-wrapper appear-animate mb-4">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">From Our Blog</h2>
                        <a href="blog-listing.html" class="font-weight-bold font-size-normal">View All Articles</a>
                    </div>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme" data-swiper-options="{
                            'slidesPerView': 1,
                            'spaceBetween': 20,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
                            <div class="swiper-wrapper row cols-lg-4 cols-md-3 cols-sm-2 cols-1">
                                <div class="swiper-slide post text-center overlay-zoom">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="assets/images/demos/demo1/blogs/1.jpg" alt="Post" width="280"
                                                height="180" style="background-color: #4b6e91;" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.html">Aliquam tincidunt mauris
                                                eurisus</a>
                                        </h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                            More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post text-center overlay-zoom">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="assets/images/demos/demo1/blogs/2.jpg" alt="Post" width="280"
                                                height="180" style="background-color: #cec9cf;" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.html">Cras ornare tristique elit</a>
                                        </h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                            More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post text-center overlay-zoom">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="assets/images/demos/demo1/blogs/3.jpg" alt="Post" width="280"
                                                height="180" style="background-color: #c9c7bb;" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.html">Vivamus vestibulum ntulla nec
                                                ante</a>
                                        </h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                            More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="swiper-slide post text-center overlay-zoom">
                                    <figure class="post-media br-sm">
                                        <a href="post-single.html">
                                            <img src="assets/images/demos/demo1/blogs/4.jpg" alt="Post" width="280"
                                                height="180" style="background-color: #d8dce0;" />
                                        </a>
                                    </figure>
                                    <div class="post-details">
                                        <div class="post-meta">
                                            by <a href="#" class="post-author">John Doe</a>
                                            - <a href="#" class="post-date mr-0">03.05.2021</a>
                                        </div>
                                        <h4 class="post-title"><a href="post-single.html">Fusce lacinia arcuet nulla</a>
                                        </h4>
                                        <a href="post-single.html" class="btn btn-link btn-dark btn-underline">Read
                                            More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <!-- Post Wrapper -->

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
                <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-4 mb-8" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 5
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                    }
                }">
                    <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-1.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Women's Fashion Handbag</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-2.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Electric Frying Pan</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-3.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Black Winter Skating</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-4.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">HD Television</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-5.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Home Sofa</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-6.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">USB Receipt</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-7.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Electric Rice-Cooker</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                        <div class="swiper-slide product-wrap mb-0">
                            <div class="product text-center product-absolute">
                                <figure class="product-media">
                                    <a href="product-defaproduct-default.html">
                                        <img src="assets/images/demos/demo1/products/7-8.jpg" alt="Category image"
                                            width="130" height="146" style="background-color: #fff" />
                                    </a>
                                </figure>
                                <h4 class="product-name">
                                    <a href="product-default.html">Table Lamp</a>
                                </h4>
                            </div>
                        </div>
                        <!-- End of Product Wrap -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- End of Reviewed Producs -->
            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->

        <!-- Start of Footer -->
       <?php 
       
       require "footer.php" ;
       
       ?>
        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->
    <?php
    
    
    require "sticky-footer.php" ;
    
    
    ?>



    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" class="scroll-top" href="#top" title="Top" role="button"> <i class="w-icon-angle-up"></i> <svg
            version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <circle id="progress-indicator" fill="transparent" stroke="#000000" stroke-miterlimit="10" cx="35" cy="35"
                r="34" style="stroke-dasharray: 16.4198, 400;"></circle>
        </svg> </a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->
    <?php
    
    require "mobile-menu.php" ;
    
    ?>
    <!-- End of Mobile Menu -->

    
    <!-- Start of Quick View -->
    <div class="product product-single product-popup">
        <div class="row gutter-lg">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="product-gallery product-gallery-sticky">
                    <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                        <div class="swiper-wrapper row cols-1 gutter-no">
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/1-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/1-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/2-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/2-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/3-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/3-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="product-image">
                                    <img src="assets/images/products/popup/4-440x494.jpg"
                                        data-zoom-image="assets/images/products/popup/4-800x900.jpg"
                                        alt="Water Boil Black Utensil" width="800" height="900">
                                </figure>
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                        'navigation': {
                            'nextEl': '.swiper-button-next',
                            'prevEl': '.swiper-button-prev'
                        }
                    }">
                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/1-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/2-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/3-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                            <div class="product-thumb swiper-slide">
                                <img src="assets/images/products/popup/4-103x116.jpg" alt="Product Thumb" width="103"
                                    height="116">
                            </div>
                        </div>
                        <button class="swiper-button-next"></button>
                        <button class="swiper-button-prev"></button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 overflow-hidden p-relative">
                <div class="product-details scrollable pl-0">
                    <h2 class="product-title">Electronics Black Wrist Watch</h2>
                    <div class="product-bm-wrapper">
                        <figure class="brand">
                            <img src="assets/images/products/brand/brand-1.jpg" alt="Brand" width="102" height="48" />
                        </figure>
                        <div class="product-meta">
                            <div class="product-categories">
                                Category:
                                <span class="product-category"><a href="#">Electronics</a></span>
                            </div>
                            <div class="product-sku">
                                SKU: <span>MS46891340</span>
                            </div>
                        </div>
                    </div>

                    <hr class="product-divider">

                    <div class="product-price">$40.00</div>

                    <div class="ratings-container">
                        <div class="ratings-full">
                            <span class="ratings" style="width: 80%;"></span>
                            <span class="tooltiptext tooltip-top"></span>
                        </div>
                        <a href="#" class="rating-reviews">(3 Reviews)</a>
                    </div>

                    <div class="product-short-desc">
                        <ul class="list-type-check list-style-none">
                            <li>Ultrices eros in cursus turpis massa cursus mattis.</li>
                            <li>Volutpat ac tincidunt vitae semper quis lectus.</li>
                            <li>Aliquam id diam maecenas ultricies mi eget mauris.</li>
                        </ul>
                    </div>

                    <hr class="product-divider">

                    <div class="product-form product-variation-form product-color-swatch">
                        <label>Color:</label>
                        <div class="d-flex align-items-center product-variations">
                            <a href="#" class="color" style="background-color: #ffcc01"></a>
                            <a href="#" class="color" style="background-color: #ca6d00;"></a>
                            <a href="#" class="color" style="background-color: #1c93cb;"></a>
                            <a href="#" class="color" style="background-color: #ccc;"></a>
                            <a href="#" class="color" style="background-color: #333;"></a>
                        </div>
                    </div>
                    <div class="product-form product-variation-form product-size-swatch">
                        <label class="mb-1">Size:</label>
                        <div class="flex-wrap d-flex align-items-center product-variations">
                            <a href="#" class="size">Small</a>
                            <a href="#" class="size">Medium</a>
                            <a href="#" class="size">Large</a>
                            <a href="#" class="size">Extra Large</a>
                        </div>
                        <a href="#" class="product-variation-clean">Clean All</a>
                    </div>

                    <div class="product-variation-price">
                        <span></span>
                    </div>

                    <div class="product-form">
                        <div class="product-qty-form">
                            <div class="input-group">
                                <input class="quantity form-control" type="number" min="1" max="10000000">
                                <button class="quantity-plus w-icon-plus"></button>
                                <button class="quantity-minus w-icon-minus"></button>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cart">
                            <i class="w-icon-cart"></i>
                            <span>Add to Cart</span>
                        </button>
                    </div>

                    <div class="social-links-wrapper">
                        <div class="social-links">
                            <div class="social-icons social-no-color border-thin">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                <a href="#" class="social-icon social-youtube fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <span class="divider d-xs-show"></span>
                        <div class="product-link-wrapper d-flex">
                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                            <a href="#"
                                class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Quick view -->

    <!-- Plugin JS File -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery.plugin/jquery.plugin.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/zoom/jquery.zoom.js"></script>
    <script src="assets/vendor/jquery.countdown/jquery.countdown.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/skrollr/skrollr.min.js"></script>

    <!-- Swiper JS -->
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>