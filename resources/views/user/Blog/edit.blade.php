@extends('layouts.user.app')


@section('content')
    <!-- Blog List -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1> Edit Blog</h1>
                <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="textHelp"
                            value="{{ $blog->title }}" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Content</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" name="content">{{ $blog->content }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
