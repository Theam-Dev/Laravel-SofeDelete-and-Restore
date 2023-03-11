@extends('app')
@section('content')
<a href="{{route("users.index")}}" class="btn btn-primary mb-2">Back</a>
<a href="{{ route('users.restore.all') }}" class="btn btn-success  mb-2">Restore All</a>
<table class="table">

<thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.restore', $user->id) }}" class="btn btn-success">Restore</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection