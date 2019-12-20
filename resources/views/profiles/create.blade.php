@extends('layouts.app')

@section('title', 'Create Profile')

@section('content')

    <form method="POST" action="{{ route('profiles.store') }}">

        @csrf

        <p>Name: <input type="text" name="display_name"
            value="{{ old('name') }}"></p>

        <p>Gender: <select name="gender">

                <option value="Male">
                    Male
                </option>

                <option value="Female">
                    Female
                </option>

            </select>
            
        </p>

        <p>Bio: <input type="text" name="bio"
            value="{{ old('bio') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('profiles.index') }}">Cancel</a>

    </form>

@endsection