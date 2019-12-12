@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    @foreach($posts as $post)
        <p>Post by: <a href="{{ route('profiles.show', ['profile' => $post->profile]) }}">
            {{ $post->profile->display_name }}</a></p>
        <p>{{ $post->text }}</p>
        <p>Comments: {{ $post->comments->count() }} 
        <a href="{{ route('posts.show', ['post' => $post]) }}"><input type="button" value="View Post"></p>
        

    @endforeach

@endsection