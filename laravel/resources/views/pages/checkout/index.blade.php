@extends("templates")
@section("maincontent")
<form action="{{url('doCheckout')}}" method="post">
    @csrf
<section class="breadcumb py-120 bg-img" style="background-image: url({{url('')}}/assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Check Out </h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="{{url('')}}" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Check Out  </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="checkout-section py-120">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="billing-details">
                    <h5 class="billing-details__title">Billing Details </h5>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="first-name" class="form--label">Nama<span class="required">*</span></label>
                                <input type="text" readonly  value="{{$adopter->nama_lengkap}}" class="form--control" id="first-name" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="last-name"  class="form--label">No Wa<span class="required">*</span></label>
                                <input type="text" name="no_wa" required value="{{$adopter->nomor_telepon}}" class="form--control" id="last-name">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="address" class="form--label"> Alamat<span class="required">*</span></label>
                                <input type="text" name="alamat" required class="form--control" value="{{$adopter->alamat}}" placeholder="House number and street name" id="address" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="number" class="form--label">Kode Pos</label>
                                <input type="number" name="kode_pos" required class="form--control" placeholder="Ex 123" id="number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email" class="form--label">Email Address </label>
                                <input type="email" name="email" required value="{{Auth::user()->username}}" readonly class="form--control" id="email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="ordernote"  class="form--label"> Order notes (optional) </label>
                                <textarea class="form--control" id="ordernote" name="order_note" rows="3" placeholder="Type your note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="your-order">
                    <h6 class="your-order__title">Your Order</h6>
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one">{{$hewan->nama_hewan}}</li>
                            <li class="order-title__one">{{$hewan->jenis_kelamin}}</li>
                        </ul>
                        <span class="order__number">Rp. {{number_format($hewan->harga)}}</span>
                    </div>
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one">Ongkos kirim</li>
                        </ul>
                        <span class="order__number">Rp. {{number_format($ongkir->value)}}</span>
                    </div>
                    <div class="order d-flex justify-content-between align-items-center">
                        <ul class="order-title">
                            <li class="order-title__one"> Total </li>
                        </ul>
                        <span class="order__number">Rp. {{number_format($ongkir->value+$hewan->harga)}}</span>
                    </div>
                    <div class="order-system">
                        <div class="form--radio mb-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="transfer" checked>
                            <label class="form-check-label" for="transfer">
                                Direct bank transfer
                            </label>
                          </div>
                          <p>Silahkan transfer ke {{$bank->value}}</p>
                    </div>
                    <div class="place-order">
                        <input type="hidden" name="id_hewan" value="{{$hewan->id_hewan}}" >
                        <button type="submit" class="btn btn--base pill"> ORDER NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@endSection
