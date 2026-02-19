@extends('layouts.main')

@section('title', 'Create Post - FirstCommit')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/create-post.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="create-container">
        <h1 class="page-title">Create New Post</h1>
        <p class="page-subtitle">Share your ideas and experiences</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> There are some issues with your data:
                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-card">
            <form action="{{ route('posts.store') }}" method="POST" id="postForm">
                @csrf

                <div class="mb-4">
                    <label for="title" class="form-label">Title *</label>
                    <input
                        type="text"
                        class="form-control @error('title') is-invalid @enderror"
                        id="title"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Enter your post title"
                        maxlength="255"
                        required
                    >
                    <div class="form-text">Maximum 255 characters</div>
                    @error('title')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="content" class="form-label">
                        Content *
                        <span class="char-counter" id="charCounter">0 characters</span>
                    </label>
                    <textarea
                        class="form-control @error('content') is-invalid @enderror"
                        id="content"
                        name="content"
                        placeholder="Write your post content..."
                        required
                    >{{ old('content') }}</textarea>
                    <div class="form-text">Be creative and authentic</div>
                    @error('content')
                        <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-buttons">
                    <button type="submit" class="btn-submit">Publish Post</button>
                    <a href="/" class="btn-cancel">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

