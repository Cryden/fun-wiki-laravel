@extends('layouts.main')

@section('title')
<title>{{ config('app.name', 'Laravel') }} | Страница пользователя </title>
@endsection

@section('content')
<div class="page__title">
    <h1> Страница пользователя </h1>
</div>

<div class="page__content">
    <p>Это пользователь {{ $user_name }}</p>
    <img src={{ $user_photo }}>
</div>

<div class="page__footer">
</div>

@endsection