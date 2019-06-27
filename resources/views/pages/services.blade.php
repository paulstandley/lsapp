@extends('layouts/app')
@section('content')
  <header class="header_h1">
    <h1>{{$title}}</h1>
  </header>  
  @if(count($services) > 0) 
    <ul>
      @foreach ($services as $service)
    <li>{{$service}}</li>  
      @endforeach
    </ul>  
  @endif
@endsection