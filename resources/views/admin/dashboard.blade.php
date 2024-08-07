@extends('layouts.admin.app')

@section('content')
    <div class="content p-1">
        <button type="button" class="btn btn-success "><a style="color: white; text-decoration:none"
                href="{{ route('blogs.create') }}">Add Blog</a></button>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->content }}</td>
                        <td>
                            <a href="{{ route('blogs.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('blogs.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this blog entry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
