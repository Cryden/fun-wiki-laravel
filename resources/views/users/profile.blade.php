@extends('layouts.main')

@section('title')
<title>{{ config('app.name', 'Laravel') }} | Ваш профиль </title>
@endsection

@section('content')
<div class="page__title">
    <h1> Ваш профиль </h1>
</div>

<div class="page__content">
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

<div class="page__footer">
</div>

@endsection