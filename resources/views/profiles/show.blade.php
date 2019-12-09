@extends('layouts.app')

@section('title', $profile->name)

@section('content')
    <ul>
        <li>Name: {{$profile->name}}</li>
        <li>Email: {{$profile->user->email}}

       
        <h2>Groups:</h2>

        @foreach ($profile->groups as $group)
            <li>Name: {{$group->name}}</li>
        @endforeach
    </ul>
@endsection