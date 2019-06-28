@extends('layouts/app')
@section('content')
  <header class="header_h1 m-2 p-2">
    <h1>{{$title}}</h1>
  </header>  
  @if(count($services) > 0) 
    <ul class="list-group">
      @foreach ($services as $service)
    <li class="list-group-item">{{$service}}</li>  
      @endforeach
    </ul>  
  @endif
@endsection