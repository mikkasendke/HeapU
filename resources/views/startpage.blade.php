@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <img src="http://localhost:8000/storage/icon_original.png" class="img-fluid" style="width: 20%;" alt="Icon">
        <h1 class="display-1 pt-xxl-5"><span class="text-primary">Heap</span> Underflow.</h1>
        <div class="d-flex justify-content-center gap-2">
            <a href="/posts">
                <button type="button" class="btn btn-outline-primary">Read</button>
            </a>
            <a href="/posts/create">
                <button type="button" class="btn btn-primary">Create Post</button>
            </a>
        </div>
    </div>
@endsection
