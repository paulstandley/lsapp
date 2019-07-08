@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Ceate Post</a>
                    <h3>Your Blog Post</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <?php var_dump($posts); ?>
                            <tr>
                                <th>{{$post->title}}</th>
                                <th><a href="/posts/{$post->id}/edit" class="btn btn-primary"></a>Edit</th>    
                            </tr>                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
