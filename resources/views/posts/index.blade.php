@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    @foreach($posts as $post)
        <p>Post by: <a href="{{ route('profiles.show', ['profile' => $post->profile]) }}">
            {{ $post->profile->display_name }}</a></p>
        <p>{{ $post->text }}</p>
       

    @endforeach

@endsection