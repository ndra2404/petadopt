@extends("templates")
@section("maincontent")
@php
 $status = array('1'=>'waiting payment','2'=>'Waiting Verification payment',3=>'In Package',4=>'In Delivery');
@endphp
<section class="breadcumb py-120 bg-img" style="background-image: url(assets/images/thumbs/breadcumb-img.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h1 class="breadcumb__title"> Checkout</h1>
                    <ul class="breadcumb__list">
                        <li class="breadcumb__item"><a href="index.html" class="breadcumb__link"> <i class="las la-home"></i> Home</a> </li>
                        <li class="breadcumb__item"> / </li>
                        <li class="breadcumb__item"> <span class="breadcumb__item-text"> Checkout </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
<table class="table" style="margin-top:20px">
        <tr>
            <th>No</th>
            <th>No Transaksi</th>
            <th>Tgl</th>
            <th>Hewan</th>
            <th>Total</th>
            <th>Alamat</th>
            <th>No Wa</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($checkout as $type)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$type->no_transaksi}}</td>
                <td>{{$type->tgl_checkout}}</td>
                <td>{{$type->nama_hewan}}</td>
                <td>{{$type->total}}</td>
                <td>{{$type->alamat}}</td>
                <td>{{$type->no_wa}}</td>
                <td>{{$status[$type->status]}}</td>
                <td>
                    @if($type->status==1)
                        <a href="{{url('checkout-konfirmasi/'.$type->id)}}" class="btn btn-info">konfirmasi</a>
                    @endif
                    @if($type->status==4)
                        <a href="{{url('checkout-terima/'.$type->id)}}" class="btn btn-info">Terima Barang</a>
                    @endif
                </td>
            </tr>
        @endforeach
</table>
</div>
@endsection
