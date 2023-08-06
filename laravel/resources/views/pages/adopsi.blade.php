@extends('templates')
@section('maincontent')
<section class="halo-block halo-product-block" data-product-carousel="" data-item-to-show="5" data-item-dots="true" data-item-arrows="true" data-item-dots-mb="true" data-item-arrows-mb="false">
    <div class="container container-1370">
        <div class="halo-block-header style-2">
            <h3 class="title">
                <span class="text">Register Adopter</span>
            </h3>
        </div>
        @if (session('status'))
      <div class="alert {{session('status')}}" role="alert">
        <p>{{ session('message') }}</p>
      </div>
@endif
        <div class="halo-block-content product-carousel">
                <div class="col-12 col-md-6 col-lg-6">
                        <form method="post" action="{{url('doAdopsi')}}" accept-charset="UTF-8" class="contact-form">
                            @csrf
                            <input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">
                            <div class="form-field">
                                <label class="form-label">Nama Lengkap</label>
                                <input class="form-input form-input-placeholder" type="text" name="nama_lengkap">
                            </div>
                            <div class="form-field">
                                <label class="form-label">No Wa(+62)</label>
                                <input class="form-input form-input-placeholder" type="text" name="no_wa">
                            </div>
                            <div class="form-field">
                                <label class="form-label">Alamat lengkap</label>
                                <input class="form-input form-input-placeholder" type="text" name="alamat">
                            </div>
                            <div class="form-field">
                                <label class="form-label">Email Address<span class="red-asterisk">*</span></label>
                                <input class="form-input form-input-placeholder" type="email" name="email" value="">
                            </div>
                            <div class="form-field">
                                <label class="form-label" for="password-rg">Password<span class="red-asterisk">*</span></label>
                                <input id="password-rg" class="form-input form-input-placeholder" type="password" name="password" aria-required="true" placeholder="" required="">
                            </div>
                            <div class="form-actions" style="margin-top:10px">
                                <button type="submit" class="button button-1" value="Submit Contact">Create akun</button>
                            </div>
                        </form>
                </div>
        </div>
    </div>
</section>
@endsection
