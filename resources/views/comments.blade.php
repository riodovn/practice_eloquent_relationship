@extends('layouts.app')
@section('content')
    <h3>All Comments</h3>

    <div class="table-responsive">
        <table class='table table-bordered table-stripled'>
            <thead>
                <tr>
                    <th>Tác giả</th>
                    <th>Bình luận</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <td>{{ $comment->post->user->name }}</td>
                        <td>{{ $comment->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
