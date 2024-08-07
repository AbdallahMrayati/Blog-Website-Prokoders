@extends('layouts.user.app')

@section('content')
    <!-- Blog List -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="blog-title">All Blogs</h1>
                <!-- Blog Post -->
                @foreach ($blogs as $item)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->content }}</p>
                            <a href="{{ route('blogs.show', $item->id) }}" class="btn btn-dark">View Blog</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
