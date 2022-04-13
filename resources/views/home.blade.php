{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @if ($posts->count())
        <h1 class="mb-5">{{ $title }}</h1>
        <div class="card mb-3">
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title"><a href="{{ route('detail', $posts[0]->slug) }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                    </h5>
                    <p>
                        <small class="text-muted">
                            By, <a
                                href="{{ route('author', $posts[0]->author->username) }}">{{ $posts[0]->author->name }}</a>
                            in <a href="{{ route('category', $posts[0]->category->slug) }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="{{ route('detail', $posts[0]->slug) }}" class="text-decoration-none btn btn-primary">Read
                        more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $item)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $item->category->name }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p>
                                <small class="text-muted">
                                    By, <a
                                        href="{{ route('author', $item->author->username) }}">{{ $item->author->name }}</a>
                                    in <a href="{{ route('category', $item->category->slug) }}"
                                        class="text-decoration-none">{{ $item->category->name }}</a>
                                    {{ $item->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ $item->excerpt }}</p>
                            <a href="{{ route('detail', $item->slug) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
