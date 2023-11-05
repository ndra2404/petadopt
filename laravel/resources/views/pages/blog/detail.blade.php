@extends("templates")
@section("maincontent")
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Check our Company News</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Check our Company News </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->


<!-- ==================== Blog Start Here ==================== -->
<section class="blog-detials py-120">
    <div class="container">
        <div class="row gy-5 justify-content-center flex-wrap-reverse ">


<!-- ============================= Blog Details Sidebar End ======================== -->

            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="blog-details__thumb">
                        <img src="{{url('assets/images/')}}/{{$blog->images}}" alt="">
                    </div>
                   <div class="blog-details__content">
                         <!-- <span class="blog-item__date mb-2"><span class="blog-item__date-icon"><i class="las la-clock"></i></span> 26 June, 2022</span> -->
                        <h3 class="blog-details__title">{{$blog->title}}</h3>
                        <p class="blog-details__desc">{!!$blog->content!!}</p>

                         <!-- tag & share icon start-->
                         <div class="d-flex justify-content-between align-items-center flex-wrap">
                    </div>
                    <!-- tag & share icon end here -->
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Blog End Here ==================== -->
@endsection
