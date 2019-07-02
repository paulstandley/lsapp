@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Witten on the {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>No Posts found</p>
    @endif
@endsection