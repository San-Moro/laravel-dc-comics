@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="">
        <p>{{ $comic->description }}</p>
        <dl>
            <dt>Series</dt>
            <dd>{{ $comic->series }}</dd>
        </dl>
    </div>
@endsection