<!-- meta tags and other links -->
<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.viserlab.com/viserpet/demos/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 06:38:08 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Cahaya Petshop</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{url('assets')}}/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('assets')}}/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{url('assets')}}/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="{{url('assets')}}/css/slick.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{url('assets')}}/css/line-awesome.min.css">
    <!-- countdown css link-->
    <link rel="stylesheet" href="{{url('assets')}}/css/jquery.classycountdown.min.css">
    <!-- range css -->
    <link rel="stylesheet" href="{{url('assets')}}/css/jquery-ui.css">
    <!-- magnific css link -->
    <link rel="stylesheet" href="{{url('assets')}}/css/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{url('assets')}}/css/main.css">
</head>
<body>

<!--==================== Preloader Start ====================-->
<div class="preloader">
    <div class="loader-p"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Overlay Start ====================-->
<div class="body-overlay"></div>
<!--==================== Overlay End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="sidebar-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

<!-- ==================== Scroll to Top End Here ==================== -->
<a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>
<!-- ==================== Scroll to Top End Here ==================== -->

<!-- ==================== Bottom Header End Here ==================== -->
<header class="header-two">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler header-button style-two" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="hiddenNav"><i class="las la-bars"></i></span>
            </button>
            @include("include.sidebar")
            <div class="header-info style-two">

              <div class="header-info__user">
                @auth
                <a href="{{url('doLogout')}}" class="header-info__link"><i class="far fa-user"></i></a>
                @endauth
                @guest
                <a href="{{url('login-page')}}" class="header-info__link"><i class="far fa-user"></i></a>
                @endguest
             </div>
           </div>
        </nav>
    </div>
  </header>
  <!-- ==================== Bottom Header End Here ==================== -->

   <!--========================== Search Modal Start ==========================-->
   <div class="overlay-search-box position-relative">
    <div class="modal fade" id="search-box" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="search-overlay-close" data-bs-dismiss="modal" aria-label="Close"><i class="las la-times"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="search-box">
                                    <div class="input--group">
                                        <input type="text" class="form--control style-two" placeholder="Search....">
                                        <button class="search-btn" type="submit"><i class="las la-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--========================== Search Modal End ==========================-->

    @yield('maincontent')
<!--====================banner-two section start here======================-->


<!-- ======================news post section end here============-->
<div class="feature-two-section py-60">
    <div class="container">
        <div class="row gy-4 ">
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item style-two">
                    <div class="feature-item__thumb">
                        <img src="{{url('assets')}}/images/icons/ft-img01.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            FREE SHIPPING
                        </h5>
                        <span class="feature-item__payment"> For All Order Over $99 </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item style-two">
                    <div class="feature-item__thumb">
                        <img src="{{url('assets')}}/images/icons/ft-img02.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            FRIENDLY SUPPORT
                        </h5>
                        <span class="feature-item__payment"> 24/7 Customer Support </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item style-two">
                    <div class="feature-item__thumb">
                        <img src="{{url('assets')}}/images/icons/ft-img03.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            SECURE PAYMENT
                        </h5>
                        <span class="feature-item__payment">100%  Secure Payment</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xxsm-6">
                <div class="feature-item style-two">
                    <div class="feature-item__thumb">
                        <img src="{{url('assets')}}/images/icons/ft-img04.png" alt="">
                    </div>
                    <div class="feature-item__info">
                        <h5 class="feature-item__title">
                            SHIPPING & RETURN
                        </h5>
                        <span class="feature-item__payment"> within 30days For Refund </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ===========add two section start here =========-->
<div class="add-two-section pt-60">
    <div class="container">
        <div class="row">
            <div class="col-12">

                    <img src="{{url('assets')}}/images/thumbs/add-two01.png" alt="">
            </div>
        </div>
    </div>
</div>


<!-- ===========add two section end here =========-->


<!-- ========footer===== -->
<footer class="footer-two-area">
    <div class="footer-two__top-shape">
        <img src="{{url('assets')}}/images/shapes/footer-top-shape.png" alt="">
    </div>
    <div class="footer-two__shape-one">
        <img src="{{url('assets')}}/images/shapes/footer-shape-one.png" alt="">
    </div>
    <div class="footer-two__shape-two">
        <img src="{{url('assets')}}/images/shapes/footer-shape-two.png" alt="">
    </div>
    <div class="footer-two-area__inner">
    <div class="container">
            <div class="row justify-content-center gy-5">
                <div class="col-xl-3 col-sm-6">
                    <div class="footer-item">
                        <div class="footer-item__logo">
                            <a href="{{url('')}}"> <img src="{{url('assets')}}/images/logo/h2-logo.png" alt=""></a>
                        </div>
                        <p class="footer-item__desc"> Cahaya Petshop, Jl. Raya Dramaga, RT.01/RW.01, margajaya, Kec. Bogot Barat Kota Bogor, Jawa Barat 16680</p>
                        <ul class="social-list">
                            <li class="social-list__item"><a href="tel:089652300366" class="social-list__link"><i class="fas fa-phone"></i></a> </li>
                            <li class="social-list__item"><a href="mailto:irsyancahya14@gmail.com" class="social-list__link"> <i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-2 col-sm-6">
                    <div class="footer-item">
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6">
                    <div class="footer-item">

                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-3 col-sm-6">
                    <div class="footer-item">
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- Footer Top End-->

    <!-- bottom Footer -->
    <div class="bottom-footer style-two py-lg-5 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bottom-footer__text"> &copy; Copyright 2023 . All rights by kitaberkaya.</div>
                </div>
            </div>
        </div>
    </div>
  </footer>
<!-- Jquery js -->
<script src="{{url('assets')}}/js/jquery-3.6.1.min.js"></script>
<!-- Popper js -->
<script src="{{url('assets')}}/js/popper.min.js"></script>
<!-- Bootstrap Js -->
<script src="{{url('assets')}}/js/bootstrap.min.js"></script>
<!-- Slick js -->
<script src="{{url('assets')}}/js/slick.min.js"></script>
<!-- mixitup js -->
<script src="{{url('assets')}}/js/mixitup.min.js"></script>
<!-- countdown js -->
<script src="{{url('assets')}}/js/jquery.knob.js"></script>
<script src="{{url('assets')}}/js/jquery.throttle.js"></script>
<script src="{{url('assets')}}/js/jquery.classycountdown.min.js"></script>
<!-- range js -->
<script src="{{url('assets')}}/js/jquery-ui.js"></script>
<!-- magnific popup js -->
<script src="{{url('assets')}}/js/jquery.magnific-popup.min.js"></script>
 <!-- main js -->
 <script src="{{url('assets')}}/js/main.js"></script>

 <script>
    // mixitup
   var mixer = mixitup('.product');
</script>
</body>

<!-- Mirrored from template.viserlab.com/viserpet/demos/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 06:38:48 GMT -->
</html>
