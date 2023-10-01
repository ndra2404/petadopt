@extends("templates")
@section("maincontent")
<div class="container">
<a href="{{route('animal.create')}}" class="btn btn-info" style="margin-top:20px">Add</a>
<table class="table" style="margin-top:20px">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Hewan</th>
            <th>Jenis Hewan</th>
            <th>Ras</th>
            <th>Jenis Kelamin</th>
            <th>Photo</th>
            <th>Vaksin</th>
            <th>Action</th>
        </tr>
        @foreach($animal as $row)
            <tr valign="top">
                <td>{{$loop->index+1}}</td>
                <td>{{$row->nama_hewan}}</td>
                <td>{{$row->type}}</td>
                <td>{{$row->ras}}</td>
                <td>{{$row->jenis_kelamin}}</td>
                <td><img width="80" src="{{url('upload/foto/'.$row->foto)}}" /></td>
                <td><img width="80" src="{{url('upload/vaccine/'.$row->bukti_vaksin)}}" /></td>
                <td>
                    <a href="{{url('animal/update/'.$row->id_hewan)}}" class="btn btn-info btn-sm">Update</a>
                    <a href="{{url('animal/delete/'.$row->id_hewan)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @endforeach
    </thead>
    <tbody>

    </tbody>
</table>
</div>
@endsection
