@extends("templates")
@section("maincontent")
<div class="innerHeading-wrap">
  <div class="container">
    <h1>konfirmasi</h1>
  </div>
</div>
<!-- Inner Heading End -->

<!-- Inner Content Start -->
<div class="innerContent-wrap">
@if (session('status'))
      <div class="alert {{session('status')}}" role="alert">
        <p>{{ session('message') }}</p>
      </div>
@endif
    <!-- Register Start -->
    <div class="container" style="margin-bottom:30px">
    <div class="col-md-12">
        <form method="post" action="{{url('doTerima/'.$data->id)}}" enctype="multipart/form-data">
            @csrf
        <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                    <label>Nomor Transaksi</label>
                    <span class="form-control">{{$data->no_transaksi}}</span>
                </div>
                </div>
        </div>
        <div class="row">
                <div class="col-lg-6">
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" readOnly name="email" value="{{$data->alamat}}" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" readOnly name="email" value="{{$data->kode_pos}}" class="form-control" placeholder="Email">
                </div>
                </div>
        </div>
        <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>No Rekening </label>
                    <input type="text"  name="no_rek" class="form-control">
                </div>
                </div>
                <div class="col-lg-6">
                <div class="form-group">
                    <label>Nominal</label>
                    <input type="text" name="nominal" value="{{number_format($data->total)}}" class="form-control" >
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Tgl Kirim</label>
                    <input type="text" name="nominal" value="{{$data->tgl_kirim}}" class="form-control" >
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Notes</label>
                    <textarea class="form-control">{{$data->notes}}</textarea>
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <th width="10">No</th>
                        <th style="text-align:center">Item</th>
                        <th style="text-align:right">Price</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>{{$data->nama_hewan}}</td>
                        <td>Rp. {{number_format($data->harga)}}</td>
                    </tr>
                    <tfooter>
                    <tr style="font-weight: bold;">
                        <td></td>
                        <td style="text-align: right;">Ongkir</td>
                        <td>Rp. {{number_format($data->ongkir)}}</td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td></td>
                        <td style="text-align: right;">Grand total</td>
                        <td>Rp. {{number_format($data->total)}}</td>
                    </tr>
                    </tfooter>
                </table>
            </div>
        </div>
        &nbsp;
            <div class="box-footer">
                @if($data->status==4)
                <button type="submit" class="btn btn-info pull-left">Hewan diterima</button>
                @endif
                <a href="{{url('checkout-list')}}" class="btn btn-warning pull-right">Back</a>
            </div>
        </form>
    </div>
    </div>
    <!-- Register End -->

  </div>
</div>
<!-- Inner Content Start -->
@endsection
