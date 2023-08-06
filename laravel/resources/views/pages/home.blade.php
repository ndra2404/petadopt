@extends("templates")
@section("maincontent")
    <section class="halo-block halo-block-slideshow" data-slide-show  data-item-dots="true" data-item-arrows="false" data-item-dots-mb="true" data-item-arrows-mb="false">
                <div class="container container-full">
                    <div class="halo-block-content halo-row-carousel">
                        <div class="bannerCarousel-slide slide-item">
                            <div class="img-box img-box--mobile">
                                <a href="category-full-width.html" class="image image-adapt " style="padding-top: 24.479166666%;">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow.jpg" alt="Ella - HTML Template">
                                </a>
                                <a href="category-full-width.html" class="image image-mobile image-adapt" style="padding-top: 100%">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow-mb.png" alt="Ella - HTML Template">
                                </a>
                            </div>
                        </div>
                        <div class="bannerCarousel-slide slide-item">
                            <div class="img-box img-box--mobile">
                                <a href="category-full-width.html" class="image image-adapt " style="padding-top: 24.479166666%;">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow-2.jpg" alt="Ella - HTML Template">
                                </a>
                                <a href="category-full-width.html" class="image image-mobile image-adapt" style="padding-top: 100%">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow-2-mb.png" alt="Ella - HTML Template">
                                </a>
                            </div>
                        </div>
                        <div class="bannerCarousel-slide slide-item">
                            <div class="img-box img-box--mobile">
                                <a href="category-full-width.html" class="image image-adapt " style="padding-top: 24.479166666%;">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow-3.jpg" alt="Ella - HTML Template">
                                </a>
                                <a href="category-full-width.html" class="image image-mobile image-adapt" style="padding-top: 100%">
                                    <img src="{{url('assets')}}/images/banners/home/home-8/banner-slideshow-3-mb.png" alt="Ella - HTML Template">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- END: Halo Block Slide Show -->

            <section class="halo-block halo-product-block" data-product-carousel data-item-to-show="5" data-item-dots="true" data-item-arrows="true" data-item-dots-mb="true" data-item-arrows-mb="false">
                <div class="container container-1370">
                    <div class="halo-block-header style-2">
                        <h3 class="title">
                            <span class="text">New products</span>
                        </h3>
                        <a href="#" class="view_all capitalize">
                            <span>View All</span>
                        </a>
                    </div>
                    <div class="halo-block-content product-carousel">
                        <div class="row column-5">
                            @foreach($animal as $row)
                            <div class="halo-row-item product-item col-6 col-md-4 col-lg-3">
                                <div class="product-card">
                                    <div class="product-card-top">
                                        <div class="card__badge badge-left">
                                            <span class="badge new-badge" aria-hidden="true">New</span>
                                        </div>
                                        <div class="product-card-media">
                                            <a href="product-layout-default.html" class="animate-scale image image-adapt" style="padding-bottom: 100%">
                                                <img src="{{url('upload/foto/'.$row->foto)}}" alt="Halo Product">
                                                <img src="{{url('upload/foto/'.$row->foto)}}" alt="Halo Product">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-card-information text-left">
                                            <div class="card-vendor-title card-title-ellipsis">
                                                <a href="#"  class="card-vendor" title="Vendor" tabindex="0">
                                                    <span class="text">{{$row->nama_hewan}} - {{$row->ras}}</span>
                                                </a>
                                            </div>
                                            <div class="card-price price__sale">
                                                <div class="price-item">
                                                    <span class="money ">{{number_format($row->harga)}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-action">
                                            <form action="http://themes.halothemes.com/cart/add" method="post" class="variants" data-product-id="" enctype="multipart/form-data">
                                                <a class="button button-ATC text-center" href="javascript:void(0)" data-quickshop-popup="">Checkout</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section><!-- END: Block Products -->

@endsection
