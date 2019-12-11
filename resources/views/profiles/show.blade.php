@extends('layouts.app')

@section('title', $profile->display_name)

@section('content')
    <ul>
        <li>Name: {{$profile->display_name}}</li>
        <li>Gender: {{$profile->gender}}</li>
        <li>Bio: {{$profile->bio}}</li>
        <li>Email: {{$profile->user->email}}

       
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