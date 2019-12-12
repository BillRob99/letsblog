@extends('layouts.app')

@section('title', 'New Post')

@section('content')

    <form method="POST" action="{{ route('posts.store') }}">

        @csrf
        
        <p>What do you want to say?<input type="text" name="text"
            value="{{ old('text') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('posts.index') }}">Cancel</a>

    </form>

@endsection