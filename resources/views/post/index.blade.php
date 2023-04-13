@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alle Posts<span class="float-end"><a href="/posts/create  "><button
                                    class="btn btn-outline-primary">Neuen Post Erstellen</button></a></span></div>

                </div>
            </div>

            <div class="col-md-10 mt-5">
                @foreach($posts as $post)
                    <div class="card mb-2 p-3">
                        <a class="text-decoration-none text-dark " href="/posts/{{ $post->id }}">
                            <h4>{{ $post->title }}</h4></a>

                        <h5>von <a class="text-dark text-decoration-none" href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></h5>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
