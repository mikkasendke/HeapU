@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $user->name }}s Profil</div>

                </div>
            </div>

            <div class="col-md-10 mt-5">
                <div class="card-header mt-3">{{ $user->name }}s Posts</div>
                @foreach($user->posts as $post)
                    <div class="card mb-2 p-3">
                        <a class="text-decoration-none text-dark " href="/posts/{{ $post->id }}">
                            <h4>{{ $post->title }}</h4></a>
                    </div>
                @endforeach
            </div>
            <div class="col-md-10 mt-5">
                <div class="card-header mt-3">{{ $user->name }}s Kommentare</div>
                @foreach($user->comments as $comment)
                    <div class="card mb-2 p-3">
                        <a class="text-decoration-none text-dark " href="/posts/{{ $comment->post->id }}">
                            <h4>{{ $comment->content }}</h4></a>

                        <h5>zu <a class="text-dark text-decoration-none"
                                  href="/posts/{{ $comment->post->id }}">{{ $comment->post->title }}</a> von <a
                                class="text-dark text-decoration-none"
                                href="/user/{{ $comment->post->user->id }}">{{ $comment->post->user->name }}</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
