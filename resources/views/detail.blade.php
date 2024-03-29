@extends('layouts.main')

@section('container')
    <h1 class="mb-3">{{ $detail->title }}</h1>
    <p>By, <a href="/?author={{ $detail->author->username }}">{{ $detail->author->username }}</a> in <a
            href="/?category={{ $detail->category->slug }}">{{ $detail->category->name }}</a>
    </p>
    @if ($detail->image)
        <div style="max-height: 350px; overflow:hidden;">
            <img class="img-fluid mt-3" src="{{ asset('storage/' . $detail->image) }}" alt="Card image cap">
        </div>
    @else
        <img class="img-fluid" src="https://source.unsplash.com/1200x400?{{ $detail->category->name }}" alt="Card image cap">
    @endif

    <article class="mt-2 fs-5">
        {!! $detail->body !!}
    </article>
    <a href="/">Back To Home Page </a>
@endsection
