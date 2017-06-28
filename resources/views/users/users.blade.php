@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Пользователи</div>

                <div class="panel-body">
                    @foreach ($users_data as $user_data)
                        <p> 
                        <a href="{{ url('/user/'.$user_data->user_slug) }}">{{ $user_data->user_name }}</a>
                        @if($user_data->user_isOnline)
                            user is online!!
                        @endif
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
