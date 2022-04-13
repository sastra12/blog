@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $title }}</h1>
    <p>By, <a href="{{ route('author', $detail->author->username) }}">{{ $detail->author->username }}</a> in <a
            href="{{ route('category', $detail->category->slug) }}">{{ $detail->category->name }}</a>
    </p>
    <p>{{ $detail->body }}</p>
    <a href="{{ route('home') }}">Back To Home Page </a>
@endsection
