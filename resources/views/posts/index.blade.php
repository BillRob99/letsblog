@extends('layouts.app')

@section('title', 'Posts')

@section('content')

    <h4><a href="{{ route('posts.create') }}">Want to create a post? Click here!</a></h4>

    @foreach($posts as $post)
        <h5>Post by: <a href="{{ route('profiles.show', ['profile' => $post->profile]) }}">
            {{ $post->profile->display_name }}</a></h5>
            
        <p>{{ $post->text }}</p>
        <p>Comments: {{ $post->comments->count() }} 
        <a href="{{ route('posts.show', ['post' => $post]) }}"><input type="button" value="View Post"></a></p>
        

    @endforeach
    {!! $posts->links() !!}
@endsection