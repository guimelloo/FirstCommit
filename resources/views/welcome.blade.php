@extends('layouts.main')

@section('title', 'Welcome - FirstCommit')

@section('content')
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Welcome to FirstCommit</h1>
            <p class="tagline">where commit - about my life</p>
        </div>
    </div>

    <!-- About Section -->
    <div class="about-section">
        <div class="container">
            <div class="about-content">
                <h2 class="section-title">About</h2>
                <p>
                    FirstCommit is where I share my journey in the world of technology.
                    Each post is a commit in the story of my life, documenting learnings,
                    challenges and achievements.
                </p>
                <p>
                    Here you find reflections on development, career, and everything that
                    involves the life of someone who chose technology as their path.
                </p>
            </div>
        </div>
    </div>

    <!-- Posts Section -->
    <div class="container">
        <h2 class="section-title">Latest Posts</h2>

        <div class="row">
            @forelse($posts ?? [] as $post)
                <div class="col-12">
                    <div class="post-card">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <div class="post-meta">
                            {{ $post->created_at->format('d/m/Y') }}
                        </div>
                        <div class="post-content">
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="post-card text-center">
                        <h3 class="post-title">No posts yet</h3>
                        <p class="post-content">Soon I'll be sharing my experiences and learnings here.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
