@extends('layouts.app')

@section('title', 'New Group')

@section('content')

    <form method="POST" files="true" action="{{ route('groups.store') }}">

        @csrf
        
        <p>What do you want to call the group?<input type="text" name="name"
            value="{{ old('group') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('groups.index') }}">Cancel</a>

    </form>

@endsection