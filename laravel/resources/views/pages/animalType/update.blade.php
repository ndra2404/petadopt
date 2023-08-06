@extends("templates")
@section("maincontent")
<div class="container">
<form action="" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Type</label>
    <input type="text" name="type" value="{{$row->type}}" class="form-control" id="exampleFormControlInput1" placeholder="Kucing">
  </div>
  <button type="submit" class="btn btn-info">Save</button>
</form>
</div>
@endsection
