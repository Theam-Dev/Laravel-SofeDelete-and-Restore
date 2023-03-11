@extends('app')
@section('content')
<a href="{{route("users.recovery")}}" class="btn btn-primary mb-2">View Delete Records</a>
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
               
                    <form method="POST" action="{{ route('users.delete', $user->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-xs btn-danger" title='Delete'>Delete</button>
                    </form>
              
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection