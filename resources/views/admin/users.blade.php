@extends('layouts.admin')

@section('content')

<div class="page__title">
    <h1> Пользователи </h1>
</div>


<div class="page__content">

<div class="container-liquid">

<table class="table table-inverse">
  <thead>
    <tr>
      <th>#</th>
      <th>User Name</th>
      <th>Status</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>

@foreach ($users_data as $user_data)
    <tr class="
        @if($user_data->user_isOnline)
            bg-success
        @endif
    ">
        <th scope="row">{{ $user_data->user_id }}</th>
        <th scope="row">{{ $user_data->user_name }}</th>
        <th scope="row">                
        </th>
        <th>
        </th>
        <th>
        </th>
    </tr>
@endforeach

  </tbody>
</table>

</div>

</div>

@endsection