@extends('layouts.app')

@section('title', 'Groups')

@section('content')

    <p>The current Groups are:</p>
    <ul>
        @foreach ($groups as $group)
    <li><a href="{{ route('groups.show', ['group' => $group]) }}">{{ $group -> name }}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('groups.create')}}">Create Group</a>

@endsection