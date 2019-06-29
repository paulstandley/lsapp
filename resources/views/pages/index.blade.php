@extends('layouts/app')
@section('content')
  <div class="jumbotron text-center">
    <header class="index_page_header">
    <h1>{{$title}}</h1>
    <p>This app is using Laravel</p>
    <p>
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
      <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
    </header>
  </div>
@endsection