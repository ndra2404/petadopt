<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 03:56:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet adopt</title>
    <meta name="keywords" content="HTML5/CSS3 Template">
    <meta name="description" content="Pet adopt">
    <meta name="author" content="kitaberkarya">
    <meta name="theme-color" content="#ffffff">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets')}}/images/icons/favicon.png">
    <!-- Plugins bootstrap CSS File -->
    <link rel="stylesheet" href="{{url('lib')}}/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('lib')}}/bootstrap/bootstrap-grid.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{url('assets')}}/sass/style.css">
    <link rel="stylesheet" href="{{url('assets')}}/sass/base/header/header-8/header-8.css">
    <link rel="stylesheet" href="{{url('assets')}}/sass/skins/skin-8/skin-8.css">
    <link rel="stylesheet" href="{{url('assets')}}/sass/demos/demo-8/demo-8.css">
    <link rel="stylesheet" href="{{url('assets')}}/sass/base/footer/footer-8/footer-8.css">
    <!-- Plugins Slick CSS File -->
    <link rel="stylesheet" href="{{url('lib')}}/slick-carouse/slick.min.css">
    <!-- Plugins Animation CSS File -->
    <link rel="stylesheet" href="{{url('assets')}}/sass/base/animation/animation.css">
    <!-- Plugins Product CSS File -->
    <link rel="stylesheet" href="{{url('assets')}}/sass/base/product/component-product.css">
    <!-- Plugins Popup CSS File -->
    <link rel="stylesheet" href="{{url('assets')}}/sass/popup/popup.css">
    <!-- Plugins Sidebar CSS File -->
    <link rel="stylesheet" href="{{url('assets')}}/sass/sidebar/sidebar.css">
    <!-- Plugins Fancybox CSS File -->
    <link rel="stylesheet" href="{{url('lib')}}/fancybox/fancybox.css">
</head>

