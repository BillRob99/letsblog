@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    @foreach($posts as $post)
        <h5>Post by: <a href="{{ route('profiles.show', ['profile' => $post->profile]) }}">
            {{ $post->profile->display_name }}</a></h5>
            
        <p>{{ $post->text }}</p>
        <p>Comments: {{ $post->comments->count() }} 
        <a href="{{ route('posts.show', ['post' => $post]) }}"><input type="button" value="View Post"></a></p>
        

    @endforeach

@endsection