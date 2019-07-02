@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ action('PostController@store') }}" method="POST">
      <input name="title" type="text" value="{{ csrf_token() }}" >
      
    </form>  

@endsection