<body class="template-index skin-8">
    <div class="page-wrapper">
        <header class="header header-8 animate" data-header-sticky>
            <div class="header-top">
                <div class="container container-1370">
                    <div class="header-top--wrapper">
                        <div class="header-top--left header__logo text-left clearfix">
                            <h1 class="header__heading">
                                <a href="index-7.html" class="header__heading-link focus-inset">
                                    <img src="{{url('assets')}}/logo.png" alt="Ella - HTML Template">
                                </a>
                            </h1>
                        </div>
                        <div class="header-top--right header__icons text-right clearfix">
                            <div class="header__iconItem header__group text-right">
                                @auth
                                <a class="header__icon  header__link--account link-underline" id="customer_login_link" href="{{url('doLogout')}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account" viewBox="0 0 1024 1024" width="100%" height="100%"><title>user</title><path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path><path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path></svg>
                                    <span class="customer-links">Sign out</span>
                                </a>
                                @endauth
                                @guest
                                <a class="header__icon  header__link--account link-underline" id="customer_login_link" href="javascript:void(0)" data-open-auth-sidebar="">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account" viewBox="0 0 1024 1024" width="100%" height="100%"><title>user</title><path class="path1" d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z"></path><path class="path2" d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z"></path></svg>
                                    <span class="customer-links">Sign In</span>
                                </a>
                                @endguest
                                <a href="javascript:void(0)" class="header__icon header__icon--cart link link-underline focus-inset" id="cart-icon-bubble" data-open-cart-sidebar>
                                    <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                                        <path class="path1" d="M409.6 1024c-56.464 0-102.4-45.936-102.4-102.4s45.936-102.4 102.4-102.4S512 865.136 512 921.6 466.064 1024 409.6 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path>
                                        <path class="path2" d="M768 1024c-56.464 0-102.4-45.936-102.4-102.4S711.536 819.2 768 819.2s102.4 45.936 102.4 102.4S824.464 1024 768 1024zm0-153.6c-28.232 0-51.2 22.968-51.2 51.2s22.968 51.2 51.2 51.2 51.2-22.968 51.2-51.2-22.968-51.2-51.2-51.2z"></path>
                                        <path class="path3" d="M898.021 228.688C885.162 213.507 865.763 204.8 844.8 204.8H217.954l-5.085-30.506C206.149 133.979 168.871 102.4 128 102.4H76.8c-14.138 0-25.6 11.462-25.6 25.6s11.462 25.6 25.6 25.6H128c15.722 0 31.781 13.603 34.366 29.112l85.566 513.395C254.65 736.421 291.929 768 332.799 768h512c14.139 0 25.6-11.461 25.6-25.6s-11.461-25.6-25.6-25.6h-512c-15.722 0-31.781-13.603-34.366-29.11l-12.63-75.784 510.206-44.366c39.69-3.451 75.907-36.938 82.458-76.234l34.366-206.194c3.448-20.677-1.952-41.243-14.813-56.424zm-35.69 48.006l-34.366 206.194c-2.699 16.186-20.043 32.221-36.39 33.645l-514.214 44.714-50.874-305.246h618.314c5.968 0 10.995 2.054 14.155 5.782 3.157 3.73 4.357 9.024 3.376 14.912z"></path>
                                    </svg>
                                    <span class="cart-text">My Cart</span>
                                    <div class="cart-count-bubble">
                                        <span class="text-count" aria-hidden="true" data-cart-count="">3</span><span class="visually-hidden">0 items</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END: Header Top -->
            <div class="header-bottom">
                @include('include.sidebar')
            </div><!-- END: Header Bottom -->
            <div class="header-mobile">
                <div class="container">
                    <div class="header-mobile--wrapper">
                        <div class="header-mobile--item header-mobile--left">
                            <div class="header-mobile--icon item__mobile--hamburger">
                                <a class="mobileMenu-toggle" href="javascript:void(0)" data-mobile-menu aria-label="menu">
                                    <span class="mobileMenu-toggle__Icon"></span>
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile--item header-mobile--center">
                            <div class="header-mobile--icon item-mobile-logo">
                                <a href="index-7.html" class="header__heading-link focus-inset">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/logo.png" alt="Ella - HTML Template">
                                </a>
                            </div>
                        </div>
                        <div class="header-mobile--item header-mobile--right">
                            <div class="header-mobile--icon icon-mobile-search">
                                <a class="mobileSearch-toggle" href="javascript:void(0)" data-mobile-search aria-label="menu">
                                    <svg data-icon="search" viewBox="0 0 512 512" width="100%" height="100%">
                                        <path d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="header-mobile--icon">
                                <a class="header__link--account link-underline" id="customer_login_link_mb" href="#" data-open-auth-sidebar="">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-account"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"></path></svg>
                                </a>
                            </div>
                            <div class="header-mobile--icon header__iconItem">
                                <a href="javascript:void(0)" class="header__icon header__icon--cart link link-underline focus-inset" id="cart-icon-bubble_mb" data-open-cart-sidebar="">
                                    <svg viewBox="0 0 30 30" class="icon icon-cart" enable-background="new 0 0 30 30"><g><g><path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path></g></g></svg>
                                    <span class="visually-hidden">Cart</span>
                                    <div class="cart-count-bubble">
                                        <span class="text-count" aria-hidden="true" data-cart-count="">3</span><span class="visually-hidden">0 items</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- END: Header Mobile -->
        </header><!-- End Header -->

        <main class="main">
            @yield("maincontent")


            <section class="halo-block halo-block-icon-with-text" data-banner-text-carousel data-item-to-show="3" data-item-dots="false" data-item-arrows="true" data-item-dots-mb="true" data-item-arrows-mb="false">
                <div class="halo-block-header text-center">
                    <h3 class="title">
                        <span class="text">Why Péties?</span>
                    </h3>
                </div>
                <div class="container container-1370">
                    <div class="halo-block-content">
                        <div class="banner-item ">
                            <div class="img-box img-box--mobile">
                                <a href="category-default.html" class="image image-adapt " style="padding-top: 21.897810219%">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-18.jpg" alt="Ella - HTML Template">
                                </a>
                                <a href="category-default.html" class="image image-mobile image-adapt" style="padding-top: 100%">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-18-mb.png" alt="Ella - HTML Template">
                                </a>
                            </div>
                            <div class="content-box content-box--center content-box--absolute text-left">
                                <div class="row">
                                    <div class="halo-row-item col-12 col-md-6 col-lg-4 ">
                                        <div class="wrapper-item">
                                            <div class="icon">
                                                <img src="{{url('assets')}}/images/banners/home/home-8/icon-1.png" alt="Ella - HTML Template">
                                            </div>
                                            <div class="content-box">
                                                <h3 class="title">
                                                    <span>Free Shipping over $99</span>
                                                </h3>
                                                <p class="desc">
                                                    Phasellus lorem malesuada ligula cosmopolis
                                                </p>
                                                <a href="#" class="link text-underline">
                                                    <span class="text">Shop Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="halo-row-item col-12 col-md-6 col-lg-4 ">
                                        <div class="wrapper-item">
                                            <div class="icon">
                                                <img src="{{url('assets')}}/images/banners/home/home-8/icon-2.png" alt="Ella - HTML Template">
                                            </div>
                                            <div class="content-box">
                                                <h3 class="title">
                                                    <span>Easy Free returns</span>
                                                </h3>
                                                <p class="desc">
                                                    Phasellus lorem malesuada ligula cosmopolis
                                                </p>
                                                <a href="#" class="link text-underline">
                                                    <span class="text">Find Out More</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="halo-row-item col-12 col-md-6 col-lg-4 ">
                                        <div class="wrapper-item">
                                            <div class="icon">
                                                <img src="{{url('assets')}}/images/banners/home/home-8/icon-3.png" alt="Ella - HTML Template">
                                            </div>
                                            <div class="content-box">
                                                <h3 class="title">
                                                    <span>Free Gift with purchase</span>
                                                </h3>
                                                <p class="desc">
                                                    Phasellus lorem malesuada ligula cosmopolis
                                                </p>
                                                <a href="#" class="link text-underline">
                                                    <span class="text">Learn How</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- END: halo block icon width text -->

        </main><!-- End Main -->

        <footer class="footer footer-8">
            <div class="footer-top">
                <div class="container container-1370">
                    <div class="footer-nav">
                        <div class="row">
                            <div class="halo-row-item col-footer col-12 col-lg-3 col-md-4">

                            </div>
                            <div class="halo-row-item col-footer col-12 col-lg-3 col-md-4">

                            </div>
                            <div class="halo-row-item col-footer col-12 col-lg-3 col-md-4">

                            </div>
                            <div class="halo-row-item col-footer col-custom-text col-12 col-lg-3 col-md-4">
                                <h3 class="footer-logo">
                                        <img src="{{url('assets/logo.png')}}" alt="">
                                </h3>
                                <div class="contact-info">
                                    <p style="line-height: 24px; margin-top: 37px;">
                                        <span class="icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12 fa-7x"><path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path></svg></span>
                                        <span>
                                        Cahaya Petshop, Jl. Raya Dramaga, RT.01/RW.01, margajaya, Kec. Bogot Barat Kota Bogor, Jawa Barat 16680
                                        </span>
                                    </p>
                                    <p style="line-height: 24px">
                                        <span class="icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-7x"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path></svg>
                                        </span>
                                        <span>Call us: <a href="tel:089652300366">089652300366</a></span>
                                    </p>
                                    <p>
                                        <span class="icon">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope fa-w-16 fa-7x"><path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z" class=""></path></svg></span>
                                        <span>Email: <a href="mailto:irsyancahya14@gmail.com" style="text-decoration: underline">irsyancahya14@gmail.com</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer-bottom">
                <div class="container container-1370">
                    <div class="row">
                        <div class="halo-row-item col-12 col-lg-6">
                            <span class="copyright__content">
                                <span>© 2023. All Rights Reserved</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- END: Footer -->

        <div class="halo-toolbar-bottom-mobile" id="halo-toolbar-bottom-mobile">
            <div class="halo-toolbar-wrapper">
                <div class="halo-toolbar-item toolbar-item-link">
                    <a href="index.html" class="link">
                        <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path d="M573.48 219.91L310.6 8a35.85 35.85 0 0 0-45.19 0L2.53 219.91a6.71 6.71 0 0 0-1 9.5l14.2 17.5a6.82 6.82 0 0 0 9.6 1L64 216.72V496a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V216.82l38.8 31.29a6.83 6.83 0 0 0 9.6-1l14.19-17.5a7.14 7.14 0 0 0-1.11-9.7zM240 480V320h96v160zm240 0H368V304a16 16 0 0 0-16-16H224a16 16 0 0 0-16 16v176H96V190.92l187.71-151.4a6.63 6.63 0 0 1 8.4 0L480 191z"></path>
                        </svg>
                        <span class="label">Home</span>
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a class="link mobileSearch-toggle" href="javascript:void(0)" data-mobile-search role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" class="icon icon-search" aria-hidden="true" focusable="false" role="presentation">
                            <path d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z"></path>
                        </svg>
                        <span class="label">Search</span>
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-link">
                    <a href="category-default.html" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384.97 384.97" aria-hidden="true" focusable="false" role="presentation" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
                            <path d="M144.364,0H24.061C10.767,0,0,10.767,0,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.779,24.061-24.061V24.061C168.424,10.767,157.657,0,144.364,0z M144.364,144.364H24.061V24.061h120.303    V144.364z"></path>
                            <path d="M360.909,0H240.606c-13.293,0-24.061,10.767-24.061,24.061v120.303c0,13.281,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.779,24.061-24.061V24.061C384.97,10.767,374.191,0,360.909,0z M360.909,144.364H240.606V24.061h120.303    V144.364z"></path>
                            <path d="M360.909,216.545H240.606c-13.293,0-24.061,10.779-24.061,24.061v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.281,0,24.061-10.767,24.061-24.061V240.606C384.97,227.313,374.191,216.545,360.909,216.545z M360.909,360.909H240.606    V240.606h120.303V360.909z"></path>
                            <path d="M144.364,216.545H24.061C10.767,216.545,0,227.325,0,240.606v120.303c0,13.293,10.767,24.061,24.061,24.061h120.303    c13.293,0,24.061-10.767,24.061-24.061V240.606C168.424,227.313,157.657,216.545,144.364,216.545z M144.364,360.909H24.061    V240.606h120.303V360.909z"></path>
                        </svg>
                    <span class="label">Collection</span></a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a href="#" class="link" data-open-auth-sidebar role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-account"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 22.085938 5 27 9.914063 27 16 C 27 22.085938 22.085938 27 16 27 C 9.914063 27 5 22.085938 5 16 C 5 9.914063 9.914063 5 16 5 Z M 16 8 C 13.25 8 11 10.25 11 13 C 11 14.515625 11.707031 15.863281 12.78125 16.78125 C 10.53125 17.949219 9 20.300781 9 23 L 11 23 C 11 20.226563 13.226563 18 16 18 C 18.773438 18 21 20.226563 21 23 L 23 23 C 23 20.300781 21.46875 17.949219 19.21875 16.78125 C 20.292969 15.863281 21 14.515625 21 13 C 21 10.25 18.75 8 16 8 Z M 16 10 C 17.667969 10 19 11.332031 19 13 C 19 14.667969 17.667969 16 16 16 C 14.332031 16 13 14.667969 13 13 C 13 11.332031 14.332031 10 16 10 Z"></path></svg>
                        <span class="label">Account</span>
                    </a>
                </div>
                <div class="halo-toolbar-item toolbar-item-action">
                    <a href="javascript:void(0)" class="icon--cart link" data-open-cart-sidebar="">
                        <svg viewBox="0 0 30 30" class="icon icon-cart" enable-background="new 0 0 30 30"><g><g><path d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3    h2V8h6v3h2V8h4V28z"></path></g></g></svg>
                        <span class="visually-hidden">Cart</span>
                        <span class="cart-count-bubble">
                            <span class="text-count" aria-hidden="true" data-cart-count="">3</span><span class="visually-hidden">3 items</span>
                        </span>
                        <span class="label">Cart</span>
                    </a>
                </div>
            </div>
        </div><!-- END: Toolbar Bottm Mobile -->

        <div class="background-overlay"></div>
        <div class="background-overlay-popup"></div>

        <div class="halo-popup halo-recently-viewed-popup" id="halo-recently-viewed-popup" data-product-to-show="" data-expire-day="">
            <div class="halo-recently-viewed recently-viewed-list recently-viewed-tab" id="halo-recently-viewed-list">
                <div class="recently-viewed-content">
                    <h3 class="recently-viewed-title text-center">Recently Viewed</h3>
                    <div class="products-grid recently-viewed-product" id="recently-viewed-products-list">
                        <div class="no-products">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455 455" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-no-product" aria-hidden="true" focusable="false" role="presentation" xml:space="preserve">
                                <g>
                                    <path d="M360.967,130.599c-4.06-0.818-8.018,1.8-8.841,5.86c-0.823,4.06,1.801,8.018,5.86,8.841
                                                     c1.147,0.232,2.013,1.286,2.013,2.45v160c0,1.355-1.145,2.5-2.5,2.5H179.676c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H357.5
                                                     c9.649,0,17.5-7.851,17.5-17.5v-160C375,139.46,369.099,132.247,360.967,130.599z"></path>
                                    <path d="M274.824,130.25H97.5c-9.649,0-17.5,7.851-17.5,17.5v160c0,8.063,5.48,15.046,13.326,16.982
                                                     c0.604,0.149,1.208,0.221,1.803,0.221c3.369,0,6.432-2.287,7.276-5.705c0.992-4.021-1.463-8.086-5.484-9.078
                                                     c-0.955-0.235-1.92-1.143-1.92-2.42v-160c0-1.355,1.145-2.5,2.5-2.5h177.324c4.142,0,7.5-3.357,7.5-7.5
                                                     S278.966,130.25,274.824,130.25z"></path>
                                    <path d="M235.363,170.798c-2.655-0.363-5.3-0.548-7.863-0.548c-31.706,0-57.5,25.794-57.5,57.5c0,2.563,0.185,5.209,0.548,7.863
                                                     c0.515,3.759,3.731,6.483,7.421,6.483c0.339,0,0.682-0.023,1.027-0.07c4.104-0.562,6.975-4.345,6.413-8.448
                                                     c-0.271-1.982-0.409-3.943-0.409-5.828c0-23.435,19.065-42.5,42.5-42.5c1.884,0,3.845,0.138,5.828,0.409
                                                     c4.108,0.564,7.886-2.309,8.448-6.413C242.338,175.143,239.467,171.359,235.363,170.798z"></path>
                                    <path d="M219.127,284.636c2.789,0.407,5.605,0.614,8.373,0.614c31.706,0,57.5-25.794,57.5-57.5c0-2.77-0.207-5.587-0.613-8.373
                                                     c-0.599-4.099-4.408-6.934-8.505-6.337c-4.099,0.599-6.936,4.406-6.337,8.505c0.303,2.071,0.456,4.158,0.456,6.205
                                                     c0,23.435-19.065,42.5-42.5,42.5c-2.044,0-4.132-0.153-6.205-0.456c-4.099-0.6-7.907,2.238-8.505,6.337
                                                     S215.028,284.037,219.127,284.636z"></path>
                                    <path d="M318.5,203.25c9.098,0,16.5-7.402,16.5-16.5c0-8.318-6.227-15.355-14.484-16.37c-2.293-0.277-4.585,0.509-6.218,2.142
                                                     l-10.027,10.027c-1.633,1.632-2.422,3.926-2.141,6.217C303.145,197.023,310.183,203.25,318.5,203.25z"></path>
                                    <path d="M117.5,114.75h30c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5h-30c-4.142,0-7.5,3.357-7.5,7.5
                                                     S113.358,114.75,117.5,114.75z"></path>
                                    <path d="M388.367,66.633C345.397,23.664,288.268,0,227.5,0S109.603,23.664,66.633,66.633C23.664,109.603,0,166.732,0,227.5
                                                     s23.664,117.897,66.633,160.867C109.603,431.336,166.732,455,227.5,455s117.897-23.664,160.867-66.633
                                                     C431.336,345.397,455,288.268,455,227.5S431.336,109.603,388.367,66.633z M15,227.5C15,110.327,110.327,15,227.5,15
                                                     c55.894,0,106.807,21.703,144.783,57.11L72.11,372.283C36.703,334.307,15,283.395,15,227.5z M227.5,440
                                                     c-55.894,0-106.807-21.703-144.783-57.11L382.89,82.717C418.297,120.693,440,171.606,440,227.5C440,344.673,344.673,440,227.5,440z
                                                     "></path>
                                </g>
                            </svg>
                            <span class="text text-center">Sorry, there are no products.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="halo-recently-viewed recently-viewed-share recently-viewed-tab" id="halo-recently-viewed-share">
                <div class="recently-viewed-content">
                    <h3 class="recently-viewed-title text-center">Social</h3>
                    <div class="media-grid recently-viewed-media text-center" id="recently-viewed-products-share">
                        <ul class="list-unstyled list-social-2 clearfix">
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="icon icon-facebook"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                    <span class="visually-hidden">Facebook</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Facebook</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram">
                                        <g>
                                            <path d="M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152   c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M437,0H75C33.6,0,0,33.6,0,75v362   c0,41.4,33.6,75,75,75h362c41.4,0,75-33.6,75-75V75C512,33.6,478.4,0,437,0z M256,392c-74.399,0-135-60.601-135-135   c0-74.401,60.601-135,135-135s135,60.599,135,135C391,331.399,330.399,392,256,392z M421,122c-16.5,0-30-13.5-30-30s13.5-30,30-30   s30,13.5,30,30S437.5,122,421,122z M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z    M256,152c-57.9,0-105,47.1-105,105s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z M256,152c-57.9,0-105,47.1-105,105   s47.1,105,105,105s105-47.1,105-105S313.9,152,256,152z"></path>
                                        </g>
                                    </svg>
                                    <span class="visually-hidden">Instagram</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Instagram</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-pinterest" viewBox="0 0 17 18">
                                        <path d="M8.48.58a8.42 8.42 0 015.9 2.45 8.42 8.42 0 011.33 10.08 8.28 8.28 0 01-7.23 4.16 8.5 8.5 0 01-2.37-.32c.42-.68.7-1.29.85-1.8l.59-2.29c.14.28.41.52.8.73.4.2.8.31 1.24.31.87 0 1.65-.25 2.34-.75a4.87 4.87 0 001.6-2.05 7.3 7.3 0 00.56-2.93c0-1.3-.5-2.41-1.49-3.36a5.27 5.27 0 00-3.8-1.43c-.93 0-1.8.16-2.58.48A5.23 5.23 0 002.85 8.6c0 .75.14 1.41.43 1.98.28.56.7.96 1.27 1.2.1.04.19.04.26 0 .07-.03.12-.1.15-.2l.18-.68c.05-.15.02-.3-.11-.45a2.35 2.35 0 01-.57-1.63A3.96 3.96 0 018.6 4.8c1.09 0 1.94.3 2.54.89.61.6.92 1.37.92 2.32 0 .8-.11 1.54-.33 2.21a3.97 3.97 0 01-.93 1.62c-.4.4-.87.6-1.4.6-.43 0-.78-.15-1.06-.47-.27-.32-.36-.7-.26-1.13a111.14 111.14 0 01.47-1.6l.18-.73c.06-.26.09-.47.09-.65 0-.36-.1-.66-.28-.89-.2-.23-.47-.35-.83-.35-.45 0-.83.2-1.13.62-.3.41-.46.93-.46 1.56a4.1 4.1 0 00.18 1.15l.06.15c-.6 2.58-.95 4.1-1.08 4.54-.12.55-.16 1.2-.13 1.94a8.4 8.4 0 01-5-7.65c0-2.3.81-4.28 2.44-5.9A8.04 8.04 0 018.48.57z">
                                    </path></svg>
                                    <span class="visually-hidden">Pinterest</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Pinterest</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-hidden="true" focusable="false" class="icon icon-tiktok">
                                            <path d="m475.074 0h-438.148c-20.395 0-36.926 16.531-36.926 36.926v438.148c0 20.395 16.531 36.926 36.926 36.926h438.148c20.395 0 36.926-16.531 36.926-36.926v-438.148c0-20.395-16.531-36.926-36.926-36.926zm-90.827 195.959v34.613c-16.322.006-32.181-3.192-47.137-9.503-9.617-4.06-18.577-9.292-26.772-15.613l.246 106.542c-.103 23.991-9.594 46.532-26.772 63.51-13.98 13.82-31.695 22.609-50.895 25.453-4.512.668-9.103 1.011-13.746 1.011-20.553 0-40.067-6.659-56.029-18.943-3.004-2.313-5.876-4.82-8.612-7.521-18.617-18.4-28.217-43.34-26.601-69.575 1.234-19.971 9.229-39.017 22.558-53.945 17.635-19.754 42.306-30.719 68.684-30.719 4.643 0 9.234.348 13.746 1.017v12.798 35.601c-4.277-1.411-8.846-2.187-13.603-2.187-24.1 0-43.597 19.662-43.237 43.779.228 15.431 8.658 28.92 21.09 36.355 5.842 3.495 12.564 5.659 19.737 6.053 5.62.308 11.016-.474 16.013-2.124 17.218-5.688 29.639-21.861 29.639-40.935l.057-71.346v-130.252h47.668c.046 4.723.525 9.332 1.416 13.797 3.598 18.075 13.786 33.757 27.966 44.448 12.364 9.326 27.76 14.854 44.448 14.854.011 0 .148 0 .137-.011v12.843z"></path>
                                        </svg>
                                    <span class="visually-hidden">TikTok</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">TikTok</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-youtube" viewBox="0 0 100 70">
                                            <path d="M98 11c2 7.7 2 24 2 24s0 16.3-2 24a12.5 12.5 0 01-9 9c-7.7 2-39 2-39 2s-31.3 0-39-2a12.5 12.5 0 01-9-9c-2-7.7-2-24-2-24s0-16.3 2-24c1.2-4.4 4.6-7.8 9-9 7.7-2 39-2 39-2s31.3 0 39 2c4.4 1.2 7.8 4.6 9 9zM40 50l26-15-26-15v30z">
                                        </path></svg>
                                    <span class="visually-hidden">YouTube</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">YouTube</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item">
                                <a href="#" class="link link--text list-social__link">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 18 15">
                                            <path d="M17.64 2.6a7.33 7.33 0 01-1.75 1.82c0 .05 0 .13.02.23l.02.23a9.97 9.97 0 01-1.69 5.54c-.57.85-1.24 1.62-2.02 2.28a9.09 9.09 0 01-2.82 1.6 10.23 10.23 0 01-8.9-.98c.34.02.61.04.83.04 1.64 0 3.1-.5 4.38-1.5a3.6 3.6 0 01-3.3-2.45A2.91 2.91 0 004 9.35a3.47 3.47 0 01-2.02-1.21 3.37 3.37 0 01-.8-2.22v-.03c.46.24.98.37 1.58.4a3.45 3.45 0 01-1.54-2.9c0-.61.14-1.2.45-1.79a9.68 9.68 0 003.2 2.6 10 10 0 004.08 1.07 3 3 0 01-.13-.8c0-.97.34-1.8 1.03-2.48A3.45 3.45 0 0112.4.96a3.49 3.49 0 012.54 1.1c.8-.15 1.54-.44 2.23-.85a3.4 3.4 0 01-1.54 1.94c.74-.1 1.4-.28 2.01-.54z">
                                        </path></svg>
                                    <span class="visually-hidden">Twitter</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#">
                                        <span class="text">Twitter</span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-social__item mail-newsletter">
                                <a href="#" data-open-newsletter-popup class="link link--text list-social__link" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false" role="presentation" class="icon icon-mail">
                                            <path d="M 1 3 L 1 5 L 1 18 L 3 18 L 3 5 L 19 5 L 19 3 L 3 3 L 1 3 z M 5 7 L 5 7.1777344 L 14 12.875 L 23 7.125 L 23 7 L 5 7 z M 23 9.2832031 L 14 15 L 5 9.4160156 L 5 21 L 14 21 L 14 17 L 17 17 L 17 14 L 23 14 L 23 9.2832031 z M 19 16 L 19 19 L 16 19 L 16 21 L 19 21 L 19 24 L 21 24 L 21 21 L 24 21 L 24 19 L 21 19 L 21 16 L 19 16 z"></path>
                                        </svg>
                                    <span class="visually-hidden">Newsletter Sign-up</span>
                                </a>
                                <div class="info list-social__info text-left">
                                    <a class="link link-underline" href="#" data-open-newsletter-popup role="button">
                                        <span class="text">Newsletter Sign-up</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="halo-recently-viewed recently-viewed-wrap" id="halo-recently-viewed-wrap">
                <div class="recently-viewed-icon open-popup" data-target="halo-recently-viewed-list" tabindex="0" role="button">
                    <span class="visually-hidden">Recently Viewed Products</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="icon icon-recently-viewed" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 7.90625 0.96875 C 7.863281 0.976563 7.820313 0.988281 7.78125 1 C 7.316406 1.105469 6.988281 1.523438 7 2 L 7 12 L 17 12 C 17.359375 12.003906 17.695313 11.816406 17.878906 11.503906 C 18.058594 11.191406 18.058594 10.808594 17.878906 10.496094 C 17.695313 10.183594 17.359375 9.996094 17 10 L 10.34375 10 C 14.105469 6.304688 19.269531 4 25 4 C 36.664063 4 46 13.335938 46 25 C 46 36.664063 36.664063 46 25 46 C 13.335938 46 4 36.664063 4 25 C 4 21.566406 4.847656 18.207031 6.28125 15.34375 L 4.5 14.4375 C 2.933594 17.574219 2 21.234375 2 25 C 2 37.734375 12.265625 48 25 48 C 37.734375 48 48 37.734375 48 25 C 48 12.265625 37.734375 2 25 2 C 18.777344 2 13.117188 4.496094 9 8.5 L 9 2 C 9.011719 1.710938 8.894531 1.433594 8.6875 1.238281 C 8.476563 1.039063 8.191406 0.941406 7.90625 0.96875 Z M 24 9 L 24 23.28125 C 23.402344 23.628906 23 24.261719 23 25 C 23 25.171875 23.019531 25.339844 23.0625 25.5 L 16.28125 32.28125 L 17.71875 33.71875 L 24.5 26.9375 C 24.660156 26.980469 24.828125 27 25 27 C 26.105469 27 27 26.105469 27 25 C 27 24.261719 26.597656 23.628906 26 23.28125 L 26 9 Z"></path>
                    </svg>
                </div>
                <div class="recently-viewed-icon social-media-icon open-popup" data-target="halo-recently-viewed-share" tabindex="0" role="button">
                    <span class="visually-hidden">Social Media Links</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true" focusable="false" role="presentation" class="icon icon-social-media">
                        <path d="M 12.5 1 C 11.125 1 10 2.125 10 3.5 C 10 3.671875 10.019531 3.835938 10.050781 4 L 5.519531 6.039063 C 5.0625 5.414063 4.328125 5 3.5 5 C 2.125 5 1 6.125 1 7.5 C 1 8.875 2.125 10 3.5 10 C 4.332031 10 5.074219 9.582031 5.527344 8.949219 L 10.0625 10.964844 C 10.023438 11.136719 10 11.316406 10 11.5 C 10 12.875 11.125 14 12.5 14 C 13.875 14 15 12.875 15 11.5 C 15 10.125 13.875 9 12.5 9 C 11.667969 9 10.925781 9.417969 10.472656 10.050781 L 5.9375 8.039063 C 5.976563 7.863281 6 7.683594 6 7.5 C 6 7.3125 5.976563 7.128906 5.9375 6.953125 L 10.445313 4.914063 C 10.898438 5.570313 11.652344 6 12.5 6 C 13.875 6 15 4.875 15 3.5 C 15 2.125 13.875 1 12.5 1 Z M 12.5 2 C 13.335938 2 14 2.664063 14 3.5 C 14 4.335938 13.335938 5 12.5 5 C 11.664063 5 11 4.335938 11 3.5 C 11 2.664063 11.664063 2 12.5 2 Z M 3.5 6 C 4.335938 6 5 6.664063 5 7.5 C 5 8.335938 4.335938 9 3.5 9 C 2.664063 9 2 8.335938 2 7.5 C 2 6.664063 2.664063 6 3.5 6 Z M 12.5 10 C 13.335938 10 14 10.664063 14 11.5 C 14 12.335938 13.335938 13 12.5 13 C 11.664063 13 11 12.335938 11 11.5 C 11 10.664063 11.664063 10 12.5 10 Z"></path>
                    </svg>
                </div>
                <div class="recently-viewed-icon scroll-to-top" data-scroll-to-top tabindex="0" role="button">
                    <span class="visually-hidden">Back To Top</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" aria-hidden="true" focusable="false" role="presentation" class="icon icon-back-to-top">
                        <path d="M 25 1.015625 L 14.308594 11.28125 C 14.046875 11.527344 13.9375 11.894531 14.023438 12.242188 C 14.109375 12.589844 14.375 12.867188 14.71875 12.964844 C 15.066406 13.066406 15.4375 12.972656 15.691406 12.71875 L 24 4.746094 L 24 48 C 23.996094 48.359375 24.183594 48.695313 24.496094 48.878906 C 24.808594 49.058594 25.191406 49.058594 25.503906 48.878906 C 25.816406 48.695313 26.003906 48.359375 26 48 L 26 4.746094 L 34.308594 12.71875 C 34.5625 12.972656 34.933594 13.066406 35.28125 12.964844 C 35.625 12.867188 35.890625 12.589844 35.976563 12.242188 C 36.0625 11.894531 35.953125 11.527344 35.691406 11.28125 Z"></path>
                    </svg>
                </div>
            </div>
        </div> <!-- END: Recently Viewed Popup -->

        <div class="halo-sidebar halo-sidebar-right halo-auth-sidebar" data-auth-sidebar id="halo-auth-sidebar">
            <div class="halo-sidebar-header text-left">
                <span class="title">Login</span>
                <a href="#" class="halo-sidebar-close" data-close-auth-sidebar="" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                </a>
            </div>
            <div class="halo-sidebar-wrapper custom-scrollbar">
                <form accept-charset="UTF-8" action="{{route('create.dologin')}}" method="post" class="auth-form">
                    @csrf
                    <input name="form_type" type="hidden" value="customer_login">
                    <input name="utf8" type="hidden" value="✓">
                    <div class="form-field">
                        <label class="form-label" for="customer_email">
                                Email Address
                                <em>*</em>
                            </label>
                        <input id="customer_email" class="form-input form-input-placeholder" type="email" value="" name="email" required="" placeholder="Email Address">
                    </div>
                    <div class="form-field">
                        <label class="form-label" for="customer_password">
                                Password
                                <em>*</em>
                            </label>
                        <input id="customer_password" class="form-input form-input-placeholder" type="password" value="" required="" placeholder="Password" name="password">
                    </div>
                    <div class="form-actions auth-actions text-center">
                        <input type="submit" class="button button-2 button-login" value="Log in">
                        <a class="auth-link link link-underline" href="#">

                        </a>
                        <a href="{{url('register')}}" class="button button-1 button-register">
                                Create account
                            </a>
                    </div>
                </form>
            </div>
        </div><!-- END: Login Sidebar -->

        <div class="halo-sidebar halo-sidebar-right halo-cart-sidebar" data-card-sidebar id="halo-cart-sidebar">
            <div class="halo-sidebar-header text-left">
                <span class="title">Shopping Cart</span>
                <a href="#" class="halo-sidebar-close" data-close-auth-sidebar="" title="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                </a>
                <div class="wrapper-cartCount">
                    <span class="cartCount" data-cart-count="">3</span>
                    <span>items</span>
                </div>
            </div>
            <div class="halo-sidebar-wrapper CartItemDrop">
                <div class="haloCalculatorShipping">
                    <div class="progress progress-free progress-100" data-shipping-progress="">
                        <div class="progress_shipping" role="progressbar">
                            <div class="progress-meter" style="width: 60%;">60%</div>
                        </div>
                    </div>
                    <div class="message" data-shipping-message=""><span>Only </span><span class="money">$69.00</span><span>away from </span><span class="text">free shipping</span></div>
                </div>
                <div class="previewCart-wrapper">
                    <div class="previewCart custom-scrollbar">
                        <ul class="previewCartList list-unstyled">
                            <li class="previewCartItem clearfix">
                                <a href="#" class="previewCartItem-image">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/product-1.png" alt="Halo Product">
                                </a>
                                <div class="previewCartItem-content">
                                    <a href="#" class="previewCartItem-name link-underline">
                                        <span class="text">Dinterdum Pretium Condimento</span>
                                    </a>
                                    <div class="previewCartItem-options">
                                        <span class="previewCartItem-variant"> Black / XS</span>
                                        <a href="javascript:void(0);" class="previewCartItem-edit" data-open-edit-cart="" data-edit-cart-url="/products/naminos-dementus-a-dincidunto-6?variant=39504901341274&amp;view=ajax_edit_cart" data-edit-cart-id="39504901341274" data-edit-cart-quantity="1"
                                            data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Cadetblue / XS / Option 1">
                                            <svg viewBox="0 0 576 512" class="icon icon-edit" >
                                                    <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                </svg>
                                        </a>
                                    </div>
                                    <div class="previewCartItem-change">
                                        <div class="previewCartItem-price">
                                            <span class="price">
                                                    <span class="money">$99.00</span>
                                            </span>
                                        </div>
                                        <div class="previewCartItem-qty">
                                            <label class="form-label hiddenLabel" for="upsell-update-395049013412744"></label>
                                            <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                            <input class="form-input quantity" name="quantity" id="upsell-update-395049013412744" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                            <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="previewCartItem-remove" data-cart-remove="" data-cart-remove-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Naminos demen dincidunto - Cadetblue / XS / Option 1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                        </svg>
                                </a>
                            </li>
                            <li class="previewCartItem clearfix">
                                <a href="#" class="previewCartItem-image">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/product-3.png" alt="Halo Product">
                                </a>
                                <div class="previewCartItem-content">
                                    <a href="#" class="previewCartItem-name link-underline">
                                        <span class="text">Loremous Saliduar A Cosmopolis </span>
                                    </a>
                                    <div class="previewCartItem-options">
                                        <span class="previewCartItem-variant"> White / M / Option 1</span>
                                        <a href="javascript:void(0);" class="previewCartItem-edit" data-open-edit-cart="" data-edit-cart-url="/products/naminos-dementus-a-dincidunto-6?variant=39504901341274&amp;view=ajax_edit_cart" data-edit-cart-id="39504901341274" data-edit-cart-quantity="1"
                                            data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Cadetblue / XS / Option 1">
                                            <svg viewBox="0 0 576 512" class="icon icon-edit" >
                                                    <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                </svg>
                                        </a>
                                    </div>
                                    <div class="previewCartItem-change">
                                        <div class="previewCartItem-price">
                                            <span class="price">
                                                    <span class="money">$289.00</span>
                                            </span>
                                        </div>
                                        <div class="previewCartItem-qty">
                                            <label class="form-label hiddenLabel" for="upsell-update-39504901341274"></label>
                                            <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                            <input class="form-input quantity" name="quantity" id="upsell-update-39504901341274" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                            <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="previewCartItem-remove" data-cart-remove="" data-cart-remove-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Naminos demen dincidunto - Cadetblue / XS / Option 1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                        </svg>
                                </a>
                            </li>
                            <li class="previewCartItem clearfix">
                                <a href="#" class="previewCartItem-image">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/product-4.png" alt="Halo Product">
                                </a>
                                <div class="previewCartItem-content">
                                    <a href="#" class="previewCartItem-name link-underline">
                                        <span class="text">Loremous Saliduar A Cosmopolito </span>
                                    </a>
                                    <div class="previewCartItem-options">
                                        <span class="previewCartItem-variant"> Green / S / Option 3</span>
                                        <a href="javascript:void(0);" class="previewCartItem-edit" data-open-edit-cart="" data-edit-cart-url="/products/naminos-dementus-a-dincidunto-6?variant=39504901341274&amp;view=ajax_edit_cart" data-edit-cart-id="39504901341274" data-edit-cart-quantity="1"
                                            data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Cadetblue / XS / Option 1">
                                            <svg viewBox="0 0 576 512" class="icon icon-edit" >
                                                    <path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                                                </svg>
                                        </a>
                                    </div>
                                    <div class="previewCartItem-change">
                                        <div class="previewCartItem-price">
                                            <span class="price">
                                                    <span class="money">$289.00</span>
                                            </span>
                                        </div>
                                        <div class="previewCartItem-qty">
                                            <label class="form-label hiddenLabel" for="upsell-update-3950490134127434"></label>
                                            <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                            <input class="form-input quantity" name="quantity" id="upsell-update-3950490134127434" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                            <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0)" class="previewCartItem-remove" data-cart-remove="" data-cart-remove-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1" aria-label="Remove Naminos demen dincidunto - Cadetblue / XS / Option 1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                        </svg>
                                </a>
                            </li>
                        </ul>
                        <div class="previewCartCollection">
                            <h3 class="previewCartTitle text-left">You May Also Like</h3>
                            <div class="previewCartProduct" data-product-collection-cart>
                                <div class="halo-product-block previewCartCarousel custom-product-carousel" data-product-carousel="" data-item-to-show="1" data-item-dots="false" data-item-arrows="true" data-item-dots-mb="false" data-item-arrows-mb="true">
                                    <div class="row">
                                        <div class="halo-row-item product-item halo-row-item product-item-custom">
                                            <div class="product-card">
                                                <div class="product-card-top">
                                                    <a href="#" class="card-media">
                                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-5.png" alt="Halo Product">
                                                    </a>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-card-information text-left">
                                                        <a href="#" class="card-title link-underline card-title-ellipsis">
                                                            <span class="text">Dinterdum Pretium Condimento<span data-change-title> - Gray</span></span>
                                                        </a>
                                                        <div class="card-price price__sale">
                                                            <div class="price-item price-item--regular">
                                                                <span class="money ">$140.00</span>
                                                            </div>
                                                            <div class="price-item price__last">
                                                                <span class="money ">$126.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-swatch text-center clearfix">
                                                            <ul class="swatch list-unstyled">
                                                                <li class="item">
                                                                    <label  class="swatch-label is-active" data-value="Gray" data-variant-id="">
                                                                            <span class="pattern" style="background-color: #afaea9">
                                                                            </span>
                                                                        </label>
                                                                </li>
                                                                <li class="item">
                                                                    <label  class="swatch-label" data-value="Blue" data-variant-id="">
                                                                            <span class="pattern" style="background-color: #7d919c">
                                                                            </span>
                                                                        </label>
                                                                </li>
                                                                <li class="item">
                                                                    <label  class="swatch-label" data-value="Yellow" data-variant-id="">
                                                                            <span class="pattern" style="background-color: #ffe676">
                                                                            </span>
                                                                        </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="card-button text-underline" href="#" tabindex="0">
                                                            <span class="text">Details</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="halo-row-item product-item halo-row-item product-item-custom">
                                            <div class="product-card">
                                                <div class="product-card-top">
                                                    <a href="#" class="card-media">
                                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-9.png" alt="Halo Product">
                                                    </a>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-card-information text-left">
                                                        <a href="#" class="card-title link-underline card-title-ellipsis">
                                                            <span class="text">Dempus Lortis Cosmo Sapiendo<span data-change-title> - Blue</span></span>
                                                        </a>
                                                        <div class="card-price">
                                                            <span class="money">$86.00</span>
                                                        </div>
                                                        <div class="card-swatch text-center clearfix">
                                                            <ul class="swatch list-unstyled">
                                                                <li class="item">
                                                                    <label  class="swatch-label is-active" data-value="Blue" data-variant-id="">
                                                                            <span class="pattern" style="background-color: #4b6cc0"></span>
                                                                        </label>
                                                                </li>
                                                                <li class="item">
                                                                    <label  class="swatch-label" data-value="Green" data-variant-id="">
                                                                            <span class="pattern" style="background-color: mediumseagreen"></span>
                                                                        </label>
                                                                </li>
                                                                <li class="item">
                                                                    <label  class="swatch-label" data-value="black" data-variant-id="">
                                                                            <span class="pattern" style="background-color: black"></span>
                                                                        </label>
                                                                </li>
                                                                <li class="item">
                                                                    <label  class="swatch-label" data-value="Orange" data-variant-id="">
                                                                            <span class="pattern" style="background-color: moccasin"></span>
                                                                        </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="card-button text-underline" href="#" tabindex="0">
                                                            <span class="text">Details</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="previewCartInfo">
                        <div class="previewCartTotals subTotal clearfix">
                            <div class="item previewCartTotals-label">
                                Subtotal
                            </div>
                            <div class="item previewCartTotals-value">
                                <span class="money">$461.00</span>
                            </div>
                        </div>
                        <div class="previewCartAction text-left">
                            <div class="previewCartCheckbox global-checkbox">
                                <input class="global-checkbox--input" type="checkbox" name="sidebar_cart_conditions" id="sidebar_cart_conditions" >
                                <label class="global-checkbox--label form-label--checkbox" for="sidebar_cart_conditions">I agree with the</label>
                                <a href="javascript:void(0)" data-term-condition="">Terms Conditions</a>
                            </div>
                            <div class="previewCartGroup">
                                <button class="button button-1 button-checkout"  disabled="disabled" >Checkout</button>
                                <a class="button button-2 button-view-cart text-center" href="page-cart.html">View Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Card Sidebar -->

        <div class="halo-popup halo-edit-cart-popup customPopup-large" data-edit-cart-popup="" id="halo-edit-cart-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                    <h3 class="halo-popup-title text-left">
                        Edit Option
                    </h3>
                </div>
                <div class="halo-popup-content halo-popup-scroll custom-scrollbar">
                    <div class="cart-edit" data-template-cart-edit="" data-count="1" data-cart-update-id="">
                        <div class="halo-product-block product-edit-item product-edit-itemFirst clearfix" data-cart-edit-id="" data-position="0">
                            <div class="product-edit-itemLeft">
                                <a class="product-edit-image" href="#">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/product-3.png" alt="Halo Product">
                                </a>
                            </div>
                            <div class="product-edit-itemCenter">
                                <a href="#" class="product-edit-title link-underline">
                                    <span class="text">(Product 4) Sample - Clothing And Accessory Boutiques For Sale </span>
                                </a>
                                <span class="product-edit-title-variant" data-change-title="">Pink / Xs / Option 1</span>
                                <div class="card-price price__sale">
                                    <div class="price-item price-item--regular">
                                        <span class="money ">$86.00</span>
                                    </div>
                                    <div class="price-item price__last">
                                        <span class="money ">$68.80</span>
                                    </div>
                                </div>
                                <div class="product-quantity">
                                    <label  class="form__label">
                                        Quantity:
                                    </label>
                                    <div class="previewCartItem-qty">
                                        <label class="form-label hiddenLabel" for="upsell-update-395049013412743"></label>
                                        <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                        <input class="form-input quantity" name="quantity" id="upsell-update-395049013412743" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                        <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-edit-itemRight">
                                <div class="product-edit-options halo-productOptions">
                                    <div class="productView-variants halo-productOptions">
                                        <div class="product-form__input product-form__swatch">
                                            <label class="form__label">
                                                Color:
                                                <span data-header-option="">Pink</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" checked id="option-661763149013840-edit-color-pink" name="option-edit-color" value="Pink">
                                            <label class="product-form__label available" for="option-661763149013840-edit-color-pink">
                                                <span class="pattern" style="background-color: pink;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013841-edit-color-blue" name="option-edit-color" value="Blue">
                                            <label class="product-form__label available" for="option-661763149013841-edit-color-blue">
                                                <span class="pattern" style="background-color: #4b6cc0;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013842-edit-color-green" name="option-edit-color" value="Green">
                                            <label class="product-form__label available" for="option-661763149013842-edit-color-green">
                                                <span class="pattern" style="background-color: mediumseagreen;"></span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-661763149013843-edit-color-moccasin" name="option-edit-color" value="Moccasin">
                                            <label class="product-form__label available" for="option-661763149013843-edit-color-moccasin">
                                                <span class="pattern" style="background-color: moccasin;"></span>
                                            </label>
                                        </div>
                                        <div class="product-form__inputs">
                                            <label class="form__label">
                                                Size:
                                                <span data-header-option="">XS</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" checked id="option-66176314901232-size-xs" name="option-size" value="Xs" >
                                            <label class="product-form__label available " for="option-66176314901232-size-xs">
                                                <span class="text">XS</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901233-edit-size-s" name="option-edit-size" value="S">
                                            <label class="product-form__label" for="option-66176314901233-edit-size-s">
                                                <span class="text">S</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901234-edit-size-m" name="option-edit-size" value="M">
                                            <label class="product-form__label available" for="option-66176314901234-edit-size-m">
                                                <span class="text">M</span>
                                            </label>
                                            <input class="product-form__radio" type="radio" id="option-66176314901235-edit-size-l" name="option-edit-size" value="L">
                                            <label class="product-form__label available" for="option-66176314901235-edit-size-l">
                                                <span class="text">L</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0)" class="add-more text-underline uppercase" data-edit-cart-add-more="">
                                <span class="text">Add More</span>
                            </a>
                        </div>
                    </div>
                    <div class="product-edit-action">
                        <button data-update-cart-edit class="button button-2" id="add-all-to-cart">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- END: Quick Edit Card Popup -->

        <div class="halo-popup halo-quickshop-popup" data-halo-quickshop-popup id="data-quickshop-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-notify-popup="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                </div>
                <div class="halo-popup-content halo-product-block custom-scrollbar">
                    <div class="halo-productView-left">
                        <div class="productView-image">
                            <a class="image" href="#">
                                <img src="{{url('assets')}}/images/banners/home/home-8/product-4.png" alt="Halo Product">
                            </a>
                        </div>
                    </div>
                    <div class="halo-productView-right">
                        <a href="#" class="product-title link-underline">
                            <span class="text">(Product 4) Sample - Clothing And Accessory Boutiques For Sale </span>
                        </a>
                        <div class="card-price price__sale">
                            <div class="price-item price-item--regular">
                                <span class="money ">$86.00</span>
                            </div>
                            <div class="price-item price__last">
                                <span class="money ">$68.80</span>
                            </div>
                        </div>
                        <div class="product-edit-options productView-variants ">
                            <div class="halo-productOptions">
                                <div class="product-form__input product-form__swatch">
                                    <label class="form__label">
                                        Color:
                                        <span data-header-option="">Pink</span>
                                    </label>
                                    <input class="product-form__radio" type="radio" checked id="option-6617631490138340-quick-add-color-pink" name="option-quick-add-color" value="Pink">
                                    <label class="product-form__label available" for="option-6617631490138340-quick-add-color-pink">
                                        <span class="pattern" style="background-color: pink;"></span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-6617631490138541-quick-add-color-blue" name="option-quick-add-color" value="Blue">
                                    <label class="product-form__label available" for="option-6617631490138541-quick-add-color-blue">
                                        <span class="pattern" style="background-color: #4b6cc0;"></span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-6617631490183842-quick-add-color-green" name="option-quick-add-color" value="Green">
                                    <label class="product-form__label available" for="option-6617631490183842-quick-add-color-green">
                                        <span class="pattern" style="background-color: mediumseagreen;"></span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-6617631490193843-quick-add-color-moccasin" name="option-quick-add-color" value="Moccasin">
                                    <label class="product-form__label available" for="option-6617631490193843-quick-add-color-moccasin">
                                        <span class="pattern" style="background-color: moccasin;"></span>
                                    </label>
                                </div>
                                <div class="product-form__inputs">
                                    <label class="form__label">
                                        Size:
                                        <span data-header-option="">XS</span>
                                    </label>
                                    <input class="product-form__radio" type="radio" checked id="option-66176314901232-quick-add-size-xs" name="option-quick-add-size" value="Xs" >
                                    <label class="product-form__label available " for="option-66176314901232-quick-add-size-xs">
                                        <span class="text">XS</span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-66176314901233-quick-add-size-s" name="option-quick-add-size" value="S">
                                    <label class="product-form__label available" for="option-66176314901233-quick-add-size-s">
                                        <span class="text">S</span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-66176314901234-quick-add-size-m" name="option-quick-add-size" value="M">
                                    <label class="product-form__label available" for="option-66176314901234-quick-add-size-m">
                                        <span class="text">M</span>
                                    </label>
                                    <input class="product-form__radio" type="radio" id="option-66176314901235-quick-add-size-l" name="option-quick-add-size" value="L">
                                    <label class="product-form__label available" for="option-66176314901235-quick-add-size-l">
                                        <span class="text">L</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="product-options previewCartAction">
                            <div class="wrapper-action">
                                <div class="previewCartItem-qty">
                                    <label class="form-label hiddenLabel" for="upsell-update-395049013412741"></label>
                                    <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                    <input class="form-input quantity" name="quantity" id="upsell-update-395049013412741" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                    <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                                </div>
                                <div class="btn-card-action">
                                    <button type="submit" name="add" data-btn-quickShop-addtocart class="button button-1 button-ATC button-view-cart text-center1">Add to cart</button>
                                </div>
                            </div>
                            <div class="productView-notifyMe halo-notifyMe" style="display: none;">
                                <form class="notifyMe-form" method="post" action="http://themes.halothemes.com/cart/add">
                                    <input type="hidden" name="halo-notify-product-site" value="new-ella-demo">
                                    <input type="hidden" name="halo-notify-product-site-url" value>
                                    <input type="hidden" name="halo-notify-product-title" value="Loremour De Saliduar Cosmopolis">
                                    <input type="hidden" name="halo-notify-product-link" value>
                                    <input type="hidden" name="halo-notify-product-variant" value="Pink / XS / Option 1">
                                    <div class="form-field">
                                        <label class="form-label" for="halo-notify-email6617631490138">
                                            Leave your email and we will notify as soon as the product / variant is back in stock
                                        </label>
                                        <input class="form-input form-input-placeholder" type="email" name="email" required="" id="halo-notify-email6617631490138" placeholder="Insert your email">
                                        <button type="button" class="button button-1"  data-form-notify="">
                                            Subscribe
                                        </button>
                                    </div>
                                </form>
                                <div class="notifyMe-text"></div>
                            </div>
                            <div class="productView-see-details">
                                <a class="button button-2 button-detail text-center" href="#">View Full Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Quick Shop Popup -->
        @include('include.sidebarmobile')
        <!-- END: Menu Sidebar -->

        <div class="halo-popup halo-notification-popup" data-time="3000">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-quickview-popup="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                </div>
                <div class="halo-popup-content">
                    <a class="product-image" href="#">
                        <img src="{{url('assets')}}/images/banners/home/home-8/product-4.png" alt="hallo-product">
                    </a>
                    <div class="product-content">
                        <span class="text">Someone recently bought a</span>
                        <a class="product-name" href="#">Loremous saliduar dan scelerisques</a>
                        <div class="info-ago">
                            <span class="time-text">
                                20 minutes ago, from Melbourne
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Halo Notification Popup -->

        <div class="halo-popup halo-quick-view-popup" data-quick-view-popup id="halo-quick-view-popup">
            <div class="halo-popup-wrapper">
                <div class="halo-popup-header customPopup-header">
                    <a href="javascript:void(0)" class="halo-popup-close customPopup-close clearfix" data-close-quickView-popup role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" aria-hidden="true" focusable="false" role="presentation">
                        <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                        </svg>
                    </a>
                </div>
                <div class="halo-popup-content halo-productView custom-scrollbar productView-information">
                    <div class="halo-productView-left productView-images">
                        <div class="productView-images-wrapper">
                            <div class="card__badge badge-left">
                                <span class="badge sale-badge" aria-hidden="true">Sale</span>
                                <span class="badge custom-badge" aria-hidden="true">Must Have</span>
                            </div>
                            <div class="productView-nav" data-arrow="false">
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-4.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-4.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-4.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-1.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-1.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-1.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-2.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-2.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-2.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-5.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-5.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-5.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-3.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-3.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-3.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-7.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-7.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-7.png" alt="Product Image">
                                    </div>
                                </div>
                                <div class="productView-image">
                                    <div class="media image-zoom" data-zoom-image="./{{url('assets')}}/images/banners/home/home-8/product-8.png" data-fancybox="gallery-qv" data-src="{{url('assets')}}/images/banners/home/home-8/product-8.png">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-8.png" alt="Product Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="productView-thumbnail-wrapper">
                            <div class="productView-for">
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-4.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-1.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-2.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-5.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-3.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-7.png" alt="Product Image">
                                    </a>
                                </div>
                                <div class="productView-thumbnail">
                                    <a class="productView-thumbnail-link" href="javascript:void(0)">
                                        <img src="{{url('assets')}}/images/banners/home/home-8/product-8.png" alt="Product Image">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="halo-productView-right productView-details">
                        <h2 class="productView-title">
                            <a href="http://themes.halothemes.com/products/loremous-saliduar-a-cosmopolito-2">
                                (Product 16) Sample - Clothing And Accessory Boutiques For Sale
                            </a>
                        </h2>
                        <div class="productView-meta">
                            <div class="productView-rating">
                                <span class="spr-badge"  data-rating="0.0">
                                    <span class="spr-starrating spr-badge-starrating">
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                        <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                    </span>
                                <span class="spr-badge-caption">2 reviews</span>
                                </span>
                            </div>
                            <div class="productView-soldProduct" data-sold-out-product="" data-item="3,5,6,7,8,10,12,15" data-hours="10,15,16,17,18,20,25,35">
                                <svg class="icon icon-fire-2" viewBox="0 0 384 512">
                                    <path d="M216 23.858c0-23.802-30.653-32.765-44.149-13.038C48 191.851 224 200 224 288c0 35.629-29.114 64.458-64.85 63.994C123.98 351.538 96 322.22 96 287.046v-85.51c0-21.703-26.471-32.225-41.432-16.504C27.801 213.158 0 261.332 0 320c0 105.869 86.131 192 192 192s192-86.131 192-192c0-170.29-168-193.003-168-296.142z"></path>
                                </svg>
                                <span class="text">
                                    <span data-sold-out-number="">15</span> sold in last
                                <span data-sold-out-hours="">15</span> hours
                                </span>
                            </div>
                        </div>
                        <div class="productView-info">
                            <div class="productView-info-item">
                                <span class="productView-info-name">Brand:</span>
                                <span class="productView-info-value"><a href="#" title="Dkny">DKNY</a></span>
                            </div>
                            <div class="productView-info-item" data-sku="">
                                <span class="productView-info-name">SKU:</span>
                                <span class="productView-info-value">W0690042</span>
                            </div>
                            <div class="productView-info-item" data-inventory="">
                                <span class="productView-info-name"> Availability:</span>
                                <span class="productView-info-value">100 In Stock</span>
                            </div>
                        </div>
                        <div class="productView-price card-price price__sale">
                            <div class="price-item price-item--regular">
                                <span class="money ">$86.00</span>
                            </div>
                            <div class="price-item price__last">
                                <span class="money ">$68.80</span>
                            </div>
                        </div>
                        <div class="productView-countDown" data-countdown="Dec 31, 2023 18:00:00">
                            <span class="num">226<span>Day</span></span>
                            <span class="num">3<span>Hrs</span></span>
                            <span class="num">27<span>Min</span></span>
                            <span class="num">2<span>Sec</span></span>
                        </div>
                        <div class="productView-variants halo-productOptions">
                            <div class="product-form__input product-form__swatch">
                                <label class="form__label">
                                    Color:
                                    <span data-header-option="">Pink</span>
                                </label >
                                <input class="product-form__radio" type="radio" checked id="option-661763149013840-qv-color-pink" name="option-qv-color" value="Pink">
                                <label class="product-form__label available" for="option-661763149013840-qv-color-pink">
                                    <span class="pattern" style="background-color: pink;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013841-qv-color-blue" name="option-qv-color" value="Blue">
                                <label class="product-form__label available" for="option-661763149013841-qv-color-blue">
                                    <span class="pattern" style="background-color: #4b6cc0;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013842-qv-color-green" name="option-qv-color" value="Green">
                                <label class="product-form__label available" for="option-661763149013842-qv-color-green">
                                    <span class="pattern" style="background-color: mediumseagreen;"></span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-661763149013843-qv-color-moccasin" name="option-qv-color" value="Moccasin">
                                <label class="product-form__label available" for="option-661763149013843-qv-color-moccasin">
                                    <span class="pattern" style="background-color: moccasin;"></span>
                                </label>
                            </div>
                            <div class="product-form__inputs">
                                <label class="form__label">
                                    Size:
                                    <span data-header-option="">XS</span>
                                </label >
                                <input class="product-form__radio" type="radio" checked id="option-66176314901232-qv-size-xs" name="option-qv-size" value="Xs" >
                                <label class="product-form__label available " for="option-66176314901232-qv-size-xs">
                                    <span class="text">XS</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901233-qv-size-s" name="option-qv-size" value="S">
                                <label class="product-form__label soldout" for="option-66176314901233-qv-size-s">
                                    <span class="text">S</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901234-qv-size-m" name="option-qv-size" value="M">
                                <label class="product-form__label available" for="option-66176314901234-qv-size-m">
                                    <span class="text">M</span>
                                </label>
                                <input class="product-form__radio" type="radio" id="option-66176314901235-qv-size-l" name="option-qv-size" value="L">
                                <label class="product-form__label available" for="option-66176314901235-qv-size-l">
                                    <span class="text">L</span>
                                </label>
                            </div>
                        </div>
                        <div class="quantity_selector">
                            <label class="form-label quantity__label" >Quantity:</label>
                            <div class="previewCartItem-qty">
                                <label class="form-label hiddenLabel" for="upsell-update-395049013412747"></label>
                                <a href="#" data-minus-quantity-cart="" class="minus btn-quantity"></a>
                                <input class="form-input quantity" name="quantity" id="upsell-update-395049013412747" data-qtt-id1="quantity39504901341274" value="1" type="number" data-inventory-quantity="4" data-cart-quantity="" data-cart-quantity-id="39504901341274" data-line="39504901341274:6317036bb7e9264dc5231958196b34f1">
                                <a href="#" data-plus-quantity-cart="" class="plus btn-quantity"></a>
                            </div>
                        </div>
                        <div class="productView-subtotal">
                            <span class="text">Subtotal: </span>
                            <span class="money">$286.00</span>
                        </div>
                        <div class="previewCartAction">
                            <div class="previewCartGroup">
                                <form method="post" action="http://themes.halothemes.com/cart/add" id="product-form-66176314454590138" accept-charset="UTF-8" class="form" enctype="multipart/form-data" novalidate="novalidate" data-type="add-to-cart-form">
                                    <div class="previewCartGroup-top">
                                        <div class="productView-action">
                                            <button type="submit" name="add" data-btn-addtocart="" class="button-view-cart text-centert button button-1">Add to cart</button>
                                        </div>
                                        <div class="productView-wishlist">
                                            <a data-wishlist="" href="#" data-wishlist-handle="(Product 16) Sample - Clothing And Accessory Boutiques For Sale" data-product-id="6617631490138">
                                                <span class="visually-hidden">Add to wishlist</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" focusable="false" role="presentation" class="icon icon-wishlist"><path d="M 9.5 5 C 5.363281 5 2 8.402344 2 12.5 C 2 13.929688 2.648438 15.167969 3.25 16.0625 C 3.851563 16.957031 4.46875 17.53125 4.46875 17.53125 L 15.28125 28.375 L 16 29.09375 L 16.71875 28.375 L 27.53125 17.53125 C 27.53125 17.53125 30 15.355469 30 12.5 C 30 8.402344 26.636719 5 22.5 5 C 19.066406 5 16.855469 7.066406 16 7.9375 C 15.144531 7.066406 12.933594 5 9.5 5 Z M 9.5 7 C 12.488281 7 15.25 9.90625 15.25 9.90625 L 16 10.75 L 16.75 9.90625 C 16.75 9.90625 19.511719 7 22.5 7 C 25.542969 7 28 9.496094 28 12.5 C 28 14.042969 26.125 16.125 26.125 16.125 L 16 26.25 L 5.875 16.125 C 5.875 16.125 5.390625 15.660156 4.90625 14.9375 C 4.421875 14.214844 4 13.273438 4 12.5 C 4 9.496094 6.457031 7 9.5 7 Z"></path></svg>
                                            </a>
                                        </div>
                                        <div class="productView-share">
                                            <div class="share-content">
                                                <button class="share-button button">
                                                    <svg class="icon" viewBox="0 0 227.216 227.216"> <path d="M175.897,141.476c-13.249,0-25.11,6.044-32.98,15.518l-51.194-29.066c1.592-4.48,2.467-9.297,2.467-14.317c0-5.019-0.875-9.836-2.467-14.316l51.19-29.073c7.869,9.477,19.732,15.523,32.982,15.523c23.634,0,42.862-19.235,42.862-42.879C218.759,19.229,199.531,0,175.897,0C152.26,0,133.03,19.229,133.03,42.865c0,5.02,0.874,9.838,2.467,14.319L84.304,86.258c-7.869-9.472-19.729-15.514-32.975-15.514c-23.64,0-42.873,19.229-42.873,42.866c0,23.636,19.233,42.865,42.873,42.865c13.246,0,25.105-6.042,32.974-15.513l51.194,29.067c-1.593,4.481-2.468,9.3-2.468,14.321c0,23.636,19.23,42.865,42.867,42.865c23.634,0,42.862-19.23,42.862-42.865C218.759,160.71,199.531,141.476,175.897,141.476z M175.897,15c15.363,0,27.862,12.5,27.862,27.865c0,15.373-12.499,27.879-27.862,27.879c-15.366,0-27.867-12.506-27.867-27.879C148.03,27.5,160.531,15,175.897,15z M51.33,141.476c-15.369,0-27.873-12.501-27.873-27.865c0-15.366,12.504-27.866,27.873-27.866c15.363,0,27.861,12.5,27.861,27.866C79.191,128.975,66.692,141.476,51.33,141.476z M175.897,212.216c-15.366,0-27.867-12.501-27.867-27.865c0-15.37,12.501-27.875,27.867-27.875c15.363,0,27.862,12.505,27.862,27.875C203.759,199.715,191.26,212.216,175.897,212.216z"></path> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>
                                                </button>
                                                <div class="share-button__fallback">
                                                    <a class="share-button__close" href="javascript:void(0)" title="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                                            <path d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z"></path>
                                                        </svg>
                                                    </a>
                                                    <label class="form-label">Copy link</label>
                                                    <div class="share-group">
                                                        <div class="form-field">
                                                            <input type="text" class="field__input" id="url" value="https://ko4dtz5389gx1c3c-8133050458.shopifypreview.com/products/naminos-dementus-a-dincidunto-6" placeholder="Link" data-url="https://ko4dtz5389gx1c3c-8133050458.shopifypreview.com/products/naminos-dementus-a-dincidunto-6">
                                                            <label class="field__label hiddenLabel" for="url">Link</label>
                                                            <label class="field__label hiddenLabel" for="url">Link</label>
                                                        </div>
                                                        <button class="button button-1 button-copy">
                                                            <svg class="icon icon-clipboard" width="11" height="13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z" fill="currentColor"></path>
                                                            </svg>
                                                            <span>Copy link</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="previewCartGroup-bottom">
                                        <div class="previewCartCheckbox global-checkbox">
                                            <input class="global-checkbox--input" type="checkbox" name="sidebar_cart_conditions_qv_2" id="sidebar_cart_conditions_qv_2" >
                                            <label class="global-checkbox--label form-label--checkbox" for="sidebar_cart_conditions_qv_2">I agree with the</label>
                                            <a href="javascript:void(0)" data-term-condition="">Terms Conditions</a>
                                        </div>
                                        <button class="button button-2 button-checkout"  disabled="disabled" >Checkout</button>
                                    </div>
                                </form>
                                <div class="productView-notifyMe halo-notifyMe" style="display: none;">
                                    <form class="notifyMe-form" method="post" action="http://themes.halothemes.com/cart/add">
                                        <input type="hidden" name="halo-notify-product-site" value="new-ella-demo">
                                        <input type="hidden" name="halo-notify-product-site-url" value>
                                        <input type="hidden" name="halo-notify-product-title" value="Loremour De Saliduar Cosmopolis">
                                        <input type="hidden" name="halo-notify-product-link" value>
                                        <input type="hidden" name="halo-notify-product-variant" value="Pink / XS / Option 1">
                                        <div class="form-field">
                                            <label class="form-label" for="halo-notify-email6617631490138-qv">
                                                Leave your email and we will notify as soon as the product / variant is back in stock
                                            </label>
                                            <input class="form-input form-input-placeholder" type="email" name="email" required="" id="halo-notify-email6617631490138-qv" placeholder="Insert your email">
                                            <button type="button" class="button button-1"  data-form-notify="">
                                                Subscribe
                                            </button>
                                        </div>
                                    </form>
                                    <div class="notifyMe-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="productView-more">
                            <div class="productView-ViewingProduct" data-customer-view="283, 100, 59, 11, 14, 185, 193, 165, 50, 38, 99, 112, 46, 10, 125, 200, 250, 18" data-customer-view-time="5">
                                <svg class="icon"  viewBox="0 0 511.626 511.626"> <g> <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"></path> </g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> <g></g> </svg>
                                <span class="text">99 customers are viewing this product</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END: Quick View Popup -->

    </div><!-- End page wrapper -->

    <!-- Plugins Jquery JS File -->
    <script src="{{url('lib')}}/jquery/jquery.min.js"></script>
    <!-- Plugins Jquery Cookie JS File -->
    <script src="{{url('lib')}}/jquery.cookie/jquery.cookie.min.js"></script>
    <!-- Plugins bootstrap JS File -->
    <script src="{{url('lib')}}/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="{{url('lib')}}/bootstrap/popper.min.js"></script>
    <!-- Plugins Slick Carouse JS File -->
    <script src="{{url('lib')}}/slick-carouse/slick.min.js"></script>
    <!-- Plugins fancybox JS File -->
    <script src="{{url('lib')}}/fancybox/fancybox.umd.js"></script>
    <!-- Plugins elevateZoom JS File -->
    <script src="{{url('lib')}}/jquery.elevateZoom/jquery.elevateZoom.min.js"></script>

    <!-- Main JS File -->
    <script src="{{url('assets')}}/js/theme.min.js"></script>

</body>

<!-- Mirrored from themes.halothemes.com/html/ella-html-demo/index-8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 04:01:28 GMT -->
</html>
