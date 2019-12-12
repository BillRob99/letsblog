@extends('layouts.app')

@section('title', $profile->display_name)

@section('content')
    <ul>
        <h3>{{$profile->display_name}}</h3>
        <h6>{{$profile->bio}}</h6>

        <h2>Groups:</h2>

        @foreach ($profile->groups as $group)
            <li>Name: {{$group->name}}</li>
        @endforeach
    </ul>

    <form method="POST"
        action="{{ route('profiles.destroy', ['profile' => $profile]) }}">
        
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection