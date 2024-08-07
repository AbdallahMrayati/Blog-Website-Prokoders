@extends('layouts.user.app')



@section('content')
    <!-- Blog List -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1 class="blog-title">View Blog</h1>

                <!-- Blog Post -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ $blog->content }}</p>

                    </div>
                </div>

                <!-- Comment Section -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Comments</h5>

                        <!-- Comment List -->
                        @foreach ($blog->comments as $item)
                            <div class="mb-4">
                                <p><strong>{{ $item->author }}:</strong> {{ $item->comment }}.</p>
                            </div>
                        @endforeach


                        <!-- Add Comment Form -->
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="commentAuthor" class="form-label">Name</label>
                                <input type="text" class="form-control" id="commentAuthor" name="author" required>
                            </div>
                            <div class="mb-3">
                                <label for="commentText" class="form-label">Comment</label>
                                <textarea class="form-control" name="comment" id="commentText" rows="3" required></textarea>
                            </div>
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <button type="submit" class="btn btn-dark">Add Comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
