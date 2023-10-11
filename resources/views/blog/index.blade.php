@extends('layouts.app')

@section('content')
    <h1>Blog</h1>

    <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create Post</a>

    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>
                    <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
