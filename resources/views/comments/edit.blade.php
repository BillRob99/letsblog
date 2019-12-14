@extends('layouts.app')

@section('title', 'Edit Comment')

@section('content')

    <form method="POST" action="{{ route('comments.update', ['comment' => $comment]) }}">

        @csrf
        
        <p>New text: <input type="text" name="text"
            value="{{ $comment->text }}"></p>

       
        <input type="submit" value="Submit">
        
        <a href="{{ route('comments.show', ['comment' => $comment]) }}">Cancel</a>

    </form>

@endsection