@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="display-5">Post erstellen</div>
            <div class="card">
                <div class="card-body">

                    <form action="/posts" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Titel</label>
                            <input type="text" class="form-control {{ $errors->has('title') ? 'border-danger' : '' }}"
                                   id="title" name="title" value="{{ old('title') }}">
                            <small class="form-text text-danger">{!! $errors->first('title') !!}</small>
                        </div>
                        <div class="form-group">
                            <label for="content">Frage</label>
                            <textarea class="form-control {{ $errors->has('content') ? 'border-danger' : '' }}"
                                      id="content" name="content"
                                      rows="5">{{ old('content') }}</textarea>
                            <small class="form-text text-danger">{!! $errors->first('content') !!}</small>
                        </div>
                        <input class="btn btn-primary mt-4" type="submit" value="Senden">
                    </form>
                    <a class="btn btn-primary btn-sm mt-3 float-right" href="/posts">Zurück</a>
                </div>
            </div>


        </div>
    </div>
@endsection
