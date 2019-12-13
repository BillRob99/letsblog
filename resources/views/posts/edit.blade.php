@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <form method="POST" action="{{ route('posts.update', ['post' => $post]) }}">

        @csrf
        
        <p>New text: <input type="text" name="text"
            value="{{ $post->text }}"></p>

       
        <input type="submit" value="Submit">
        
        <a href="{{ route('posts.show', ['post' => $post]) }}">Cancel</a>

    </form>

@endsection