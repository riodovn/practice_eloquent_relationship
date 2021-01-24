@extends('layouts.app')
@section('content')
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
@endsection