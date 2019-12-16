@extends('layouts.app')

@section('title', 'New Post')

@section('content')

    <form method="POST" files="true" action="{{ route('posts.store') }}">

        @csrf
        
        <p>What do you want to say?<input type="text" name="text"
            value="{{ old('text') }}"></p>

        <p><input type="file" id="image" name="image" onchange="readURL(this);" accept=".png, .jpg, .jpeg"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('posts.index') }}">Cancel</a>

    </form>

@endsection