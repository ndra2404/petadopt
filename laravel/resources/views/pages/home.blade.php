@extends("templates")
@section("maincontent")
<!-- <section class="banner-two-section" style="background-image:url({{url('assets')}}/images/shapes/banner-bg.png)">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="banner-two-content">
                    <h3 class="banner-two-content__subtitle">Save 20 -30% Off</h3>
                    <h1 class="banner-two-content__title">Everything your pet need</h1>

                </div>
            </div>
            <div class="col-md-6 d-md-block d-none">
                <div class="banner-two-section__thumb">
                    <img src="{{url('assets')}}/images/thumbs/banner-two-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ========================arrival-two section start here =======================-->
<div class="arrival-two-section py-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading-two">
                    <div class="section-heading-two__icon">
                        <img src="{{url('assets')}}/images/icons/heading-img.png" alt="">
                    </div>
                    <div class="section-heading-two__title-wrapper">
                      <h3 class="section-heading-two__title"> New Arrivals </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gy-4">
            @foreach($animal as $row)
            <div class=" col-xl-3 col-lg-3 col-sm-6 col-xsm-6">
                <div class="product-item style-two">
                    <div class="product-item__thumb">
                        <a href="{{url('detail/'.$row->id_hewan)}}" class="product-item__thumb-link">
                           <img src="{{url('upload')}}/foto/{{$row->foto}}" alt="">
                        </a>
                    </div>
                    <div class="product-item__content">
                      <h5 class="product-item__title">
                        <a href="{{url('detail/'.$row->id_hewan)}}" class="product-item__title-link">
                            {{$row->nama_hewan}}
                        </a>
                      </h5>
                      <h6 class="product-item__price">
                      Rp. {{number_format($row->harga)}}
                      </h6>
                       <a href="{{url('checkout/'.$row->id_hewan)}}" class="btn btn--base-two pill btn--sm">Adopsi</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="add-two-section pt-60">
    <div class="container">
        <div class="row">
            <div class="col-12">

                    <img src="{{url('assets')}}/images/alur.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<div class="news-post-section py-60" style='margin-top:10px'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading-two">
                    <div class="section-heading-two__icon">
                        <img src="assets/images/icons/heading-img.png" alt="">
                    </div>
                    <div class="section-heading-two__title-wrapper">
                      <h3 class="section-heading-two__title">Education Page</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gy-4">

            @foreach($blog as $row)
            <div class="col-lg-4 col-sm-6 col-xsm-6">
                <div class="news-post-item">
                    <div class="news-post-item__thumb">
                        <a href="{{url('blog/'.$row->id)}}" class="news-post-item__thumb-link">
                            <img src="assets/images/{{$row->images}}" alt="">
                        </a>
                    </div>
                    <div class="news-post-item__content">
                        <h4 class="news-post-item__title"><a href="{{url('blog/'.$row->id)}}" class="news-post-item__title-link">{{$row->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
