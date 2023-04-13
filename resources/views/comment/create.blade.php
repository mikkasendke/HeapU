@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="display-5">Erstelle einen Kommentar zu "<span>{{ $post->title }}</span>" von {{ $post->user->name }}</div>
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('comments.store', ['post_id' => $post->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <label for="content">Kommentar erstellen</label>
                            <textarea class="form-control {{ $errors->has('content') ? 'border-danger' : '' }}"
                                      id="content" name="content"
                                      rows="5">{{ old('content') }}</textarea>
                            <small class="form-text text-d  anger">{!! $errors->first('content') !!}</small>
                        </div>
                        <input class="btn btn-primary mt-4" type="submit" value="Senden">
                    </form>
                    <a class="btn btn-primary btn-sm mt-3 float-right" href="/posts/{{ $post->id }}">Zurück</a>
                </div>
            </div>


        </div>
    </div>
@endsection
