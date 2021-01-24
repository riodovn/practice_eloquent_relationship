@extends('layouts.app')
@section('content')
    <div class="card">
        <h3>User</h3>
        <div class="card-body">
            <div class='table-responsive'>
                <table class='table table-bordered'>
                    @foreach($user->getAttributes() as $key => $value)
                    <tr>
                        <td>
                            {{ $key }}
                        </td>
                        <td>
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <h3>User Profile</h3>
        <div class="card-body">
            <div class='table-responsive'>
                <table class='table table-bordered'>
                    @if($user->profile != null)
                    @foreach($user->profile->getAttributes() as $key => $value)
                    <tr>
                        <td>
                            {{ $key }}
                        </td>
                        <td>
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
        <h3>User Comments</h3>
        <div class="card-body">
            <div class='table-responsive'>
                <table class='table table-bordered'>
                    @foreach($user->comments as $comment)
                    @if($comment == null)
                    @else
                    @foreach($comment->getAttributes() as $key => $value)
                    <tr>
                        <td>
                            {{ $key }}
                        </td>
                        <td>
                            {{ $value }}
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
