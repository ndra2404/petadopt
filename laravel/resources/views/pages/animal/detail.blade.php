@extends("templates")
@section("maincontent")
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title">{{$animal->nama_hewan}}</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text">{{$animal->nama_hewan}} </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- ======================product details two section start here ====================-->
<div class="product-details-section py-120">
    <div class="container">
        <div class="row align-items-center gy-4">

            <div class="col-lg-7 pe-lg-5">
              <div class="row align-items-center">

                <div class="col-lg-9 order-lg-2">
                    <div class="product-details__thumb">
                      <a href="#" class="product-details__image">
                         <img src="{{url('upload')}}/foto/{{$animal->foto}}" alt="">
                      </a>
                      <a href="#" class="product-details__image">
                        <img src="{{url('upload')}}/vaccine/{{$animal->bukti_vaksin}}" alt="">
                      </a>

                    </div>
                </div>

                <div class="col-lg-3 order-lg-1">
                    <ul class="product-details-gallery">
                      <li class="product-details-gallery__image">
                         <img src="{{url('upload')}}/foto/{{$animal->foto}}" alt="">
                      </li>
                      <li class="product-details-gallery__image">
                          <img src="{{url('upload')}}/vaccine/{{$animal->bukti_vaksin}}" alt="">
                      </li>

                    </ul>
                </div>

              </div>
            </div>

            <div class="col-lg-5">
              <div class="product-info">
                 <h3 class="product-info__title">
                 {{$animal->nama_hewan}}
                 </h3>
                 <h6 class="product-info__price">
                 Rp. {{number_format($animal->harga)}}
                 </h6>
                 <div class="product-style">
                    <span class="product-style__title">Jenis kelamin :</span>
                   <span class="product-style__size">{{$animal->jenis_kelamin}}</span>
                 </div>
                 <div class="product-style">
                  <span class="product-style__title">Ras :</span>
                 <span class="product-style__size">{{$animal->ras}}</span>
                 </div>
                 <div class="product-info__button">
                    <a href="{{url('checkout/'.$animal->id_hewan)}}" class="btn btn--base-two pill btn--sm">Adopsi</a>
                 </div>
              </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================product details two section end here ====================-->

<!-- =====================tab section start here ========================-->
<div class="tab-section pb-120">
   <div class="container">
    <ul class="nav nav-pills mb-3 custom--tab" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Deskripsi</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Rekam Medis</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
        <p class="tab-desc">
        {{$animal->deskripsi}}
        </p>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
        <p class="tab-desc">
        {{$animal->rekam_medis}}
        </p>
      </div>
    </div>

   </div>
</div>
@endsection
