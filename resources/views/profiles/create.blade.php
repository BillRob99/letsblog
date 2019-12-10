@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')
    <form method="POST" action="{{ route('profiles.store') }}">
        @csrf
        <p>Name: <input type="text" name="name"></p>
        <p>Gender: <input type="text" name="gender"></p>
        <p>Bio: <input type="text" name="bio"></p>
        <p>User ID: <input type="number" name="user_id"></p>
        <input type="submit" value="Submit">
        <a href="{{ route('profiles.index') }}">Cancel</a>
    </form>
@endsection