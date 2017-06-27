@extends('layouts.main')

@section('title')
<title>{{ config('app.name', 'Laravel') }} | Main </title>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    LARAVEL
                </div>
            </div>
        </div>
    </div>
</div>
@endsection