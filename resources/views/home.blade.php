@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    @foreach ($posts as $item)
        <article class="border-bottom mb-4">
            <h2><a href="{{ route('detail', $item->slug) }}">{{ $item->title }}</a></h2>
            <p>By, <a href="{{ route('author', $item->author->username) }}">{{ $item->author->name }}</a> in <a
                    href="{{ route('category', $item->category->slug) }}"
                    class="text-decoration-none">{{ $item->category->name }}</a></p>
            <p>{{ $item->excerpt }}</p>
            <p><a href="{{ route('detail', $item->slug) }}">Read more..</a></p>
        </article>
    @endforeach
@endsection
