<!-- meta tags and other links -->
<!-- Header -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from template.viserlab.com/viserpet/demos/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 06:41:53 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Viserpet HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- countdown css link-->
    <link rel="stylesheet" href="assets/css/jquery.classycountdown.min.css">
    <!-- range css -->
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <!-- magnific css link -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
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
<header class="header-two">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand " href="index.html">
                <span class="logo">
                    <img src="{{url('assets')}}/images/logo/h2-logo.png" alt="">
                </span>
            </a>
            <button class="navbar-toggler header-button style-two" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="hiddenNav"><i class="las la-bars"></i></span>
            </button>
            @include("include.sidebar")
            <div class="header-info style-two">

              <div class="header-info__user">
                <a href="{{url('login-page')}}" class="header-info__link"><i class="far fa-user"></i></a>
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

<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Registrasi</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Login </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- =============account section start here ====================-->
<section class="account py-120">
    <div class="account-inner">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="account-thumb">
                        <img src="assets/images/thumbs/login-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                <div class="account-form">
                        <div class="account-form__content mb-4">
                            <h3 class="account-form__title mb-2"> Sign Up Your Account </h3>
                        </div>
                        <form action="{{url('doRegister')}}"  method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="name" class="form--label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" class="form--control" id="name" placeholder=" Name">
                                     </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="username" class="form--label">No Wa(+62)</label>
                                        <input type="text" class="form--control" id="username" name="no_wa" placeholder="User Name">
                                     </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="username" class="form--label">No Rek</label>
                                        <input type="text" class="form--control" id="username" name="no_rek" placeholder="User Name">
                                     </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="form-group">
                                        <label for="username" class="form--label">Nama Rekening</label>
                                        <input type="text" class="form--control" id="username" name="no_rek_nama" placeholder="User Name">
                                     </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="email" class="form--label">Email Address</label>
                                        <input type="text" class="form--control" id="email" placeholder="Email Address">
                                     </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="alamat" class="form--label">Alamat</label>
                                        <textarea name="alamat" class="form--control"></textarea>
                                     </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="your-password" class="form--label">Password</label>
                                    <div class="form-group">
                                        <input id="your-password" name="email" type="password" class="form-control form--control" value="Password">
                                        <div class="password-show-hide fas fa-eye toggle-password fa-eye-slash" id="#your-password"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn--base w-100">Sign Up</button>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="have-account text-center">
                                        <p class="have-account__text">Already Have An Account? <a href="{{url('login')}}" class="have-account__link text--base">Login Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================account section end here ========================-->

<!-- ========footer===== -->

<!-- ==================== Footer Start Here ==================== -->
@include("include.footer")

<!-- Jquery js -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.1.min.js"></script>
<!-- Popper js -->
<script src="assets/js/popper.min.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- countdown js -->
<script src="assets/js/jquery.knob.js"></script>
<script src="assets/js/jquery.throttle.js"></script>
<script src="assets/js/jquery.classycountdown.min.js"></script>
<!-- range js -->
<script src="assets/js/jquery-ui.js"></script>
<!-- magnific popup js -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
 <!-- main js -->
 <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from template.viserlab.com/viserpet/demos/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Sep 2023 06:41:54 GMT -->
</html>
