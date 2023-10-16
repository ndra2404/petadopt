@extends("templates")
@section("maincontent")
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama hewan</label>
    <input type="text" name="nama_hewan" required class="form-control" id="exampleFormControlInput1" placeholder="Joni">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Hewan</label>
    <select class="form-control" required name="type" id="exampleFormControlSelect1">
        @foreach($types as $type)
        <option value="{{$type->id}}">{{$type->type}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ras</label>
    <input type="text" name="ras" required class="form-control" id="exampleFormControlInput1" placeholder="ceper">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Harga</label>
    <input type="number" name="harga" required class="form-control" id="exampleFormControlInput1" placeholder="100.000">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select class="form-control" name="jenis" id="exampleFormControlSelect1">
      <option value="jantan">Jantan</option>
      <option value="betina">Betina</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">rekam_medis</label>
    <textarea class="form-control" required name="rekam_medis" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Penjelasan</label>
    <textarea class="form-control" required name="penjelasan" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Foto</label>
    <input type="file" name="foto" required class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Bukti Vaksin</label>
    <input type="file" required name="bukti" class="form-control" id="exampleFormControlInput1">
  </div>
  <button type="submit" class="btn btn-info">Save</button>
</form>
</div>
@endsection
