@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Страница пользователя</div>

                <div class="panel-body">
                        <p>Это пользователь {{ $user_name }}</p>
                        <img src={{ $user_photo }}>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection