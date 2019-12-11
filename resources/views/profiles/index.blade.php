@extends('layouts.app')

@section('title', 'Profiles')

@section('content')

    <p>The current Profiles are:</p>
    <ul>
        @foreach ($profiles as $profile)
    <li><a href="{{ route('profiles.show', ['profile' => $profile]) }}">{{ $profile -> display_name }}</li>
        @endforeach
    </ul>

    <a href="{{ route('profiles.create')}}">Create Profile</a>

@endsection