@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a class="text-dark text-decoration-none" href="/posts/{{ $post->id }}"><h1>{{ $post->title }}</h1></a>
                        <span class="float-end">von <a class="text-dark text-decoration-none" href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></span>
                    </div>
                    <div class="card-body">
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Kommentare</h3>
                        <div class="float">
                            <a href="/comments/create/{{ $post->id }}"><button class="btn btn-outline-success">Kommentiere!</button></a>
                        </div>

                    </div>
                    <div class="card-body">
                        @foreach($post->comments as $comment)
                            <div class="card mb-2">
                                <div class="card-header">
                                    Antwort von <a class="text-decoration-none text-dark" href="/user/{{ $comment->user->id }}"><h5>{{ $comment->user->name }}</h5></a>
                                </div>
                                <div class="card-body">
                                    <p>{{ $comment->content }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
