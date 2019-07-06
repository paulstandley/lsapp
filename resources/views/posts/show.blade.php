@extends('layouts.app')

@section('content')
    <div class="well">
        <a href="/posts" class="btn btn-primary">Go Back</a>
        <h1>{{$post->title}}</h1>
        <div>
          {!!$post->body!!}
        </div>
        <hr>
        <small>Witten on the {{$post->created_at}}</small>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>
        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger p-2'])}}
        {!! Form::close() !!}
    </div>
@endsection