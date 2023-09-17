@extends("templates")
@section("maincontent")
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Animal</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Animal </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="product-category-two py-120 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center gy-4">
                @foreach($animal as $row)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xsm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <a href="product-two-details.html" class="product-item__thumb-link">
                                   <img src="{{url('upload/foto/'.$row->foto)}}" alt="">
                                </a>
                                <button class="product-item__icon">
                                    <span class="product-item__icon-style">
                                      <i class="las la-heart"></i>
                                    </span>
                                </button>
                                <div class="product-item__badge">
                                    <span class="badge badge--base">Sale</span>
                                </div>
                            </div>
                         <div class="product-item__content">
                            <h5 class="product-item__title">

                                {{$row->nama_hewan}}
                            </h5>
                            <h6 class="product-item__price">
                            Rp. {{number_format($row->harga)}}
                            </h6>
                            <a href="{{url('checkout/'.$row->id_hewan)}}" class="btn btn--base pill btn--sm">Checkout</a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
