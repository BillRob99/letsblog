@extends('layouts.app')

@section('title', 'Group')

@section('content')

    <h1>{{$group->name}}:</h1>
    <ul>
        @foreach ($group->profiles as $profile)
    <li><a href="{{ route('profiles.show', ['profile' => $profile]) }}">{{ $profile->display_name }}</a></li>
        @endforeach
    </ul>

    <h1><a href="{{ route('groups.join', ['group' => $group])}}">Join Group</a></h1>
@endsection