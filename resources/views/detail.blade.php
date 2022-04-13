@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $detail->title }}</h1>
    <p>By, <a href="{{ route('author', $detail->author->username) }}">{{ $detail->author->username }}</a> in <a
            href="{{ route('category', $detail->category->slug) }}">{{ $detail->category->name }}</a>
    </p>
    <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $detail->category->name }}"
        alt="Card image cap">
    <article class="mt-2 fs-5">
        {!! $detail->body !!}
    </article>
    <a href="{{ route('home') }}">Back To Home Page </a>
@endsection
