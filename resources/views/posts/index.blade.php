@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>List of Posts</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>

        <h4>Comments:</h4>
        <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->content }}</li>
            @endforeach
        </ul>

        <form action="/comment" method="POST">
            @csrf
            <input type="hidden" name="commentable_id" value="{{ $post->id }}">
            <input type="hidden" name="commentable_type" value="App\Models\Post">
            <textarea name="content" placeholder="Add a comment" required></textarea>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        <hr>
    @endforeach
@endsection
