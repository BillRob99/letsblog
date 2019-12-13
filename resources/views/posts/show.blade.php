@extends('layouts.app')

@section('title', "View Post")

@section('content')
    

    <h3>{{ $post->profile->display_name }}:</h1>
    <p>{{ $post->text }}</p>
    <h3>Comments:</h2>

    @foreach($post->comments as $comment)

    <p><a href="{{ route('profiles.show', ['profile' => $comment->profile]) }}">{{ $comment->profile-> display_name }}</a>: {{ $comment->text}}</p>
    
    @endforeach


@endsection