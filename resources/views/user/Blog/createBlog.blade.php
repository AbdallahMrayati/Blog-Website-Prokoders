@extends('layouts.user.app')


@section('content')
    <!-- Blog List -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h1> Create Blog</h1>
                <form action="{{ route('blogs.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" aria-describedby="textHelp" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Content</label>
                        <textarea type="text" class="form-control" id="exampleInputPassword1" name="content"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>


            </div>
        </div>
    </div>
@endsection
