@extends('layouts.app')
@section('content')
    <div class="table-responsive">
        <table class='table table-bordered table-stripled'>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->status }}</td>
                        <td>
                            <a class='btn btn-warning btn-sm' href="{{ route('users.show',$user) }}">View Profile</a>
                            <a class='btn btn-info btn-sm' href="{{ route('users.comments',$user) }}">View All Comments</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links() }}

@endsection
