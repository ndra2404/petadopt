@extends("templates")
@section("maincontent")
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama hewan</label>
    <input type="text" name="nama_hewan" value="{{$data->nama_hewan}}" required class="form-control" id="exampleFormControlInput1" placeholder="Joni">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Hewan</label>
    <select class="form-control" required name="type" id="exampleFormControlSelect1">
        @foreach($types as $type)
        <option value="{{$type->id}}" {{$type->id==$data->id_type?'selected':''}}>{{$type->type}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ras</label>
    <input type="text" name="ras" value="{{$data->ras}}" required class="form-control" id="exampleFormControlInput1" placeholder="ceper">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="number" name="harga" value="{{$data->harga}}" required class="form-control" id="exampleFormControlInput1" placeholder="100.000">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select class="form-control" name="jenis" id="exampleFormControlSelect1">
      <option value="jantan" {{$data->jenis_kelamin=='jantan'?'selected':''}} >Jantan</option>
      <option value="betina" {{$data->jenis_kelamin=='betina'?'selected':''}}>Betina</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">rekam_medis</label>
    <textarea class="form-control" required name="rekam_medis" id="exampleFormControlTextarea1" rows="3">{{$data->rekam_medis}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Penjelasan</label>
    <textarea class="form-control" required name="penjelasan" id="exampleFormControlTextarea1" rows="3">{{$data->deskripsi}}</textarea>
  </div>
  <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1">Foto</label>
                <img src="{{url('upload/foto/'.$data->foto)}}" style="width:150px" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1">Bukti Vaksin</label>
                <img src="{{url('upload/foto/'.$data->bukti_vaksin)}}" style="width:150px" class="form-control">
            </div>
        </div>
  </div>
  <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1"></label>
                <input type="file" name="foto" class="form-control" id="exampleFormControlInput1" >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlInput1"></label>
                <input type="file" name="bukti" class="form-control" id="exampleFormControlInput1">
            </div>
        </div>
  </div>
  <button type="submit" class="btn btn-info">Update</button>
</form>
</div>
@endsection
