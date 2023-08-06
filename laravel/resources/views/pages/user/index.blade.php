@extends("templates")
@section("maincontent")
<div class="container">
<a href="" class="btn btn-info" style="margin-top:20px">Add</a>
<table class="table" style="margin-top:20px">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Level</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->level_name}}</td>
                <td>{{$user->status==1?'Active':'Block'}}</td>
                <td>
                    <a href="" class="btn btn-info">Edit</a>
                    <a href="" class="btn btn-warning">Block</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
