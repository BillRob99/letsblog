@extends('layouts.app')

@section('title', 'Profiles')

@section('content')

    <p>The current Profiles are:</p>
    <ul>
        @foreach ($profiles as $profile)
            <li>{{ $profile -> id }}</li>
        @endforeach
    </ul>

@endsection