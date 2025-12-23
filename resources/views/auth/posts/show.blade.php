@extends('layouts.auth')

@section('title', 'Post Details')

@section('content')
    <div class="container my-4">

        {{-- Success Message --}}
        @if (session('success'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Post Card --}}
        <div class="card shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">📄 Post Details</h5>

                {{-- Status --}}
                <span class="badge {{ $post->is_publish ? 'bg-success' : 'bg-warning text-dark' }}">
                    {{ $post->is_publish ? 'Published' : 'Draft' }}
                </span>
            </div>

            <div class="card-body">
                <div class="row">

                    {{-- Image --}}
                    <div class="col-md-4 text-center">
                        <img src="{{ $post->gallery ? asset('uploads/posts/' . $post->gallery->image) : asset('uploads/no_user/no_user.jpg') }}"
                            class="img-fluid rounded mb-3" alt="Post Image">
                    </div>

                    {{-- Content --}}
                    <div class="col-md-8">
                        <h4 class="fw-bold mb-3">{{ $post->title }}</h4>

                        {{-- Category --}}
                        <p class="mb-2">
                            <strong>Category:</strong>
                            <span class="badge bg-secondary">
                                {{ $post->category?->name ?? 'No Category' }}
                            </span>
                        </p>

                        <hr>

                        {{-- Description --}}
                        <div class="post-description">
                            {!! $post->description !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer --}}
            <div class="card-footer fw-bold d-flex justify-content-between">
                <span>🕒 Created: {{ $post->created_at->format('d M Y') }}</span>
                <span>♻️ Updated: {{ $post->updated_at->format('d M Y') }}</span>
            </div>
        </div>

        {{-- Actions --}}
        <div class="d-flex gap-2">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">⬅ Back</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info text-white">✏ Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">🗑 Delete</button>
            </form>
        </div>
    </div>
    </div>


@endsection
