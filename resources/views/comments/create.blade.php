@extends('layouts.app')

@section('title', 'New Comment')

@section('content')

    <form method="POST" action="{{ route('comments.store') }}">

        @csrf
        
        <p>What do you want to say?<input type="text" name="text"
            value="{{ old('text') }}"></p>

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <input type="submit" value="Submit">

        <a href="{{ route('posts.show', ['post' => $post]) }}">Cancel</a>

    </form>

@endsection