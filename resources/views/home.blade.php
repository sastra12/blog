{{-- @dd($posts) --}}
@extends('layouts.main')

@section('container')
    @if ($posts->count())
        <h1 class="mb-3">{{ $title }}</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="/">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search"
                            value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="img-fluid mt-3" src="{{ asset('storage/' . $posts[0]->image) }}" alt="Card image cap">
                </div>
            @else
                <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}"
                    alt="Card image cap">
            @endif

            <div class="card-body">
                <h3 class="card-title"><a href="{{ route('detail', $posts[0]->slug) }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
                    </h5>
                    <p>
                        <small class="text-muted">
                            By, <a href="/?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                            in <a href="/?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="{{ route('detail', $posts[0]->slug) }}" class="text-decoration-none btn btn-primary">Read
                        more</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $item)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            @if ($item->image)
                                <img class="img-fluid mt-3" src="{{ asset('storage/' . $item->image) }}"
                                    alt="Card image cap">
                            @else
                                <img class="card-img-top"
                                    src="https://source.unsplash.com/500x400?{{ $item->category->name }}"
                                    alt="Card image cap">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p>
                                    <small class="text-muted">
                                        By, <a
                                            href="/?author={{ $item->author->username }}">{{ $item->author->name }}</a>
                                        in <a href="/?category={{ $item->category->slug }}"
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
    @else
        <p class="text-center fs-4">No post found</p>
    @endif

    {{ $posts->links() }}
@endsection
