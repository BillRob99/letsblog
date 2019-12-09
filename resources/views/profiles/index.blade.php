@extends('layouts.app')

@section('title', 'Profiles')

@section('content')

    <p>The current Profiles are:</p>
    <ul>
        @foreach ($profiles as $profile)
    <li><a href="{{ route('profiles.show', ['id' => $profile -> id]) }}">{{ $profile -> name }}</li>
        @endforeach
    </ul>

@endsection