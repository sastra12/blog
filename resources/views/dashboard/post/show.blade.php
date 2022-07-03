@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="{{ route('post.index') }}" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span>
                    Back to
                    all my post</a>
                <a href="{{ route('post.edit', $post->slug) }}" class="btn btn-sm btn-warning"><span
                        data-feather="edit"></span> Edit</a>
                <form class="d-inline" action="{{ route('post.destroy', $post->slug) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle"></span>Delete
                    </button>
                </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img class="img-fluid mt-3" src="{{ asset('storage/' . $post->image) }}" alt="Card image cap">
                    </div>
                @else
                    <img class="img-fluid mt-3" src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="Card image cap">
                @endif
                <article class="mt-2 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
