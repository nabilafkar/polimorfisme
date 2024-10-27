@extends('layouts.app')

@section('title', 'Videos')

@section('content')
    <h1>List of Videos</h1>

    @foreach ($videos as $video)
        <h2>{{ $video->title }}</h2>
        <p>URL: <a href="{{ $video->url }}" target="_blank">{{ $video->url }}</a></p>

        <h4>Comments:</h4>
        <ul>
            @foreach ($video->comments as $comment)
                <li>{{ $comment->content }}</li>
            @endforeach
        </ul>

        <form action="/comment" method="POST">
            @csrf
            <input type="hidden" name="commentable_id" value="{{ $video->id }}">
            <input type="hidden" name="commentable_type" value="App\Models\Video">
            <textarea name="content" placeholder="Add a comment" required></textarea>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        <hr>
    @endforeach
@endsection
