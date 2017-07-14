@extends('layouts.main')

@section('title')
<title>{{ config('app.name', 'Laravel') }} | Main </title>
@endsection

@section('content')
<div class="page__title">
    <h1> Главная </h1>
</div>

<div class="page__content">
	<div>
	 Добро пожаловать!
	</div>
</div>

<div class="page__footer">
</div>

@endsection