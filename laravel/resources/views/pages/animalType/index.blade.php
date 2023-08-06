@extends("templates")
@section("maincontent")
<div class="container">
<a href="{{url('animalType/create')}}" class="btn btn-info" style="margin-top:20px">Add</a>
<table class="table" style="margin-top:20px">
    <thead>
        <tr>
            <th>No</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($types as $type)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$type->type}}</td>
                <td><a href="{{url('animalType/'.$type->id)}}" class="btn btn-info">Edit</a></td>
            </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection
