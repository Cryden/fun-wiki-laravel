@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach ($users as $user)
                        <p> {{ $user->user_name }} </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection