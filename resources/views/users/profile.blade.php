@extends('layouts.main')

@section('page_title')
<h1>Ваш профиль</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                        <p>Это пользователь {{ $user_name }}</p>
                        <img src={{ $user_photo }}>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection